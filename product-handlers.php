<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\CProducts;

$actions =
    [
        'hide_product' => function(){ CProducts::hide($_POST['product_id']); },
        'change_product_quantity' => function(){ CProducts::changeProductQuantity($_POST['product_id'], $_POST['product_quantity']); }
    ];

try
{
    $actions[$_POST['action']]();
}

catch (Exception $e)
{
    http_response_code(500);
    echo $e->getMessage();
}