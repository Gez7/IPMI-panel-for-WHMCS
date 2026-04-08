<?php
/**
 * Automated BMC web UI reachability probe (same login stack as ipmi_proxy.php).
 * Intended for cron/CLI; disabled on web-triggered check_status unless IPMI_WEB_PROBE_ALLOW_WEB=1.
 */

require_once __DIR__ . '/encryption.php';
require_once __DIR__ . '/ipmi_web_session.php';
require_once __DIR__ . '/ipmi_bmc_curl.php';

function ipmiWebProbeShouldRun(): bool
{
    if (getenv('IPMI_WEB_PROBE') === '0') {
        return false;
    }
    if (defined('IPMI_WEB_PROBE_AUTO') && IPMI_WEB_PROBE_AUTO === false) {
        return false;
    }
    if (php_sapi_name() !== 'cli' && getenv('IPMI_WEB_PROBE_ALLOW_WEB') !== '1') {
        return false;
    }

    return true;
}

function ipmiWebProbeSessionJsonValid(string $body): bool
{
    $body = trim($body);
    if ($body === '' || $body[0] !== '{') {
        return false;
    }

    return is_array(json_decode($body, true));
}

/**
 * GET /json/session_info (iLO). Matches ipmi_proxy TLS/SNI: hostname + CURLOPT_RESOLVE when PTR exists,
 * Origin/Referer use preferred hostname, retry without resolve on 401/403 / curl failure like the proxy.
 *
 * @return array{raw_ok: bool, http: int, body: string, applied_resolve: bool}
 */
function ipmiWebProbeFetchSessionInfo(array $session, bool $tryResolve): array
{
    $ip = trim((string) ($session['ipmi_ip'] ?? ''));
    $scheme = (($session['bmc_scheme'] ?? 'https') === 'http') ? 'http' : 'https';
    $url = $scheme . '://' . $ip . '/json/session_info';
    $originBase = $scheme . '://' . ipmiBmcPreferredOriginHost($ip);

    $ch = curl_init($url);
    $appliedResolve = false;
    if ($tryResolve) {
        $appliedResolve = ipmiBmcApplyCurlUrlAndResolve($ch, $url, $ip);
    }
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 12);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 6);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, ipmiWebCurlUserAgent());
    $hdr = [
        'Accept: application/json, text/javascript, */*',
        'X-Requested-With: XMLHttpRequest',
        'Origin: ' . $originBase,
        'Referer: ' . $originBase . '/',
    ];
    $tok = trim((string) (($session['forward_headers']['X-Auth-Token'] ?? '')));
    if ($tok !== '') {
        $hdr[] = 'X-Auth-Token: ' . $tok;
    }
    curl_setopt($ch, CURLOPT_HTTPHEADER, $hdr);
    $parts = [];
    foreach ($session['cookies'] ?? [] as $k => $v) {
        if ($v !== null && trim((string) $v) !== '') {
            $parts[] = $k . '=' . $v;
        }
    }
    $cookie = implode('; ', $parts);
    if ($cookie !== '') {
        curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    }
    $raw = curl_exec($ch);
    $code = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if ($raw === false) {
        return ['raw_ok' => false, 'http' => $code, 'body' => '', 'applied_resolve' => $appliedResolve];
    }
    [, $body] = ipmiWebCurlExtractFinalHeadersAndBody($raw);

    return ['raw_ok' => true, 'http' => $code, 'body' => (string) $body, 'applied_resolve' => $appliedResolve];
}

/**
 * GET /json/session_info with the session jar (iLO family only).
 */
