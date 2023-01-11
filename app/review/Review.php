<?php
require_once '/opt/lampp/htdocs/product/database/Connection.php';

class Review extends Connection
{
    function delete($id)
    {
        $query = "delete from reviews where id = $id";
        if (mysqli_query($this->ConnectionStart(), $query)) {
            return true;
        }
    }
}

$order = new Review();
if ($order->delete("134")) {
    echo "delete 1";
}

    # code...
