<?php
/**
 * Reverse proxy for IPMI/BMC web UIs.
 * Routes: /ipmi_proxy.php/{token}/{bmc_path...}
 * - HTTP requests are proxied via cURL with session cookies.
 * - WebSocket upgrade requests are diverted to ipmi_ws_relay.php.
 */
session_start();

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/lib/ipmi_web_session.php';
require_once __DIR__ . '/lib/ipmi_proxy_debug.php';
require_once __DIR__ . '/lib/ipmi_bmc_curl.php';

function ipmiProxyWsRelayPath(string $scheme, string $bmcHost, string $path, string $token): string
{
    $fullTarget = strtolower($scheme) . '://' . $bmcHost . $path;
    return '/ipmi_ws_relay.php?token=' . rawurlencode($token) . '&target=' . rawurlencode($fullTarget);
}

/** @return list<string> */
function ipmiProxyGetBmcHostAliases(string $bmcIp): array
{
    return ipmiBmcGetHostAliases($bmcIp);
}

function ipmiProxyBmcPreferredOriginHost(string $bmcIp): string
{
    return ipmiBmcPreferredOriginHost($bmcIp);
}

/**
 * @param \CurlHandle|resource $ch
 */
function ipmiProxyApplyCurlBmcUrlAndResolve($ch, string $bmcUrl, string $bmcIp): bool
{
    return ipmiBmcApplyCurlUrlAndResolve($ch, $bmcUrl, $bmcIp);
}

/**
 * Escaped slashes as in JSON or minified JS: wss:\/\/host\/path
 */
function ipmiProxyRewriteEscapedWebSocketUrls(string $body, string $bmcHost, string $token): string
{
    $q = preg_quote($bmcHost, '#');
    $cb = static function (array $m) use ($bmcHost, $token): string {
        $scheme = strtolower($m[1]);
        $pathJson = $m[2] ?? '';
        $path = str_replace('\/', '/', $pathJson);
        if ($path === '' || $path[0] !== '/') {
            $path = '/' . ltrim($path, '/');
        }
        return ipmiProxyWsRelayPath($scheme, $bmcHost, $path, $token);
    };
    $body = preg_replace_callback(
        '#\b(wss|ws):\\\\/\\\\/' . $q . '(?::\\d+)?((?:\\\\/[^"\\\\]*)*)#i',
        $cb,
        $body
    );
    return $body;
}

/**
 * Rewrite wss/ws URLs that point at the BMC so the browser opens WebSockets on this host
 * (ipmi_ws_relay.php). Direct wss:// to the BMC IP is unreachable from user browsers;
 * routing via ipmi_proxy.php + 307 is unreliable because many browsers skip redirects on WS.
 */
function ipmiProxyRewriteWebSocketUrls(string $body, string $bmcHost, string $token): string
{
    $q = preg_quote($bmcHost, '#');
    return preg_replace_callback(
        '#\b(wss|ws)://' . $q . '(?::\d+)?(/[^"\'\\\\s\)\]\},;]*)?#i',
        static function (array $m) use ($bmcHost, $token): string {
            $scheme = strtolower($m[1]);
            $path = (isset($m[2]) && $m[2] !== '') ? $m[2] : '/';
            $fullTarget = $scheme . '://' . $bmcHost . $path;
            return '/ipmi_ws_relay.php?token=' . rawurlencode($token) . '&target=' . rawurlencode($fullTarget);
        },
        $body
    );
}

/**
 * Rewrite http(s) BMC URLs to the proxy path, including JSON-style escaped slashes.
 * iLO/Redfish often returns URLs only inside JSON; minified JS may use https:\/\/ as well.
 */
function ipmiProxyRewriteHttpBmcUrls(string $body, string $bmcHost, string $tokenPrefix): string
{
    $tpJson = str_replace('/', '\\/', $tokenPrefix);
    $pairs = [
        ['https://' . $bmcHost, $tokenPrefix],
        ['https:\\/\\/' . $bmcHost, $tpJson],
        ['http://' . $bmcHost, $tokenPrefix],
        ['http:\\/\\/' . $bmcHost, $tpJson],
    ];
    foreach ($pairs as [$from, $to]) {
        $body = str_replace($from, $to, $body);
    }
    return $body;
}

/**
 * iLO 5/6 SPA uses root-relative API and asset paths. From a proxied page, /js/... hits the
 * panel origin (wrong). Longer prefixes first so /redfish/v1/ is not broken by /redfish/.
 */
function ipmiProxyRewriteIloRootRelative(string $body, string $token): string
{
    $px = '/ipmi_proxy.php/' . rawurlencode($token);
    $pxj = str_replace('/', '\\/', $px);
    $roots = [
        '/redfish/v1/',
        '/redfish/',
        '/rest/v1/',
        '/rest/',
        '/js/',
        '/css/',
        '/fonts/',
        '/img/',
        '/images/',
        '/json/',
        '/api/',
        '/html/',
        '/themes/', // iLO 4 classic UI CSS bundles (e.g. /themes/hpe/css/...)
        '/sse/', // iLO 5/6 UI event stream (e.g. /sse/ui)
        '/favicon.ico', // often requested at site root; must route through proxy
    ];
    $pairs = [];
    foreach ($roots as $r) {
        $ej = str_replace('/', '\\/', $r);
        $pairs[] = ['"' . $r, '"' . $px . $r];
        $pairs[] = ["'" . $r, "'" . $px . $r];
        $pairs[] = ['+"' . $r, '+"' . $px . $r];
        $pairs[] = ['"' . $ej, '"' . $pxj . $ej];
    }
    foreach ($pairs as [$from, $to]) {
        $body = str_replace($from, $to, $body);
    }
    return $body;
}

/**
 * iLO pages embed the BMC DNS name in JSON or absolute URLs. PTR from the panel may not match
 * that name; harvesting hints lets the injected script rewrite client calls to the real hostname.
 *
 * @return list<string>
 */
function ipmiProxyExtractIloHostnameHintsFromHtml(string $html, string $panelHostLower): array
{
    $panelHostLower = strtolower(trim($panelHostLower));
    $colon = strrpos($panelHostLower, ':');
    if ($colon !== false && strpos($panelHostLower, ']') === false) {
        $panelHostLower = substr($panelHostLower, 0, $colon);
    }

    $found = [];
    $patterns = [
        '/"(?:hostName|hostname|HostName|dns_hostname|iLOFQDN|DnsName|DNSName)"\s*:\s*"([^"]+)"/',
        '#https?://([a-z0-9][a-z0-9.-]*\.[a-z]{2,})/(?:redfish|json|rest|sse|js|html|api)(?:/|[\s"\'\\\\])#i',
    ];
    foreach ($patterns as $re) {
        if (preg_match_all($re, $html, $m)) {
            foreach ($m[1] as $h) {
                $h = strtolower(trim((string) $h));
                if ($h === '' || $h === 'localhost' || $h === $panelHostLower) {
                    continue;
                }
                if (!str_contains($h, '.')) {
                    continue;
                }
                $found[$h] = true;
            }
        }
    }

    return array_keys($found);
}

