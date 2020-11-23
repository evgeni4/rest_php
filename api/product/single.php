<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include_once '../../config/Database.php';
include_once '../../repository/Product.php';

$database = new Database();
$db = $database->connect();

$product = new Product($db);
$product->id = isset($_GET['id']) ? $_GET['id'] : die();

$product->singleProduct();
$productArray =
    [
    'id'=>$product->id,
    'title'=>$product->title,
    'description'=>$product->description,
    'price'=>$product->price,
    'quantity'=>$product->quantity
    ];
if ($product->title ==null){
    echo json_encode(array('message' => 'Product not found!'));
    return false;
}

 print_r(json_encode($productArray));