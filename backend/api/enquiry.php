<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/db_config.php';

// Example API endpoint logic
$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'POST') {
    // Read JSON input
    $data = json_decode(file_get_contents("php://input"));
    
    // Process enquiry (stub)
    if (!empty($data->name) && !empty($data->email)) {
        http_response_code(201);
        echo json_encode(["message" => "Enquiry received successfully."]);
    } else {
        http_response_code(400);
        echo json_encode(["message" => "Unable to process enquiry. Data is incomplete."]);
    }
} else {
    http_response_code(405);
    echo json_encode(["message" => "Method not allowed."]);
}
?>
