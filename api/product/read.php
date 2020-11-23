<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include_once '../../config/Database.php';
include_once '../../repository/Product.php';

$database = new Database();
$db = $database->connect();

$product = new Product($db);

$result = $product->read();
$num = $result->rowCount();
if ($num > 0) {
    $products_arr['data'] = array();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $product_item = array(
            'id'=>$id,
            'title'=>$title,
            'description'=>html_entity_decode($description),
            'price'=>$price,
            'quantity'=>$quantity,
        );
        array_push($products_arr['data'],$product_item);
    }
   echo json_encode($products_arr);
} else {
    echo json_encode(
        array('message' => 'No product!')
    );
}