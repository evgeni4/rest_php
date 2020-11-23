<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include_once '../../config/Database.php';
include_once '../../repository/Product.php';

$database = new Database();
$db = $database->connect();

$product = new Product($db);

$data = json_decode(file_get_contents("php://input"));

$product->id = $data->id;
if($product->delete()) {
    echo json_encode(
        array('message' => 'Product delete successfully!')
    );
} else {
    echo json_encode(
        array('message' => 'Product not delete!')
    );
}