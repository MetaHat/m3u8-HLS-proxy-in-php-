<?php
$allowed_origins = [
    'https://yourdomain.com',
    'https://yourotherdomain.com',
    'http://localhost:3000'
];

$request_origin = $_SERVER['HTTP_ORIGIN'] ?? '';
if (in_array($request_origin, $allowed_origins)) {
    header("Access-Control-Allow-Origin: $request_origin");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Headers: Content-Type");
} else {
    header('HTTP/1.1 403 Forbidden');
    exit(json_encode(['error' => 'Origin not allowed']));
}
?>
