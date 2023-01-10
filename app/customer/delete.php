<?php
include "../../database/connection.php";

if (isset($_REQUEST['users_id'])) {
        $customerId = $_REQUEST['users_id'];
    
        $deleteReview = "delete from reviews where users_id = $customerId";
        mysqli_query($conn, $deleteReview);
    
        $deleteOrder = "delete from users_products where users_id = $customerId";
        mysqli_query($conn, $deleteOrder);

        $deleteDocument = "delete from document where users_id = $customerId";
        mysqli_query($conn, $deleteDocument);
    
        $deleteQuery = "delete from users where id = $customerId";
        $executeDelet = mysqli_query($conn, $deleteQuery);
        if ($executeDelet) {
            header("location: ../../Admin/customer/");
        }
    }
