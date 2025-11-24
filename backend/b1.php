<?php
// Tên tệp: backend/b1.php

// Thiết lập cho phép FE truy cập (CORS) và định dạng JSON
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$response = array(
    "status" => "OK",
    "message" => "Hello từ PHP Backend (b1.php)!"
);

http_response_code(200);
echo json_encode($response);
?>