/**
 * iLO SPAs often call fetch(location.origin + "/redfish/..."), which never appears as a static
 * string we can rewrite. Patch fetch/XHR/WebSocket at runtime + optional &lt;base href&gt;.
 *
 * Also rewrites absolute https://&lt;BMC host or IP&gt;/... so the browser does not call the BMC
 * directly (only the panel can reach it).
 */
function ipmiProxyInjectIloHeadFixes(string $html, string $token, ?string $redfishXAuthToken = null, string $bmcIp = ''): string
{
    if (stripos($html, 'data-ipmi-proxy-ilo-patch') !== false) {
        return $html;
    }

    $px = '/ipmi_proxy.php/' . rawurlencode($token);
    $pxJs = json_encode($px, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_SLASHES);
    $xTok = $redfishXAuthToken !== null ? trim($redfishXAuthToken) : '';
    $xJs = json_encode($xTok, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

    $bmcHosts = [];
    if ($bmcIp !== '') {
        foreach (ipmiProxyGetBmcHostAliases($bmcIp) as $h) {
            $h = trim((string) $h);
            if ($h !== '') {
                $bmcHosts[] = $h;
            }
        }
    }

    $panelHint = strtolower((string) ($_SERVER['HTTP_HOST'] ?? ''));
    foreach (ipmiProxyExtractIloHostnameHintsFromHtml($html, $panelHint) as $hint) {
        $bmcHosts[] = $hint;
    }

    $bmcHosts = array_values(array_unique(array_map(static function ($v) {
        return strtolower(trim((string) $v));
    }, $bmcHosts)));
    $hostsJs = json_encode($bmcHosts, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_SLASHES);

    $iconHref = htmlspecialchars($px . '/favicon.ico', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    $patch = '<link rel="icon" href="' . $iconHref . '" data-ipmi-proxy-icon="1">'
        . '<script data-ipmi-proxy-ilo-patch="1">'
        . '(function(){var P=' . $pxJs . ';var A=' . $xJs . ';var H=' . $hostsJs . ';'
        . 'var R=["/redfish/v1/","/redfish/","/rest/v1/","/rest/","/js/","/css/","/fonts/","/img/","/images/","/json/","/api/","/html/","/themes/","/sse/","/cgi/","/favicon.ico"];'
        . 'var L=location;var po=L.protocol+"//"+L.host;'
        . 'function iH(h){if(!h)return false;h=String(h).toLowerCase();for(var i=0;i<H.length;i++){if(H[i]&&String(H[i]).toLowerCase()===h)return true;}return false;}'
        . 'function sp(s){if(typeof s!=="string"||s.indexOf(P)===0)return false;for(var i=0;i<R.length;i++){if(s.indexOf(R[i])===0)return true;}return false;}'
        . 'function fu(s){if(typeof s!=="string")return s;if(s.indexOf(po+P)===0)return s;try{var u=new URL(s,po);if(iH(u.hostname)||(u.origin===po&&sp(u.pathname)))return po+P+u.pathname+u.search+u.hash;}catch(e){}return sp(s)?po+P+s:s;}'
        . 'function fx(n){if(typeof A!=="string"||!A)return n;n=n||{};try{var Hd=new Headers(n.headers||{});if(!Hd.has("X-Auth-Token"))Hd.set("X-Auth-Token",A);n.headers=Hd;}catch(e){}return n;}'
        . 'if(window.fetch){var of=window.fetch;window.fetch=function(i,n){try{n=fx(n||{});'
        . 'if(typeof i==="string")return of.call(this,fu(i),n);'
        . 'if(window.Request&&i instanceof Request){if(i.url.indexOf(po+P)===0)return of.call(this,i,n);var u=new URL(i.url,L.href);'
        . 'if(iH(u.hostname)||(u.origin===po&&sp(u.pathname))){var nu=po+P+u.pathname+u.search+u.hash;var Rq=new Request(nu,i);try{var H2=new Headers(Rq.headers);if(typeof A==="string"&&A&&!H2.has("X-Auth-Token"))H2.set("X-Auth-Token",A);Rq=new Request(Rq,{headers:H2});}catch(e2){}return of.call(this,Rq,n);}}'
        . '}catch(e){}return of.call(this,i,n);};}'
        . 'var xp=XMLHttpRequest&&XMLHttpRequest.prototype;if(xp&&xp.open){var oo=xp.open;xp.open=function(m,u,a3,a4,a5){try{if(typeof u==="string")u=fu(u);}catch(e){}return oo.call(this,m,u,a3,a4,a5);};}'
        . 'if(xp&&xp.send){var xs=xp.send;xp.send=function(b){try{if(typeof A==="string"&&A){try{this.setRequestHeader("X-Auth-Token",A);}catch(e3){}}}catch(e4){}return xs.call(this,b);};}'
        . 'if(window.WebSocket){var OW=WebSocket;window.WebSocket=function(u,p){try{'
        . 'if(typeof u==="string"){var wu=new URL(u,L.href);if(iH(wu.hostname)||sp(wu.pathname)||(wu.origin===po&&sp(wu.pathname)))'
        . 'u=(L.protocol==="https:"?"wss:":"ws:")+"//"+L.host+P+wu.pathname+wu.search;}'
        . '}catch(e){}return new OW(u,p);};}'
        . 'if(window.EventSource){var OES=EventSource;window.EventSource=function(u,c){try{if(typeof u==="string")u=fu(u);}catch(e6){}return new OES(u,c);};'
        . 'try{window.EventSource.prototype=OES.prototype;}catch(e7){}}'
        . '})();</script>'
        . '<script data-ipmi-proxy-ilo-patch="1">'
        . '(function(){'
        . 'function sens(u){u=String(u||"");return u.indexOf("health_summary")>=0||u.indexOf("/json/health")>=0||u.indexOf("/sse/")>=0;}'
        . 'function key(u){try{return String(u).split("?")[0];}catch(e){return"";}}'
        . 'function install(){var jq=window.jQuery||window.$;if(!jq||!jq.ajax||jq.ajax.__ipmiProxyAjaxBackoff)return;'
        . 'var oa=jq.ajax;var st={};'
        . 'var w=function(a,b){'
        . 'var opts=(typeof a==="object"&&a!==null)?jq.extend(true,{},a):jq.extend(true,{},b||{},{url:a});'
        . 'var u=opts.url||"";if(!sens(u))return oa.apply(this,arguments);'
        . 'var k=key(u)||u;var slot=st[k]||(st[k]={cf:0,next:0});var now=Date.now();var wait=slot.next>now?slot.next-now:0;'
        . 'function arm(xhr){if(!xhr||!xhr.done||!xhr.fail)return;'
        . 'xhr.done(function(){slot.cf=0;slot.next=0;});'
        . 'xhr.fail(function(xhrObj,ts){if(ts==="abort")return;'
        . 'var bad=!xhrObj||xhrObj.status>=400||ts==="error"||ts==="timeout";'
        . 'if(bad){slot.cf=slot.cf<8?slot.cf+1:8;slot.next=Date.now()+Math.min(3e4,1e3*Math.pow(2,slot.cf));}});}'
        . 'if(wait>0){var d=jq.Deferred();var tid=setTimeout(function(){var x=oa.call(jq,opts);arm(x);if(x&&x.done)x.done(d.resolve).fail(d.reject);else try{d.reject();}catch(e){}},wait);'
        . 'var p=d.promise();try{p.abort=function(){clearTimeout(tid);};}catch(e){}return p;}'
        . 'var x=oa.call(jq,opts);arm(x);return x;};w.__ipmiProxyAjaxBackoff=true;jq.ajax=w;}'
        . 'install();var n=0;var t=setInterval(function(){install();if(++n>=40)clearInterval(t);},250);'
        . '})();</script>';

    // Do not inject <base href>: iLO pages mix root-relative (/js/...) and sibling-relative
    // (jquery.translate.js) URLs; a single base breaks the latter into /TOKEN/jquery... (400).

    return preg_replace('/<head(\s[^>]*)?>/i', '$0' . $patch, $html, 1) ?? $html;
}

function ipmiProxyIsIloFamily(string $bmcType): bool
{
    $t = strtolower(trim($bmcType));
    return $t === 'ilo4' || str_starts_with($t, 'ilo') || str_contains($t, 'ilo');
}

function ipmiProxyRewriteBmcResponseBody(string $body, string $bmcIp, string $token, string $tokenPrefix, string $bmcType, bool $isHtml = false): string
{
    $aliases = ipmiProxyGetBmcHostAliases($bmcIp);
    $mentionsHost = false;
    foreach ($aliases as $host) {
        $h = trim((string) $host);
        if ($h !== '' && strpos($body, $h) !== false) {
            $mentionsHost = true;
            break;
        }
    }
    // Avoid regex scans over 200KB+ vendor bundles (jquery, etc.) when the BMC hostname never appears.
    if ($mentionsHost) {
        foreach ($aliases as $host) {
            $body = ipmiProxyRewriteEscapedWebSocketUrls($body, $host, $token);
            $body = ipmiProxyRewriteWebSocketUrls($body, $host, $token);
            $body = ipmiProxyRewriteHttpBmcUrls($body, $host, $tokenPrefix);
        }
    }

    // Root-relative rewrites: do NOT key off '"/js/' for JS bundles — jquery.min.js often contains that
    // substring. iLO HTML pages are small: always rewrite root-relative paths when vendor is iLO.
    $needsIloRoot = ($isHtml && ipmiProxyIsIloFamily($bmcType))
        || strpos($body, '"/redfish/') !== false
        || strpos($body, "'/redfish/") !== false
        || strpos($body, '"/rest/') !== false
        || strpos($body, '"\\/redfish\\/') !== false
        || strpos($body, '"\\/rest\\/') !== false
        || strpos($body, '"/sse/') !== false
        || strpos($body, '"\\/sse\\/') !== false
        || strpos($body, '"/json/') !== false
        || strpos($body, '"\\/json\\/') !== false
        || strpos($body, '"/api/') !== false
        || strpos($body, '"\\/api\\/') !== false
        || strpos($body, '"/html/') !== false
        || strpos($body, '"\\/html\\/') !== false
        || strpos($body, '"/favicon.ico') !== false
        || strpos($body, '"\\/favicon.ico') !== false
        || strpos($body, '"/themes/') !== false
        || strpos($body, '"\\/themes\\/') !== false;

    if ($needsIloRoot) {
        $body = ipmiProxyRewriteIloRootRelative($body, $token);
    }

    return $body;
}

/**
 * Stylesheets often use url(/fonts/...) or url(../fonts/...). Those must point at the proxy prefix
 * or the browser requests the panel origin and DevTools reports failed stylesheet/font loads.
 */
function ipmiProxyRewriteCssResponseBody(string $body, string $bmcPath, string $tokenPrefix, string $bmcIp): string
{
    $tp = rtrim($tokenPrefix, '/');
    $dir = dirname(str_replace('\\', '/', $bmcPath));
    if ($dir === '.' || $dir === '') {
        $dir = '/';
    }

    foreach (ipmiProxyGetBmcHostAliases($bmcIp) as $host) {
        $body = str_replace('https://' . $host, $tp, $body);
        $body = str_replace('http://' . $host, $tp, $body);
    }

    $body = str_replace('@import "/', '@import "' . $tp . '/', $body);
    $body = str_replace("@import '/", "@import '" . $tp . '/', $body);
    $body = str_replace('@import url("/', '@import url("' . $tp . '/', $body);
    $body = str_replace("@import url('/", "@import url('" . $tp . '/', $body);

    return preg_replace_callback(
        '#\burl\s*\(\s*(["\']?)([^)]+)\1\s*\)#i',
        static function (array $m) use ($tp, $dir): string {
            $path = trim($m[2]);
            $q = $m[1];
            if ($path === '') {
                return $m[0];
            }
            $lower = strtolower($path);
            if (str_starts_with($lower, 'data:') || str_starts_with($lower, 'blob:') || preg_match('#^(https?:)?//#i', $path)) {
                return $m[0];
            }
            if (str_starts_with($path, '/ipmi_proxy.php/')) {
                return $m[0];
            }
            if (str_starts_with($path, '/')) {
                return 'url(' . $q . $tp . $path . $q . ')';
            }
            $resolved = ipmiWebResolveRelativePathFromDir($dir, $path);

            return 'url(' . $q . $tp . $resolved . $q . ')';
        },
        $body
    ) ?? $body;
}

if (!isset($_SESSION['user_id'])) {
    http_response_code(401);
    echo 'Authentication required';
    exit;
}

// Release session lock immediately: the browser loads HTML + /js/iLO.js + CSS in parallel; holding
// the lock here blocks those requests until the BMC response finishes → failed script load, iLO undefined.
session_write_close();

// Default 30s max_execution_time kills mid-response after headers → Chrome ERR_CONNECTION_RESET + "200 (OK)".
// Large BMC assets + URL rewrites can exceed 30s on slow links; SSE uses set_time_limit(0) below.
set_time_limit(300);
ignore_user_abort(true);

ipmiProxyDebugMaybeSetCookie();

  header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
  header('Pragma: no-cache');
header('Referrer-Policy: same-origin');

// /ipmi_proxy.php/{token} without trailing slash makes relative URLs resolve to /ipmi_proxy.php/{file} (broken).
$reqPath = (string) parse_url((string) ($_SERVER['REQUEST_URI'] ?? ''), PHP_URL_PATH);
if (preg_match('#^/ipmi_proxy\.php/([a-f0-9]{64})$#i', $reqPath)) {
    $qs = (string) parse_url((string) ($_SERVER['REQUEST_URI'] ?? ''), PHP_URL_QUERY);
    header('Location: ' . $reqPath . '/' . ($qs !== '' ? ('?' . $qs) : ''), true, 302);
    exit;
}

$pathInfo = $_SERVER['PATH_INFO'] ?? '';
if ($pathInfo === '' && isset($_SERVER['REQUEST_URI'])) {
    $uri = (string)$_SERVER['REQUEST_URI'];
    $prefix = '/ipmi_proxy.php';
    $pos = strpos($uri, $prefix);
    if ($pos !== false) {
        $pathInfo = substr($uri, $pos + strlen($prefix));
        $qpos = strpos($pathInfo, '?');
        if ($qpos !== false) {
            $pathInfo = substr($pathInfo, 0, $qpos);
        }
    }
}

$pathInfo = '/' . ltrim((string)$pathInfo, '/');
$parts = explode('/', ltrim($pathInfo, '/'), 2);
$token = strtolower(trim((string)($parts[0] ?? '')));
$bmcPath = '/' . ltrim((string)($parts[1] ?? ''), '/');

if (!preg_match('/^[a-f0-9]{64}$/', $token)) {
    http_response_code(400);
    echo 'Invalid session token';
    exit;
}

$session = ipmiWebLoadSession($mysqli, $token);
if (!$session) {
    http_response_code(403);
    echo 'Session expired or invalid';
    exit;
}

$ipmiTraceId = '';
if (ipmiProxyDebugEnabled()) {
    $ipmiTraceId = ipmiProxyDebugSendTraceHeaders();
}

$bmcIp = $session['ipmi_ip'];
$tokenPrefix = '/ipmi_proxy.php/' . rawurlencode($token);

if (ipmiWebNeedsAutoLogin($session)) {
    if (ipmiWebAttemptAutoLogin($session)) {
        ipmiWebSaveSessionCookies(
            $mysqli,
            $token,
            $session['cookies'],
            is_array($session['forward_headers'] ?? null) ? $session['forward_headers'] : [],
            (string)($session['bmc_scheme'] ?? 'https')
        );
    }
}

$bmcScheme = (($session['bmc_scheme'] ?? 'https') === 'http') ? 'http' : 'https';

$isWsUpgrade = (
    isset($_SERVER['HTTP_UPGRADE'])
    && stripos((string)$_SERVER['HTTP_UPGRADE'], 'websocket') !== false
    && isset($_SERVER['HTTP_CONNECTION'])
    && stripos((string)$_SERVER['HTTP_CONNECTION'], 'upgrade') !== false
);

if ($isWsUpgrade) {
    $wsProto = ($bmcScheme === 'http') ? 'ws' : 'wss';
    $wsTarget = $wsProto . '://' . $bmcIp . $bmcPath;
    if (!empty($_SERVER['QUERY_STRING'])) {
        $wsTarget .= '?' . $_SERVER['QUERY_STRING'];
    }
    if (ipmiProxyDebugEnabled()) {
        ipmiProxyDebugLog('ws_redirect', [
            'trace'  => $ipmiTraceId,
            'path'   => $bmcPath,
            'target' => $wsProto . '://' . $bmcIp . '/*',
        ]);
    }
    $relayUrl = '/ipmi_ws_relay.php?token=' . rawurlencode($token) . '&target=' . rawurlencode($wsTarget);
    header('Location: ' . $relayUrl, true, 307);
    exit;
}

$queryString = ipmiProxyDebugStripFromQuery((string) ($_SERVER['QUERY_STRING'] ?? ''));
$method = strtoupper((string) ($_SERVER['REQUEST_METHOD'] ?? 'GET'));

// BMC often has no /favicon.ico or is slow; proxying it yields 502 in DevTools.
if ($method === 'GET' && basename($bmcPath) === 'favicon.ico') {
    header('Location: /favicon.php' . ($queryString !== '' ? ('?' . $queryString) : ''), true, 302);
    exit;
}

$bmcUrl = $bmcScheme . '://' . $bmcIp . $bmcPath;
if ($queryString !== '') {
    $bmcUrl .= '?' . $queryString;
}

$postBody = ($method === 'POST') ? file_get_contents('php://input') : null;
$fwdContentType = $_SERVER['CONTENT_TYPE'] ?? $_SERVER['HTTP_CONTENT_TYPE'] ?? '';

if (ipmiProxyDebugEnabled()) {
    ipmiProxyDebugLog('request', [
        'trace'     => $ipmiTraceId,
        'token'     => ipmiProxyDebugRedactToken($token),
        'method'    => $method,
        'bmcPath'   => $bmcPath,
        'bmcHost'   => $bmcIp,
        'bmcType'   => (string) ($session['bmc_type'] ?? ''),
        'bmcScheme' => $bmcScheme,
        'hasQuery'  => $queryString !== '',
        'cookies'   => ipmiProxyDebugCookieMeta(is_array($session['cookies'] ?? null) ? $session['cookies'] : []),
    ]);
}

/**
 * Per-URL cURL total timeout for buffered ipmiProxyExecute (non-streaming GET/POST).
 * GET /json/health* and health_summary use streaming (infinite timeout there); this still
 * applies if a request falls through to execute (e.g. non-GET) or legacy paths.
 */
function ipmiProxyCurlTimeoutForBmcUrl(string $bmcUrl): int
{
    $path = strtolower((string) (parse_url($bmcUrl, PHP_URL_PATH) ?? ''));
    if (str_contains($path, '/json/health') || str_contains($path, 'health_summary')) {
        return 0;
    }
    // Static bundles can be large; slow BMC or TLS handshake should not abort before PHP has the full body.
    foreach (['/js/', '/css/', '/fonts/', '/themes/', '/img/', '/images/'] as $prefix) {
        if (str_contains($path, $prefix)) {
            return 120;
        }
    }

    return 60;
}

/**
 * Paths that must be streamed (bytes forwarded as they arrive), not buffered in PHP.
 *
 * - SSE / event-stream.
 * - iLO /json/health* and health_summary often long-poll: buffering with CURLOPT_RETURNTRANSFER
 *   holds the connection until the BMC responds → no bytes to nginx for a long time → 502 Bad Gateway
 *   at default proxy/fastcgi timeouts. Streaming sends chunks as the BMC sends them.
 */
function ipmiProxyIsBmcLongPollOrStreamPath(string $bmcPath): bool
{
    $p = strtolower($bmcPath);
    if (str_starts_with($p, '/sse/') || str_contains($p, 'event_stream') || str_contains($p, 'eventstream')) {
        return true;
    }
    if (str_contains($p, '/json/health') || str_contains($p, 'health_summary')) {
        return true;
    }
    $acc = strtolower((string) ($_SERVER['HTTP_ACCEPT'] ?? ''));

    return str_contains($acc, 'text/event-stream');
}

/**
 * Execute the proxy request. Extracted so we can retry after auth recovery.
 * Retries once without CURLOPT_RESOLVE if the first attempt fails (bad PTR / libcurl quirk).
 *
 * @param int|null $timeoutOverride Total cURL timeout in seconds; null = ipmiProxyCurlTimeoutForBmcUrl($bmcUrl).
 */
function ipmiProxyExecute(string $bmcUrl, string $method, ?string $postBody, string $fwdContentType, array $cookies, array $forwardHeaders = [], string $bmcIp = '', ?int $timeoutOverride = null): array
{
    $bmcIpEff = $bmcIp !== '' ? $bmcIp : (string) (parse_url($bmcUrl, PHP_URL_HOST) ?? '');

    $attemptResolve = function (bool $tryResolve) use ($bmcUrl, $method, $postBody, $fwdContentType, $cookies, $forwardHeaders, $bmcIpEff, $timeoutOverride): array {
        $ch = curl_init($bmcUrl);
        $appliedResolve = false;
        if ($tryResolve) {
            $appliedResolve = ipmiProxyApplyCurlBmcUrlAndResolve($ch, $bmcUrl, $bmcIpEff);
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $effTimeout = $timeoutOverride !== null ? $timeoutOverride : ipmiProxyCurlTimeoutForBmcUrl($bmcUrl);
        curl_setopt($ch, CURLOPT_TIMEOUT, $effTimeout);
        if ($effTimeout > 0) {
            curl_setopt($ch, CURLOPT_NOSIGNAL, true);
        }
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_ENCODING, '');
        curl_setopt($ch, CURLOPT_USERAGENT, ipmiWebCurlUserAgent());
        ipmiProxyApplyCurlBmcReferer($ch, $bmcUrl, $forwardHeaders, $bmcIpEff);

        if ($method === 'POST') {
            curl_setopt($ch, CURLOPT_POST, true);
            if ($postBody !== null) {
                curl_setopt($ch, CURLOPT_POSTFIELDS, $postBody);
            }
        }

        $parts = [];
        foreach ($cookies as $k => $v) {
            if ($v !== null && trim((string) $v) !== '') {
                $parts[] = $k . '=' . $v;
            }
        }
        if ($parts !== []) {
            curl_setopt($ch, CURLOPT_COOKIE, implode('; ', $parts));
        }

        $headers = [];
        if ($fwdContentType !== '') {
            $headers[] = 'Content-Type: ' . $fwdContentType;
        }
        foreach ($forwardHeaders as $hn => $hv) {
            $hn = trim((string) $hn);
            if ($hn === '' || strcasecmp($hn, 'Content-Type') === 0) {
                continue;
            }
            if ($hv === null || trim((string) $hv) === '') {
                continue;
            }
            $headers[] = $hn . ': ' . $hv;
        }
        if ($headers !== []) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }

        $rawResponse = curl_exec($ch);
        $httpCode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $contentTypeResp = (string) curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
        curl_close($ch);

        return [
            'raw'             => $rawResponse,
            'http_code'       => $httpCode,
            'content_type'    => $contentTypeResp,
            'applied_resolve' => $appliedResolve,
        ];
    };

    $out = $attemptResolve(true);
    if (($out['raw'] === false || $out['http_code'] === 0) && $out['applied_resolve']) {
        $out = $attemptResolve(false);
    }
    // Some iLO builds return 403 on API when SNI uses PTR hostname but accept the same session over https://&lt;IP&gt;/...
    if ($out['raw'] !== false && (int) $out['http_code'] === 403 && !empty($out['applied_resolve'])) {
        $out2 = $attemptResolve(false);
        if ($out2['raw'] !== false) {
            $out = $out2;
        }
    }

    return [
        'raw'          => $out['raw'],
        'http_code'    => $out['http_code'],
        'content_type' => $out['content_type'],
    ];
}

function ipmiProxyForwardHeadersHasHeader(array $forwardHeaders, string $needleName): bool
{
    $n = strtolower($needleName);
    foreach ($forwardHeaders as $k => $_v) {
        if (strtolower(trim((string) $k)) === $n) {
            return true;
        }
    }

    return false;
}

/**
 * Some BMCs reject API/SSE requests without a Referer from the BMC origin.
 */
function ipmiProxyApplyCurlBmcReferer($ch, string $bmcUrl, array $forwardHeaders, string $bmcIp): void
{
    if (ipmiProxyForwardHeadersHasHeader($forwardHeaders, 'Referer')) {
        return;
    }
    $p = parse_url($bmcUrl);
    if (!is_array($p) || empty($p['scheme'])) {
        return;
    }
    if ($bmcIp === '') {
        $bmcIp = (string) ($p['host'] ?? '');
    }
    $host = ipmiProxyBmcPreferredOriginHost($bmcIp);
    $port = isset($p['port']) ? ':' . (int) $p['port'] : '';
    curl_setopt($ch, CURLOPT_REFERER, $p['scheme'] . '://' . $host . $port . '/');
}

function ipmiProxyGetClientXAuthToken(): string
{
    $t = trim((string) ($_SERVER['HTTP_X_AUTH_TOKEN'] ?? ''));
    if ($t !== '') {
        return $t;
    }
    if (function_exists('getallheaders')) {
        foreach (getallheaders() as $name => $value) {
            if (strcasecmp((string) $name, 'X-Auth-Token') === 0) {
                return trim((string) $value);
            }
        }
    }

    return '';
}

/**
 * Browser sends Origin: https://panel-host; many BMCs reject that and return 403 on API/SSE/CSS.
 * The SPA may also hold a fresher X-Auth-Token than the DB after client-side login.
 *
 * @param array<string, string> $forwardHeaders
 * @return array<string, string>
 */
function ipmiProxyMergeClientBmcForwardHeaders(array $forwardHeaders, string $bmcScheme, string $bmcIp): array
{
    $out = $forwardHeaders;
    $xAuth = ipmiProxyGetClientXAuthToken();
    if ($xAuth !== '') {
        $out['X-Auth-Token'] = $xAuth;
    }
    $bmcScheme = ($bmcScheme === 'http') ? 'http' : 'https';
    $out['Origin'] = $bmcScheme . '://' . ipmiProxyBmcPreferredOriginHost($bmcIp);

    return $out;
}

/**
 * Sync Origin / X-Auth-Token for streamed BMC requests.
 *
 * We no longer probe /json/session_info before SSE or health streams: that extra cURL round-trip
 * sent no bytes to Apache until it finished (up to the probe timeout) → FastCGI/proxy 502 on busy
 * iLO UIs. Auth recovery is handled inside ipmiProxyStreamGetBmcResponse (401/403 → relogin → retry).
 */
function ipmiProxyRecoverBmcAuthBeforeSse(array &$session, string $bmcIp, string &$bmcScheme, array &$fwdHdr): void
{
    $bmcScheme = (($session['bmc_scheme'] ?? 'https') === 'http') ? 'http' : 'https';
    $fwdHdr = ipmiProxyMergeClientBmcForwardHeaders(
        is_array($fwdHdr) ? $fwdHdr : [],
        $bmcScheme,
        $bmcIp
    );
}

/**
 * Long-lived Server-Sent Events (and similar) must be streamed. Buffering the full response
 * in PHP (CURLOPT_RETURNTRANSFER) blocks until the BMC closes the stream → endless "loading".
 */
function ipmiProxyShouldStreamBmcRequest(string $method, string $bmcPath): bool
{
    if ($method !== 'GET') {
        return false;
    }

    return ipmiProxyIsBmcLongPollOrStreamPath($bmcPath);
}

/**
 * Stream SSE or long-poll JSON from the BMC. Aborts before sending bytes if status is 401/403
 * so the caller can relogin (non-stream requests already had this; streaming did not).
 *
 * @return array{ok: bool, auth_rejected: bool, applied_resolve: bool, curl_errno?: int, curl_error?: string}
 */
function ipmiProxyStreamGetBmcResponse(string $bmcUrl, array $cookies, array $forwardHeaders, string $bmcIp, bool $skipHostnameResolve = false): array
{
    $streamPath = strtolower((string) (parse_url($bmcUrl, PHP_URL_PATH) ?? ''));
    $defaultStreamCt = (str_contains($streamPath, '/json/health') || str_contains($streamPath, 'health_summary'))
        ? 'application/json; charset=utf-8'
        : 'text/event-stream';

    $ch = curl_init($bmcUrl);
    $appliedResolve = false;
    if (!$skipHostnameResolve) {
        $appliedResolve = ipmiProxyApplyCurlBmcUrlAndResolve($ch, $bmcUrl, $bmcIp);
    }
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_TIMEOUT, 0);
    // SSE and some BMC long-polls are unreliable over HTTP/2 with libcurl; iLO uses HTTP/1.1 in practice.
    if (defined('CURL_HTTP_VERSION_1_1')) {
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
    }
    curl_setopt($ch, CURLOPT_USERAGENT, ipmiWebCurlUserAgent());
    curl_setopt($ch, CURLOPT_HTTPGET, true);
    ipmiProxyApplyCurlBmcReferer($ch, $bmcUrl, $forwardHeaders, $bmcIp);

    $parts = [];
    foreach ($cookies as $k => $v) {
        if ($v !== null && trim((string) $v) !== '') {
            $parts[] = $k . '=' . $v;
        }
    }
    $reqH = ['Accept-Encoding: identity'];
    $acc = (string) ($_SERVER['HTTP_ACCEPT'] ?? '');
    if ($acc !== '') {
        $reqH[] = 'Accept: ' . $acc;
    }
    foreach ($forwardHeaders as $hn => $hv) {
        $hn = trim((string) $hn);
        if ($hn === '' || strcasecmp($hn, 'Content-Type') === 0) {
            continue;
        }
        if ($hv === null || trim((string) $hv) === '') {
            continue;
        }
        $reqH[] = $hn . ': ' . $hv;
    }
    if ($parts !== []) {
        $reqH[] = 'Cookie: ' . implode('; ', $parts);
    }
    curl_setopt($ch, CURLOPT_HTTPHEADER, $reqH);

    $lines = [];
    $headersSent = false;
    $authRejected = false;
    curl_setopt($ch, CURLOPT_HEADERFUNCTION, function ($curl, $headerLine) use (&$lines, &$headersSent, &$authRejected, $defaultStreamCt): int {
        if (preg_match('/^HTTP\/\S+\s+(\d{3})\b/', $headerLine, $hm)) {
            $code = (int) $hm[1];
            if ($code === 401 || $code === 403) {
                $authRejected = true;

                return 0;
            }
        }
        // HTTP/2 pseudo-header from libcurl
        if (preg_match('/^:\s*status:\s*(\d{3})\b/i', trim((string) $headerLine), $hm)) {
            $code = (int) $hm[1];
            if ($code === 401 || $code === 403) {
                $authRejected = true;

                return 0;
            }
        }
        if ($headerLine === "\r\n" || $headerLine === "\n") {
            if (!$headersSent && $lines !== []) {
                $block = implode('', $lines);
                $lines = [];
                $code = 200;
                if (preg_match('/^HTTP\/\S+\s+(\d{3})\b/m', $block, $m)) {
                    $code = (int) $m[1];
                } elseif (preg_match('/^:\s*status:\s*(\d{3})\b/im', $block, $m)) {
                    $code = (int) $m[1];
                }
                http_response_code($code);
                $ct = $defaultStreamCt;
                if (preg_match('/^Content-Type:\s*([^\r\n]+)/mi', $block, $cm)) {
                    $ct = trim($cm[1]);
                }
                header('Content-Type: ' . $ct);
                header('Cache-Control: no-cache');
                header('X-Accel-Buffering: no');
                if (function_exists('apache_setenv')) {
                    @apache_setenv('no-gzip', '1');
                }
                $headersSent = true;
            } else {
                $lines = [];
            }

            return strlen($headerLine);
        }
        $lines[] = $headerLine;

        return strlen($headerLine);
    });

    curl_setopt($ch, CURLOPT_WRITEFUNCTION, static function ($curl, $data): int {
        echo $data;
        if (ob_get_level() > 0) {
            @ob_flush();
        }
        flush();

        return strlen($data);
    });

    $ok = curl_exec($ch);
    $curlErr = ($ok === false);
    $curlErrNo = $curlErr ? curl_errno($ch) : 0;
    $curlErrStr = $curlErr ? curl_error($ch) : '';
    curl_close($ch);

    if ($authRejected) {
        return ['ok' => false, 'auth_rejected' => true, 'applied_resolve' => $appliedResolve];
    }
    if ($curlErr) {
        return [
            'ok'               => false,
            'auth_rejected'    => false,
            'applied_resolve'  => $appliedResolve,
            'curl_errno'       => $curlErrNo,
            'curl_error'       => $curlErrStr,
        ];
    }

    return ['ok' => true, 'auth_rejected' => false, 'applied_resolve' => $appliedResolve];
}

