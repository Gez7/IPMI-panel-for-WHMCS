<?php
/**
 * Safe return URL after panel sign-in (prevents open redirects).
 */

function ipmiLoginRedirectAllowedScript(string $path): bool
{
    if (!is_string($path) || $path === '') {
        return false;
    }
    $base = basename($path);

    return in_array($base, ['ipmi_session.php', 'ipmi_kvm.php'], true);
}

function ipmiSafePostLoginNext(string $next): string
{
    $next = trim($next);
    if ($next === '' || !str_starts_with($next, '/') || str_starts_with($next, '//')) {
        return 'index.php';
    }
    if (strpbrk($next, "\r\n\0\\") !== false) {
        return 'index.php';
    }
    $path = parse_url($next, PHP_URL_PATH);
    if (!ipmiLoginRedirectAllowedScript($path)) {
        return 'index.php';
    }

    return $next;
}

function ipmiRedirectUnauthenticatedToLogin(): void
{
    $uri = (string)($_SERVER['REQUEST_URI'] ?? '');
    if ($uri === '') {
        header('Location: login.php', true, 302);
        exit;
    }
    $path = parse_url($uri, PHP_URL_PATH);
    if (!ipmiLoginRedirectAllowedScript($path)) {
        header('Location: login.php', true, 302);
        exit;
    }
    header('Location: login.php?next=' . rawurlencode($uri), true, 302);
    exit;
}
