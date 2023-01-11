<head>
    <link rel="stylesheet" href="/product/css/bootstrap.min.css">
</head>
<?php

include "../../database/connection.php";

if (isset($_POST['Register'])) {
    $Name = $_REQUEST['Name'];
    $Password = $_REQUEST['Password'];
    $Email = $_REQUEST['Email'];

    $select = "SELECT * FROM users WHERE email = '$Email'";
    $select_Result = mysqli_query($conn, $select);

    if (mysqli_num_rows($select_Result) > 0) {
?>
        <div class="alert alert-danger w-50 m-auto text-center" role="alert">
            Email Address already exists. <a href="../../html/user/signup/" class="alert-link">try again</a>
        </div>
<?php
    } else {
        $insertQuery = "insert into users (name, password, email) values ('$Name','$Password','$Email')";
        $insertResult = mysqli_query($conn, $insertQuery);
        if ($insertResult) {
            header("location: ../../html/user/login");
        }
    }
}


if (isset($_REQUEST['AddAdmin'])) {

    $name = $_REQUEST['name'];
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];

    $inseet = "INSERT INTO users (name, password,email,type) VALUES ('$name','$password','$email','admin')";
    $execute = mysqli_query($conn, $inseet);

    if ($execute) {
        header("location: ../../Admin/admin/");
    }
}
?>