/**
 * Overlay Cookie header from the browser for keys we already store (mirrored BMC cookies).
 * Keeps client and server jars aligned after Set-Cookie mirror.
 */
function ipmiProxyMergeClientBmcCookies(array $dbCookies): array
{
    if ($dbCookies === []) {
        return $dbCookies;
    }
    $raw = (string)($_SERVER['HTTP_COOKIE'] ?? '');
    if ($raw === '') {
        return $dbCookies;
    }
    $out = $dbCookies;
    foreach (explode(';', $raw) as $chunk) {
        $chunk = trim($chunk);
        if ($chunk === '') {
            continue;
        }
        $eq = strpos($chunk, '=');
        if ($eq === false) {
            continue;
        }
        $name = trim(substr($chunk, 0, $eq));
        $value = trim(substr($chunk, $eq + 1));
        if ($name === '' || $value === '') {
            continue;
        }
        if (strcasecmp($name, 'PHPSESSID') === 0) {
            continue;
        }
        if (array_key_exists($name, $out)) {
            $out[$name] = $value;
        }
    }

    return $out;
}

if (is_array($session['cookies'])) {
    $session['cookies'] = ipmiProxyMergeClientBmcCookies($session['cookies']);
    if (ipmiWebIsIloFamilyType((string)($session['bmc_type'] ?? ''))) {
        ipmiWebSyncIloSessionAndSessionKeyCookies($session['cookies']);
    }
}

