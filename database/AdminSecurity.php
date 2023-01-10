<?php

if (!$_SESSION['ActiveAdminName']) {
    header("location: ../../html/user/login");
}
?>