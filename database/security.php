<?php
if (!$_SESSION['ActiveUser']) {
    header("location: ../user/login/");
}
?>