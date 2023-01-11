<?php
include "../../database/connection.php";

if (isset($_REQUEST['Product_id'])) {
    $ProductId = $_REQUEST['Product_id'];

    $deleteReview = "delete from reviews where product_id = $ProductId";
    mysqli_query($conn, $deleteReview);

    $deleteOrder = "delete from users_products where product_id = $ProductId";
    mysqli_query($conn, $deleteOrder);

    $deleteQuery = "delete from products where id = $ProductId";
    $executeDelet = mysqli_query($conn, $deleteQuery);
    if ($executeDelet) {
        header("location: /product/html/Admin/product/");
    }
}
