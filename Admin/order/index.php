<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Orders</title>
</head>

<body>
    <?php
    // session_start();
    include "../../database/connection.php";
    include "../master/Nav.php";
    ?>
    <div class="container">
        <section style="background-color: #eee;" class="shadow rounded ps-5 pe-5">
            <div class="container my-5 py-4">
                <div class="text-center">
                    <h2 class="fw-bold">Orders Table</h2>
                </div>
                <div class="text-end pb-4 d-flex justify-content-between">
                    <input type="search" autocomplete="off" class="form-control w-25 me-5" id="search" placeholder="search">
                </div>
                <table class="table table-primary text-center table-responsive table-bordered">
                    <thead class="table-borderless table-dark">
                        <th>order id</th>
                        <th>customer id</th>
                        <th>product id</th>
                        <th>customer name</th>
                        <th>quantity</th>
                        <th>product name</th>
                        <th>Price</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </thead>
                    <tbody  id="Search_table">
                        <?php
                        $selectProduct = "SELECT users_products.id AS order_id,users.id AS users_id ,products.id AS product_id,users.name AS customer_name,users_products.quantity,products.name AS product_name,products.price AS product_price,products.photo FROM users_products INNER JOIN users ON users_products.users_id = users.id INNER JOIN products ON users_products.product_id = products.id ORDER BY users_products.id DESC";
                        $resultSelectProduct = mysqli_query($conn, $selectProduct);
                        while ($row = mysqli_fetch_array($resultSelectProduct)) {
                        ?>
                            <tr>
                                <td><?php echo $row['order_id'] ?></td>
                                <td><?php echo $row['users_id'] ?></td>
                                <td><?php echo $row['product_id'] ?></td>
                                <td><?php echo $row['customer_name'] ?></td>
                                <td><?php echo $row['quantity'] ?></td>
                                <td><?php echo $row['product_name'] ?></td>
                                <td><?php echo $row['product_price'] ?></td>
                                <td> <img src="../../storage/upload/<?php echo $row['photo'] ?>" width="80px"> </td>
                                <td>
                                    <a href="../../app/order/delete.php?Order_id=<?php echo $row['order_id'] ?>" class="btn btn-danger bi bi-trash"></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</body>

</html>