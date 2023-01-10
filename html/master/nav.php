<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<?php
// include "/product/database/connection.php";
include "/opt/lampp/htdocs/product/database/connection.php";
// include "../../database/connection.php";
?>
<nav class="navbar navbar-expand-lg sticky-top shadow navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand fs-3 fw-bold" href="/product/html/home/">Shopping Mart</a>
        <!-- <a class="navbar-brand fs-3 fw-bold" href="/product/html/home">Shopping Mart</a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ps-2">
                <li class="nav-item">
                    <a href="../order" class="nav-link"> <i class="bi bi-cart4 fs-5"></i></a>
                    <!-- <a href="/product/html/order" class="nav-link"> <i class="bi bi-cart4 fs-5"></i></a> -->
                </li>
            </ul>
            <ul class="navbar-nav d-flex">
                <li class="nav-item dropdown me-5 pe-5">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle fs-3"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                        if (isset($_SESSION['ActiveUser'])) {
                        ?>
                            <li class="nav-item"> <a href="../user/profile/" class="dropdown-item"> Profile</a> </li>
                            <li class="nav-item">
                                <a href="/product/app/user/logout.php?logout=true" class="dropdown-item"> Log Out <i class="bi bi-box-arrow-right text-danger"></i></a>
                            </li>
                        <?php
                        } else {
                        ?>
                            <li>
                                <a href="../user/login/" class="dropdown-item"> Log in </a>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>