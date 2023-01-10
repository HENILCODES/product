
<?php
session_start();
if(isset($_REQUEST['logout'])){
    unset($_SESSION['ActiveUser']);
    unset($_SESSION['ActiveUserName']);
    header("location: ../../html/user/login/");

}
if(isset($_REQUEST['logoutAdmin'])){
    unset($_SESSION['ActiveAdminName']);
    header('location: ../../html/user/login/');
}
?>