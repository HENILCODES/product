<?php
error_reporting(0);
$activeUserName = "";
session_start();
if (isset($_SESSION['ActiveUser'])) {
    $activeUserId = $_SESSION['ActiveUser'];
}
if (isset($_SESSION['ActiveUserName'])) {
    $activeUserName = $_SESSION['ActiveUserName'];
}

if (isset($_SESSION['ActiveAdminID'])) {
    $ActiveAdminID = $_SESSION['ActiveAdminID'];
}

$conn = mysqli_connect("localhost", "root", "", "store");
if (!$conn) {
    echo "Not Connect";
}

class connection{
    public $conn;
    function ConnectionStart(){
       return mysqli_connect("localhost","root","","store"); 
    }
}
?>