<?php

if (!$_SESSION['ActiveAdminName']) {
    header("location: /product/html/user/login/");
}
?>