$fwdHdr = $session['forward_headers'] ?? [];
$fwdHdr = ipmiProxyMergeClientBmcForwardHeaders(is_array($fwdHdr) ? $fwdHdr : [], $bmcScheme, $bmcIp);
if ($method === 'GET' && ipmiProxyShouldStreamBmcRequest($method, $bmcPath)) {
    if (ipmiWebNeedsAutoLogin($session)) {
        http_response_code(403);
        echo 'BMC session not available. Open this server from the panel again so the panel can sign in to the BMC.';
        exit;
    }
    // Long polls / SSE must not inherit the generic 300s cap; Apache may still enforce its own limit.
    set_time_limit(0);
    ignore_user_abort(true);
    ipmiProxyRecoverBmcAuthBeforeSse($session, $bmcIp, $bmcScheme, $fwdHdr);
    $bmcUrl = $bmcScheme . '://' . $bmcIp . $bmcPath;
    if ($queryString !== '') {
        $bmcUrl .= '?' . $queryString;
    }
    if (ipmiProxyDebugEnabled()) {
        ipmiProxyDebugLog('stream_sse', [
            'trace'   => $ipmiTraceId,
            'bmcPath' => $bmcPath,
            'accept'  => substr((string) ($_SERVER['HTTP_ACCEPT'] ?? ''), 0, 120),
        ]);
        ipmiProxyDebugEmitLogHeader([
            'trace'   => $ipmiTraceId,
            'bmcPath' => $bmcPath,
            'phase'   => 'pre_stream',
        ]);
    }
    while (ob_get_level() > 0) {
        @ob_end_clean();
    }

    $streamUrl = $bmcUrl;
    $r = ipmiProxyStreamGetBmcResponse(
        $streamUrl,
        $session['cookies'],
        is_array($fwdHdr) ? $fwdHdr : [],
        $bmcIp,
        false
    );

    if ($r['auth_rejected']) {
        $session['cookies'] = [];
        $session['forward_headers'] = [];
        if (ipmiWebAttemptAutoLogin($session)) {
            ipmiWebSaveSessionCookies(
                $mysqli,
                $token,
                $session['cookies'],
                is_array($session['forward_headers'] ?? null) ? $session['forward_headers'] : [],
                (string) ($session['bmc_scheme'] ?? 'https')
            );
            $bmcScheme = (($session['bmc_scheme'] ?? 'https') === 'http') ? 'http' : 'https';
            $streamUrl = $bmcScheme . '://' . $bmcIp . $bmcPath;
            if ($queryString !== '') {
                $streamUrl .= '?' . $queryString;
            }
            $fwdHdr = ipmiProxyMergeClientBmcForwardHeaders(
                is_array($session['forward_headers'] ?? null) ? $session['forward_headers'] : [],
                $bmcScheme,
                $bmcIp
            );
            $r = ipmiProxyStreamGetBmcResponse(
                $streamUrl,
                $session['cookies'],
                is_array($fwdHdr) ? $fwdHdr : [],
                $bmcIp,
                false
            );
        }
    }

    if (!$r['ok'] && !empty($r['applied_resolve'])) {
        $r = ipmiProxyStreamGetBmcResponse(
            $streamUrl,
            $session['cookies'],
            is_array($fwdHdr) ? $fwdHdr : [],
            $bmcIp,
            true
        );
    }

    if (!$r['ok']) {
        if (ipmiProxyDebugEnabled()) {
            ipmiProxyDebugLog('stream_sse_failed', [
                'trace'           => $ipmiTraceId,
                'bmcPath'         => $bmcPath,
                'auth_rejected'   => !empty($r['auth_rejected']),
                'applied_resolve' => !empty($r['applied_resolve']),
                'curl_errno'      => $r['curl_errno'] ?? null,
                'curl_error'      => isset($r['curl_error']) ? substr((string) $r['curl_error'], 0, 240) : null,
            ]);
            ipmiProxyDebugEmitLogHeader([
                'trace'   => $ipmiTraceId,
                'bmcPath' => $bmcPath,
                'phase'   => 'stream_failed',
            ]);
        }
        if (!empty($r['auth_rejected'])) {
            http_response_code(403);
            echo 'BMC denied this request (session may have expired). Refresh the page to re-authenticate.';
        } else {
            http_response_code(502);
            echo 'BMC unreachable';
        }
    }
    exit;
}

