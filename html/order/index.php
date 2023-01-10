<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart File</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<style>
    .imgSet {
        height: 150px;
        display: block;
        background-position: center !important;
        background-size: cover !important;
    }
</style>

<body>
    <?php
    include "../master/nav.php";
    include "../../database/security.php";
    ?>
    <div class="container my-3">
        <section class="h-100" style="background-color: #eee;">
            <div class="container h-100 py-5">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-10">

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
                            <div>
                                Customer id : <?php echo $activeUserId; ?>
                            </div>
                        </div>
                        <?php
                        $seletcOrder = "select users.id AS users_id,products.photo ,users_products.quantity,users_products.id,users_products.product_id,products.name AS product_name , products.price AS price from users INNER JOIN users_products ON users_products.users_id=users.id INNER JOIN products ON products.id = users_products.product_id where users.id = $activeUserId";
                        $executeSelectOrder = mysqli_query($conn, $seletcOrder);

                        while ($rows = mysqli_fetch_array($executeSelectOrder)) {
                        ?>
                            <div class="card rounded-3 mb-4">
                                <div class="card-body p-4">
                                    <div class="row d-flex justify-content-between align-items-center">
                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                            <a href="../product/index.php?q=<?php echo $rows['product_id']; ?>">
                                                <div class="card-img-top imgSet" style=" background: url('../../storage/upload/<?php echo $rows['photo']; ?>')" alt="Apple Computer"></div>
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <span class="badge bg-primary"># <?php echo $rows['product_id']; ?></span>
                                            <p class="lead fw-normal mb-2"><?php echo $rows['product_name'] ?></p>
                                        </div>
                                        <div class="col-md-3 col-lg-2 col-xl-5 d-flex" style="justify-content: space-between;">
                                            <h5 class="mb-0">₹<?php echo $rows['price']; ?></h5>
                                            <div class="ms-2">
                                                <span class="badge bg-info text-dark fs-6"> X </span>
                                            </div>
                                            <form method="post">
                                                <input type="hidden" name="pid" value="<?php echo $rows['product_id']; ?>">
                                                <input type="number" max="10" min="1" maxlength="10" class="form-control" name="quantity" value="<?php echo $rows['quantity']; ?>">
                                            </form>
                                            <div class="me-2">
                                                <span class="badge bg-info text-dark fs-6"> = </span>
                                            </div>
                                            <h5 class="mb-0 fw-bold">₹<?php echo $rows['price'] * $rows['quantity']; ?> </h5>
                                        </div>
                                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                            <a href="../../app/order/delete.php?orderId=<?php echo $rows['id'];?>" class="text-danger"><i class="bi bi-trash fs-3"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
<?php
if (isset($_REQUEST['quantity'])) {
    $productId = $_REQUEST['pid'];
    $users_id = $activeUserId;
    $quantity = $_REQUEST['quantity'];
    $insertOrder = "UPDATE users_products SET quantity=$quantity WHERE product_id =$productId";
    $executInsert = mysqli_query($conn, $insertOrder);
    if ($executInsert) {
        echo "<meta http-equiv='refresh' content='0'>";
    }
}

?>

</html>