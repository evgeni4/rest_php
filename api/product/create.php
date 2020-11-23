<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once '../../config/Database.php';
include_once '../../repository/Product.php';
include_once '../../lib/Validate.php';


$database = new Database();
$db = $database->connect();
$product = new Product($db);
$validate = new Validate();

$data = json_decode(file_get_contents("php://input"));

$arr=[];
$product->title = $data->title;
$product->description = $data->description;
$product->price =  $data->price ;
$product->quantity = $data->quantity ;
if (!empty($validate->sanitizer($product,$arr))){
    echo json_encode($validate->sanitizer($product,$arr));
    return false;
}

if ($product->create()) {
    echo json_encode(array('message' => 'Product created successfully!'));
} else {
    echo json_encode(array('message' => 'Product no created'));
}
