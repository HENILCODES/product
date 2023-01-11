<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="icon" href="https://media.istockphoto.com/id/1249219777/photo/shopping-online-concept-parcel-or-paper-cartons-with-a-shopping-cart-logo-in-a-trolley-on-a.jpg?s=612x612&w=0&k=20&c=EWKEahyVLY8iAHyirCCDESHRGW37lqUJ7In0SssNSLE=" type="image/x-icon">
</head>

<body>
    <?php

    include "/opt/lampp/htdocs/product/html/Admin/master/Nav.php";

    $select_product = "SELECT COUNT(id) As Total FROM products";
    $execute_product = mysqli_query($conn, $select_product);
    $total_product = mysqli_fetch_array($execute_product);

    $select_customer = "SELECT COUNT(id) As Total FROM users";
    $execute_customer = mysqli_query($conn, $select_customer);
    $total_customer = mysqli_fetch_array($execute_customer);

    $select_document = "SELECT COUNT(id) As Total FROM document";
    $execute_document = mysqli_query($conn, $select_document);
    $total_document = mysqli_fetch_array($execute_document);

    $select_admin = "SELECT COUNT(id) As Total FROM users where type='admin'";
    $execute_admin = mysqli_query($conn, $select_admin);
    $total_admin = mysqli_fetch_array($execute_admin);

    $select_review = "SELECT COUNT(id) As Total FROM reviews";
    $execute_review = mysqli_query($conn, $select_review);
    $total_review = mysqli_fetch_array($execute_review);

    $select_orders = "SELECT COUNT(id) As Total FROM users_products";
    $execute_orders = mysqli_query($conn, $select_orders);
    $total_orders = mysqli_fetch_array($execute_orders);

    ?>
    <div class="container">
        <section style="background-color: #eee;" class="shadow ps-5 pe-5">
            <div class="container my-5 py-5">
                <div class="pb-5">
                    <h4> <span class="badge bg-success">Admin : </span> <b><?php echo $_SESSION['ActiveAdminName']; ?></b></h4>
                </div>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 flex-wrap justify-content-evenly">
                    <div class="col mb-5">
                        <a href="../product/" class="text-decoration-none">
                            <div class="col bg-primary shadow-lg rounded-4" style="width: 250px;">
                                <div class="pt-5 pe-5 ps-5">
                                    <p class="d-flex align-items-center text-white justify-content-center fs-1 fw-bolder"><?php echo $total_product['Total']; ?> </p>
                                </div>
                                <div class="text-center pb-5 pt-auto">
                                    <p class="btn btn-info fw-bold">Products</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col mb-5">
                        <a href="../customer/" class="text-decoration-none">
                            <div class="col bg-primary shadow rounded-4" style="width: 250px;">
                                <div class="pt-5 pe-5 ps-5">
                                    <p class="d-flex align-items-center text-white justify-content-center fs-1 fw-bolder"><?php echo $total_customer['Total']; ?> </p>
                                </div>
                                <div class="text-center pb-5 pt-auto">
                                    <p class="btn btn-info fw-bold">Customer</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col mb-5">

                        <a href="../order/" class="text-decoration-none">
                            <div class="col bg-primary shadow-lg rounded-4" style="width: 250px;">
                                <div class="pt-5 pe-5 ps-5">
                                    <p class="d-flex align-items-center text-white justify-content-center fs-1 fw-bolder"><?php echo $total_orders['Total']; ?> </p>
                                </div>
                                <div class="text-center pb-5 pt-auto">
                                    <p class="btn btn-info fw-bold">Orders</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col mb-5">
                        <a href="../document/" class="text-decoration-none">
                            <div class="col bg-primary shadow-lg rounded-4" style="width: 250px;">
                                <div class="pt-5 pe-5 ps-5">
                                    <p class="d-flex align-items-center text-white justify-content-center fs-1 fw-bolder"><?php echo $total_document['Total']; ?> </p>
                                </div>
                                <div class="text-center pb-5 pt-auto">
                                    <p class="btn btn-info fw-bold">Document</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col mb-5">
                        <a href="../admin/" class="text-decoration-none">
                            <div class="col bg-primary shadow-lg rounded-4" style="width: 250px;">
                                <div class="pt-5 pe-5 ps-5">
                                    <p class="d-flex align-items-center text-white justify-content-center fs-1 fw-bolder"><?php echo $total_admin['Total']; ?> </p>
                                </div>
                                <div class="text-center pb-5 pt-auto">
                                    <p class="btn btn-info fw-bold">Admin</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col mb-5">
                        <a href="../review/" class="text-decoration-none">
                            <div class="col bg-primary shadow-lg rounded-4" style="width: 250px;">
                                <div class="pt-5 pe-5 ps-5">
                                    <p class="d-flex align-items-center text-white justify-content-center fs-1 fw-bolder"><?php echo $total_review['Total']; ?> </p>
                                </div>
                                <div class="text-center pb-5 pt-auto">
                                    <p class="btn btn-info fw-bold">Review</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>