function ipmiWebProbeIloSessionInfoOk(array $session): bool
{
    if (!ipmiWebIsIloFamilyType((string) ($session['bmc_type'] ?? ''))) {
        return true;
    }
    $ip = trim((string) ($session['ipmi_ip'] ?? ''));
    if ($ip === '') {
        return false;
    }

    $first = ipmiWebProbeFetchSessionInfo($session, true);
    if ($first['raw_ok'] && $first['http'] >= 200 && $first['http'] < 400 && ipmiWebProbeSessionJsonValid($first['body'])) {
        return true;
    }

    $shouldRetryPlain = $first['applied_resolve']
        && (
            !$first['raw_ok']
            || $first['http'] === 0
            || $first['http'] === 401
            || $first['http'] === 403
            || ($first['raw_ok'] && $first['http'] >= 200 && $first['http'] < 400 && !ipmiWebProbeSessionJsonValid($first['body']))
        );
    if (!$shouldRetryPlain) {
        return false;
    }

    $second = ipmiWebProbeFetchSessionInfo($session, false);
    if (!$second['raw_ok'] || $second['http'] < 200 || $second['http'] >= 400) {
        return false;
    }

    return ipmiWebProbeSessionJsonValid($second['body']);
}

/**
 * @return array{ok: bool, skipped?: bool, reason?: string, error?: string, scheme?: string}
 */
function ipmiWebProbeServerWebUi(mysqli $mysqli, int $serverId): array
{
    $stmt = $mysqli->prepare("
        SELECT s.id, s.ipmi_ip, s.ipmi_user, s.ipmi_pass, s.bmc_type, COALESCE(ss.suspended, 0) AS suspended
        FROM servers s
        LEFT JOIN server_suspension ss ON ss.server_id = s.id
        WHERE s.id = ?
        LIMIT 1
    ");
    if (!$stmt) {
        return ['ok' => false, 'error' => 'db_prepare_failed'];
    }
    $stmt->bind_param('i', $serverId);
    $stmt->execute();
    $res = $stmt->get_result();
    $row = $res ? $res->fetch_assoc() : null;
    $stmt->close();

    if (!$row) {
        return ['ok' => false, 'error' => 'server_not_found'];
    }
    if ((int) ($row['suspended'] ?? 0) === 1) {
        return ['ok' => true, 'skipped' => true, 'reason' => 'suspended'];
    }

    $ip = trim((string) ($row['ipmi_ip'] ?? ''));
    if ($ip === '') {
        return ['ok' => false, 'error' => 'no_ipmi_ip'];
    }

    try {
        $ipmiUser = Encryption::decrypt($row['ipmi_user']);
        $ipmiPass = Encryption::decrypt($row['ipmi_pass']);
    } catch (Exception $e) {
        $ipmiUser = $row['ipmi_user'];
        $ipmiPass = $row['ipmi_pass'];
    }

    if (trim((string) $ipmiUser) === '' || trim((string) $ipmiPass) === '') {
        return ['ok' => false, 'error' => 'no_credentials'];
    }

    $session = [
        'ipmi_ip'          => $ip,
        'ipmi_user'        => $ipmiUser,
        'ipmi_pass'        => $ipmiPass,
        'bmc_type'         => strtolower(trim((string) ($row['bmc_type'] ?? 'generic'))),
        'cookies'          => [],
        'forward_headers'  => [],
        'bmc_scheme'       => 'https',
    ];

    if (!ipmiWebAttemptAutoLogin($session, $mysqli)) {
        return ['ok' => false, 'error' => 'auto_login_failed'];
    }

    if (!ipmiWebProbeIloSessionInfoOk($session)) {
        return ['ok' => false, 'error' => 'session_info_failed', 'scheme' => (string) ($session['bmc_scheme'] ?? 'https')];
    }

    return ['ok' => true, 'scheme' => (string) ($session['bmc_scheme'] ?? 'https')];
}

/**
 * Log one-line result for log aggregation / monitoring.
 */
function ipmiWebProbeLogResult(int $serverId, array $result): void
{
    if (!empty($result['skipped'])) {
        error_log('[ipmi_web_probe] server_id=' . $serverId . ' skipped=' . ($result['reason'] ?? 'unknown'));

        return;
    }
    if (!empty($result['ok'])) {
        error_log('[ipmi_web_probe] server_id=' . $serverId . ' ok=1 scheme=' . ($result['scheme'] ?? ''));

        return;
    }
    error_log('[ipmi_web_probe] server_id=' . $serverId . ' ok=0 err=' . ($result['error'] ?? 'unknown'));
}
