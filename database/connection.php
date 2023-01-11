<?php
$activeUserName = "";
session_start();
if (isset($_SESSION['ActiveUser'])) {
    $activeUserId = $_SESSION['ActiveUser'];
}
if (isset($_SESSION['ActiveUserName'])) {
    $activeUserName = $_SESSION['ActiveUserName'];
}
$conn = mysqli_connect("localhost", "root", "", "store");
if (!$conn) {
    echo "Not Connect";
}


class Connection{
    public $conn;
    function ConnectionStart(){
       return mysqli_connect("localhost","root","","store"); 
    }
}