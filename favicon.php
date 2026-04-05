<?php
/**
 * Fallback when no physical /favicon.ico exists (avoids 404 on browser probes).
 */
header('Content-Type: image/png');
header('Cache-Control: public, max-age=86400');
echo base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mP8z8BQDwAEhQGAhKmMIQAAAABJRU5ErkJggg==');
