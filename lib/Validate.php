<?php

class Validate
{
    function sanitizer(Product $product, $errors)
    {
        $title = preg_match('/^([a-z\s\-]+)$/',strtolower( $product->title), $matchStr);
        if (!$title || $product->title=='') {
            $errors['title'] = array('title' => 'Not valid title!');
        }
        if (is_string($product->price) || !is_float($product->price) || $product->price=='') {
            $errors['price'] = ['price' => 'Not valid price!'];
        }
        if (is_string($product->quantity)|| $product->quantity=='') {
            $errors['quantity'] = ['quantity' => 'Not valid quantity!'];
        }
        return $errors;
    }
}
