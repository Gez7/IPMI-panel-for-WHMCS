<?php
/**
 * BMC TLS/SNI helpers shared by ipmi_proxy.php and ipmi_web_probe.php.
 * iLO often requires certificate hostname + CURLOPT_RESOLVE instead of https://&lt;raw-ip&gt;/...
 */

/**
 * @return list<string>
 */
function ipmiBmcGetHostAliases(string $bmcIp): array
{
    static $cache = [];

    if (isset($cache[$bmcIp])) {
        return $cache[$bmcIp];
    }

    $hosts = [$bmcIp];
    if (filter_var($bmcIp, FILTER_VALIDATE_IP)) {
        $ptr = @gethostbyaddr($bmcIp);
        if (is_string($ptr) && $ptr !== '' && strcasecmp($ptr, $bmcIp) !== 0) {
            $hosts[] = $ptr;
        }
    }

    $cache[$bmcIp] = array_values(array_unique($hosts));

    return $cache[$bmcIp];
}

function ipmiBmcPreferredOriginHost(string $bmcIp): string
{
    foreach (ipmiBmcGetHostAliases($bmcIp) as $h) {
        $h = trim((string) $h);
        if ($h !== '' && !filter_var($h, FILTER_VALIDATE_IP)) {
            return $h;
        }
    }

    return $bmcIp;
}

/**
 * @param \CurlHandle|resource $ch
 */
function ipmiBmcApplyCurlUrlAndResolve($ch, string $bmcUrl, string $bmcIp): bool
{
    $p = parse_url($bmcUrl);
    if (!is_array($p) || empty($p['scheme'])) {
        return false;
    }
    $host = (string) ($p['host'] ?? '');
    if ($host === '') {
        return false;
    }
    $hostForIpCheck = $host;
    if (str_starts_with($host, '[') && str_ends_with($host, ']')) {
        $hostForIpCheck = substr($host, 1, -1);
    }
    if (!filter_var($hostForIpCheck, FILTER_VALIDATE_IP)) {
        return false;
    }
    $preferred = ipmiBmcPreferredOriginHost($bmcIp);
    if ($preferred === '' || filter_var($preferred, FILTER_VALIDATE_IP)) {
        return false;
    }
    $scheme = strtolower((string) $p['scheme']);
    $port = isset($p['port']) ? (int) $p['port'] : (($scheme === 'https') ? 443 : 80);
    $path = ($p['path'] ?? '') !== '' ? (string) $p['path'] : '/';
    $query = isset($p['query']) && $p['query'] !== '' ? '?' . $p['query'] : '';
    $fragment = isset($p['fragment']) && $p['fragment'] !== '' ? '#' . $p['fragment'] : '';
    $portInUrl = isset($p['port']) ? ':' . (int) $p['port'] : '';
    $newUrl = $scheme . '://' . $preferred . $portInUrl . $path . $query . $fragment;

    $addr = $bmcIp;
    curl_setopt($ch, CURLOPT_URL, $newUrl);
    curl_setopt($ch, CURLOPT_RESOLVE, [$preferred . ':' . $port . ':' . $addr]);

    return true;
}
