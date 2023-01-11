<?php
include "../../database/connection.php";

if (isset($_REQUEST['reviewId'])) {
    $reviewId = $_REQUEST['reviewId'];

    $deleteQuery = "delete from reviews where id = $reviewId";
    $executeDelet = mysqli_query($conn, $deleteQuery);
    if ($executeDelet) {
        header("location: /product/html/Admin/review/");
    }
}
    