$result = ipmiProxyExecute($bmcUrl, $method, $postBody, $fwdContentType, $session['cookies'], is_array($fwdHdr) ? $fwdHdr : [], $bmcIp);

if ($result['raw'] === false) {
    if (ipmiProxyDebugEnabled()) {
        ipmiProxyDebugLog('curl_failed', ['trace' => $ipmiTraceId, 'bmcPath' => $bmcPath, 'method' => $method]);
        ipmiProxyDebugEmitLogHeader([
            'trace'   => $ipmiTraceId,
            'bmcPath' => $bmcPath,
            'phase'   => 'curl_failed',
        ]);
    }
    http_response_code(502);
    echo 'BMC unreachable';
    exit;
}

$rawResponse = $result['raw'];
$httpCode = $result['http_code'];
$contentTypeResp = $result['content_type'];

[, $responseBody] = ipmiWebCurlExtractFinalHeadersAndBody($rawResponse);
$newCookies = ipmiWebCurlMergeSetCookiesFromChain($rawResponse, []);

if (!empty($newCookies)) {
    $session['cookies'] = array_merge($session['cookies'], $newCookies);
    ipmiWebSaveSessionCookies(
        $mysqli,
        $token,
        $session['cookies'],
        is_array($session['forward_headers'] ?? null) ? $session['forward_headers'] : [],
        (string)($session['bmc_scheme'] ?? 'https')
    );
}

