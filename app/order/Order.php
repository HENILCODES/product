<?php

require_once '/opt/lampp/htdocs/product/database/connection.php';

class Order extends connection
{
    function delete($id)
    {
        $query = "delete from users_products where id = $id";
        if (mysqli_query($this->ConnectionStart(), $query)) {
            return true;
        }
    }
}

$order = new Order();

if (isset($_REQUEST['orderId'])) {
    $orderId = $_REQUEST['orderId'];
    if ($order->delete($orderId)) {
        header("location: /product/html/order/");
    }
}
