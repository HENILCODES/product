<?php
include "/opt/lampp/htdocs/product/database/connection.php";
include "/opt/lampp/htdocs/product/database/AdminSecurity.php";
?>

<head>
    <link rel="stylesheet" href="/product/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<?php
$select = "select photo from users where id = $ActiveAdminID";
$result = mysqli_query($conn, $select);
$row = mysqli_fetch_array($result);
?>
<nav class="navbar navbar-expand-lg sticky-top shadow navbar-light bg-light">
    <div class="container-fluid">

        <a class="navbar-brand fs-3 fw-bold" href="../home/">Shopping Mart</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="navbar-nav me-auto ">
            <li class="nav-item">
                <a href="/product/html/Admin/product/" class="nav-link fs-5">Product</a>
            </li>
            <li class="nav-item">
                <a href="/product/html/Admin/admin/" class="nav-link fs-5">Admin</a>
            </li>
            <li class="nav-item">
                <a href="/product/html/Admin/customer/" class="nav-link fs-5">Customer</a>
            </li>
            <li class="nav-item">
                <a href="/product/html/Admin/document/" class="nav-link fs-5">Document</a>
            </li>
            <li class="nav-item">
                <a href="/product/html/Admin/order/" class="nav-link fs-5">Order</a>
            </li>
            <li class="nav-item">
                <a href="/product/html/Admin/review/" class="nav-link fs-5">Reviews</a>
            </li>
        </ul>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ps-2">
                <li class="nav-item dropdown me-5 pe-5">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="/product/storage/upload/<?php echo $row['photo']; ?>" width="50" class="rounded" alt="s">
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                        if (isset($_SESSION['ActiveUser'])) {
                        ?>
                            <li class="nav-item"> <a href="/product/html/Admin/profile/" class="dropdown-item"> Profile</a> </li>
                            <li class="nav-item">
                                <a href="/product/app/user/logout.php?logoutAdmin=true" class=" dropdown-item text-white bg-danger w-75">Log Out</a>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
            </ul>
            </li>
        </div>
    </div>
</nav>
<script src="/product/js/bootstrap.bundle.min.js"></script>
<script src="/product/js/jquery-3.6.0.js"></script>
<script src="/product/js/search.js"></script>