if ($httpCode === 401 || $httpCode === 403) {
    $session['cookies'] = [];
    $session['forward_headers'] = [];
    $recovered = ipmiWebAttemptAutoLogin($session);
    if ($recovered) {
        ipmiWebSaveSessionCookies(
            $mysqli,
            $token,
            $session['cookies'],
            is_array($session['forward_headers'] ?? null) ? $session['forward_headers'] : [],
            (string)($session['bmc_scheme'] ?? 'https')
        );

        $bmcScheme = (($session['bmc_scheme'] ?? 'https') === 'http') ? 'http' : 'https';
        $bmcUrl = $bmcScheme . '://' . $bmcIp . $bmcPath;
        if ($queryString !== '') {
            $bmcUrl .= '?' . $queryString;
        }

        $fh = ipmiProxyMergeClientBmcForwardHeaders(
            is_array($session['forward_headers'] ?? null) ? $session['forward_headers'] : [],
            $bmcScheme,
            $bmcIp
        );
        $retry = ipmiProxyExecute(
            $bmcUrl,
            $method,
            $postBody,
            $fwdContentType,
            $session['cookies'],
            $fh,
            $bmcIp
        );
        if ($retry['raw'] !== false && $retry['http_code'] >= 200 && $retry['http_code'] < 400) {
            $rawResponse = $retry['raw'];
            $httpCode = $retry['http_code'];
            $contentTypeResp = $retry['content_type'];

            [, $responseBody] = ipmiWebCurlExtractFinalHeadersAndBody($rawResponse);
            $retryChainCookies = ipmiWebCurlMergeSetCookiesFromChain($rawResponse, []);
            if (!empty($retryChainCookies)) {
                $session['cookies'] = array_merge($session['cookies'], $retryChainCookies);
                ipmiWebSaveSessionCookies(
                    $mysqli,
                    $token,
                    $session['cookies'],
                    is_array($session['forward_headers'] ?? null) ? $session['forward_headers'] : [],
                    (string)($session['bmc_scheme'] ?? 'https')
                );
            }
        }
    }
}

