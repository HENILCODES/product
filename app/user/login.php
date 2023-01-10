<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<?php
include "../../database/connection.php";


if (isset($_POST['Login'])) {

    $Email = $_REQUEST['Email'];
    $Password = $_REQUEST['Password'];

    $select = "SELECT * FROM users WHERE email = '$Email' AND password = '$Password'";
    $selectResult = mysqli_query($conn, $select);
    $fetchRow = mysqli_fetch_array($selectResult);
    if (mysqli_num_rows($selectResult) > 0) {
        $type = $fetchRow['type'];
        echo $type;
        if ($type == 'admin') {
            $_SESSION['ActiveAdminName'] = $fetchRow['name'];
            header("location: ../../Admin/home/");
        }
        if ($type == 'customer') {
            $_SESSION['ActiveUser'] = $fetchRow['id'];
            $_SESSION['ActiveUserName'] = $fetchRow['name'];
            header("location: ../../html/home/");
        }
    } else {
?>
        <div class="alert alert-danger w-50 m-auto text-center" role="alert">
            record not found. <a href="../../html/user/login/" class="alert-link">try again</a>
        </div>
<?php
    }
}
