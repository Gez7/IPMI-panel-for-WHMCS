<?php
/**
 * Browser → server KVM bug log ingestion (JSON POST or sendBeacon).
 */
declare(strict_types=1);

header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    header('Allow: POST');
    echo 'Method not allowed';

    exit;
}

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/lib/ipmi_kvm_buglog.php';

$raw = file_get_contents('php://input');
if ($raw === false || trim($raw) === '') {
    http_response_code(400);
    header('Content-Type: application/json');
    echo json_encode(['ok' => false, 'error' => 'empty_body']);

    exit;
}

$data = json_decode($raw, true);
if (!is_array($data)) {
    http_response_code(400);
    header('Content-Type: application/json');
    echo json_encode(['ok' => false, 'error' => 'invalid_json']);

    exit;
}

$result = ipmiKvmBugLogIngestBrowserEvent($mysqli, $data);
header('Content-Type: application/json');
if (!$result['ok']) {
    http_response_code(400);
}
echo json_encode($result);
