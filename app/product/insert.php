<?php
// include "../../../database/connection.php";
include "../../database/connection.php";

if (isset($_REQUEST['AddProducts'])) {

    $product_name = $_REQUEST['Product_name'];
    $price = $_REQUEST['Product_price'];
    $photos = $_FILES['Product_photo']['name'];

    if (move_uploaded_file($_FILES['Product_photo']['tmp_name'], "/opt/lampp/htdocs/product/storage/upload/" . $photos)) {
        $inseetProduct = "INSERT INTO products (name, price,photo) VALUES ('$product_name',$price,'$photos')";
        $executeInsertProduct = mysqli_query($conn, $inseetProduct);

        if ($executeInsertProduct) {
            header("location: /product/html/Admin/product/");
        }
    }
}
