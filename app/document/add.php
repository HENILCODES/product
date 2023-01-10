<?php
include "../../database/connection.php";

if (isset($_REQUEST['sendDocument'])) {

    $DocumentNumber = $_REQUEST['DocumentNumber'];
    $DocumentType = $_REQUEST['document'];

    $selectDocument = "select * from document where users_id= $activeUserId";
    $executQuery = mysqli_query($conn, $selectDocument);
    $resultExecuQuery = mysqli_fetch_array($executQuery);

    if (empty($resultExecuQuery)) {
        $insert = "insert into document (users_id,number,name) values($activeUserId,'$DocumentNumber','$DocumentType')";
        $execut = mysqli_query($conn, $insert);
        if ($execut) {
            header("location: ../../html/user/profile/");
        }
    } else {
        echo "<h2>403 Data Already exists</h2>";
    }
}
?>
