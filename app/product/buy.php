<?php
include "../../database/connection.php";


if (isset($_REQUEST['quantity'])) {

    $productId = $_REQUEST['product_id'];
    $customerId = $activeUserId;
    $quantity = $_REQUEST['quantity'];
    $insertOrder = "insert into users_products (users_id,product_id,quantity) values ($customerId,$productId,$quantity)";
    $executInsert = mysqli_query($conn, $insertOrder);
    if ($executInsert) {
        header("location: /product/html/order/");
    }
}
