<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="https://media.istockphoto.com/id/1249219777/photo/shopping-online-concept-parcel-or-paper-cartons-with-a-shopping-cart-logo-in-a-trolley-on-a.jpg?s=612x612&w=0&k=20&c=EWKEahyVLY8iAHyirCCDESHRGW37lqUJ7In0SssNSLE=" type="image/x-icon">
</head>
<style>
    .imgSet {
        height: 200px;
        display: block;
        background-position: center !important;
        background-size: cover !important;
    }
</style>

<body>
    <?php
    include "../master/nav.php";
    ?>
    
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div>
                <div class="row gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 flex-wrap justify-content-center">
                    <?php
                    $selectProduct = "select * from products ORDER BY id DESC";
                    $resultSelectProduct = mysqli_query($conn, $selectProduct);
                    while ($row = mysqli_fetch_array($resultSelectProduct)) {
                    ?>
                        <div class="col mb-5" style="width: 430px;">
                            <a href="../product/index.php?q=<?php echo $row['id'] ?>" class="text-decoration-none">
                                <div class="card text-black shadow-lg rounded-5">
                                    <img class="card-img-top" style="height: 300px;" src="../../storage/upload/<?php echo $row['photo'] ?>" alt="">
                                    <div class="card-body d-flex justify-content-between" style="height: 100px;">
                                        <div>
                                            <div class="card-title">
                                                <span class="fs-5 fw-bold" style="font-family: monospace;"><?php echo $row['name'] ?></span>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <p class="fw-bolder fs-4 text-danger"><?php echo $row['price'] ?>/-</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <footer class="page-footer font-small blue">
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="#"> Shopping Mart</a>
        </div>
    </footer>
</body>

</html>