// 200 + HTML login form: session cookie missing, stale, or create-time auto-login failed — try again once.
if ($method === 'GET' && $httpCode === 200
    && ipmiWebResponseLooksLikeBmcLoginPage($responseBody, $contentTypeResp)) {
    $session['cookies'] = [];
    $session['forward_headers'] = [];
    if (ipmiWebAttemptAutoLogin($session)) {
        ipmiWebSaveSessionCookies(
            $mysqli,
            $token,
            $session['cookies'],
            is_array($session['forward_headers'] ?? null) ? $session['forward_headers'] : [],
            (string)($session['bmc_scheme'] ?? 'https')
        );
        $bmcScheme = (($session['bmc_scheme'] ?? 'https') === 'http') ? 'http' : 'https';
        $bmcUrl = $bmcScheme . '://' . $bmcIp . $bmcPath;
        if ($queryString !== '') {
            $bmcUrl .= '?' . $queryString;
        }
        $fhLogin = ipmiProxyMergeClientBmcForwardHeaders(
            is_array($session['forward_headers'] ?? null) ? $session['forward_headers'] : [],
            $bmcScheme,
            $bmcIp
        );
        $retryLogin = ipmiProxyExecute(
            $bmcUrl,
            $method,
            $postBody,
            $fwdContentType,
            $session['cookies'],
            $fhLogin,
            $bmcIp
        );
        if ($retryLogin['raw'] !== false) {
            $rawResponse = $retryLogin['raw'];
            $httpCode = $retryLogin['http_code'];
            $contentTypeResp = $retryLogin['content_type'];
            [, $responseBody] = ipmiWebCurlExtractFinalHeadersAndBody($rawResponse);
            $newCookies2 = ipmiWebCurlMergeSetCookiesFromChain($rawResponse, []);
            if (!empty($newCookies2)) {
                $session['cookies'] = array_merge($session['cookies'], $newCookies2);
                ipmiWebSaveSessionCookies(
                    $mysqli,
                    $token,
                    $session['cookies'],
                    is_array($session['forward_headers'] ?? null) ? $session['forward_headers'] : [],
                    (string)($session['bmc_scheme'] ?? 'https')
                );
            }
        }
    }
}

