<?php

require_once '/opt/lampp/htdocs/product/database/connection.php';

class Order extends Connection
{
    function delete($id)
    {
        $query = "delete from users_products where id = $id";
        if (mysqli_query($this->ConnectionStart(),$query)) 
        {
            return true;
        }
    }
}

$order = new Order();
if ($order->delete("144")){
    echo "delete 1";
}
