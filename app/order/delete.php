<?php
include "../../database/connection.php";

// User delete
if (isset($_REQUEST['orderId'])) {
    $orderId = $_REQUEST['orderId'];

    $deleteQuery = "delete from users_products where id = $orderId";
    $executeDelet = mysqli_query($conn,$deleteQuery);
    if ($executeDelet) {
        header("location: /product/html/order/");
    }
}

// Admin Delete
if (isset($_REQUEST['Order_id'])) {
    $OrderId = $_REQUEST['Order_id'];

    $deleteQuery = "delete from users_products where id = $OrderId";
    $executeDelet = mysqli_query($conn, $deleteQuery);
    if ($executeDelet) {
        header("location: /product/html/Admin/order/");
    }
}