http_response_code($httpCode ?: 502);

$ct = strtolower(trim(explode(';', $contentTypeResp)[0] ?? ''));
$isHtml = ($ct === '' || $ct === 'text/html' || strpos($ct, 'html') !== false);
$isJs = ($ct === 'application/javascript' || $ct === 'text/javascript');
$isCss = ($ct === 'text/css');
$isJson = (strpos($ct, 'json') !== false);

if ($contentTypeResp !== '') {
    header('Content-Type: ' . $contentTypeResp);
}

// iLO SPA checks document.cookie; without mirrored cookies it stays on #/login while the proxy
// is already authenticated server-side.
$scMirror = is_array($session['cookies'] ?? null) ? $session['cookies'] : [];
$shMirror = is_array($session['forward_headers'] ?? null) ? $session['forward_headers'] : [];
if ($isHtml && $httpCode >= 200 && $httpCode < 400 && ipmiWebHasUsableBmcAuth($scMirror, [])) {
    ipmiWebEmitMirroredBmcCookiesForProxy($token, $scMirror);
}

$rewriteBody = $isHtml || $isJs || $isCss || $isJson;
$bmcTypeStr = (string)($session['bmc_type'] ?? '');
$injectIloPatch = false;

if ($rewriteBody) {
    $responseBody = ipmiProxyRewriteBmcResponseBody(
        $responseBody,
        $bmcIp,
        $token,
        $tokenPrefix,
        $bmcTypeStr,
        $isHtml
    );
    if ($isCss) {
        $responseBody = ipmiProxyRewriteCssResponseBody($responseBody, $bmcPath, $tokenPrefix, $bmcIp);
    }
    if ($isHtml) {
        foreach (ipmiProxyGetBmcHostAliases($bmcIp) as $host) {
            $responseBody = ipmiWebRewriteHtml($responseBody, $tokenPrefix, $host);
        }
        $responseBody = ipmiWebRewriteHtmlRelativeToDocument($responseBody, $tokenPrefix, $bmcPath);
        // Inject path/fetch/EventSource fixes when we have BMC auth OR when the UI is clearly iLO
        // (or references /sse/). Requiring auth-only blocked the patch on login HTML / empty jars
        // → browser still requested /sse/ui at the panel origin (404).
        $authOkHtml = ipmiWebHasUsableBmcAuth($scMirror, $shMirror);
        $shouldInjectIloPatch = $httpCode >= 200 && $httpCode < 400
            && (
                $authOkHtml
                || ipmiProxyIsIloFamily($bmcTypeStr)
                || stripos($responseBody, '/sse/') !== false
            );
        if ($shouldInjectIloPatch) {
            $xAuthHdr = trim((string)($session['forward_headers']['X-Auth-Token'] ?? ''));
            $xAuthForPatch = ($authOkHtml && $xAuthHdr !== '') ? $xAuthHdr : null;
            $responseBody = ipmiProxyInjectIloHeadFixes(
                $responseBody,
                $token,
                $xAuthForPatch,
                $bmcIp
            );
        }
        $injectIloPatch = $shouldInjectIloPatch;
    }
}

if (ipmiProxyDebugEnabled()) {
    $docDir = dirname(str_replace('\\', '/', $bmcPath));
    if ($docDir === '.' || $docDir === '') {
        $docDir = '/';
    }
    ipmiProxyDebugLog('response', [
        'trace'          => $ipmiTraceId,
        'http'           => $httpCode,
        'contentType'    => substr($contentTypeResp, 0, 96),
        'bodyBytes'      => strlen($responseBody),
        'rewritten'      => $rewriteBody,
        'injectIloPatch' => $injectIloPatch,
        'htmlDocDir'     => $isHtml ? $docDir : null,
    ]);
    ipmiProxyDebugEmitLogHeader([
        'trace'   => $ipmiTraceId,
        'bmcPath' => $bmcPath,
        'phase'   => 'response',
    ]);
    if ($isHtml && $httpCode >= 200 && $httpCode < 500) {
        ipmiProxyDebugAppendConsoleScript($responseBody, $ipmiTraceId, $bmcPath);
    }
}

echo $responseBody;
