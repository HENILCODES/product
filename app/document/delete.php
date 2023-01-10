<?php
include "../../database/connection.php";
if (isset($_REQUEST['deleteDocument'])) {
    $deleteDocument = $_REQUEST['deleteDocument'];
    
    $deleteQuery = "DELETE FROM document WHERE users_id = $deleteDocument";
    $executDelete = mysqli_query($conn, $deleteQuery);
    if ($executDelete) {
        header("location: ../../html/user/profile/");
    }
}

// <?php
// include "../../../database/connection.php";

if (isset($_REQUEST['Document_id'])) {
    $DocumentId = $_REQUEST['Document_id'];

    $deleteQuery = "delete from document where id = $DocumentId";
    $executeDelet = mysqli_query($conn, $deleteQuery);
    if ($executeDelet) {
        header("location: ../../Admin/document/");
    }
}
