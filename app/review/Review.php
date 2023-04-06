<?php
require_once '../../database/connection.php';

class Review extends connection
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
