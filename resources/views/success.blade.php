<?php
header('Content-type: application/json');

$payload = array(
    'status' => true,
);

echo json_encode(array_merge($payload, $data), JSON_NUMERIC_CHECK);
exit;