<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | users</title>
</head>

<body>
    <?php
    // session_start();
    include "../../database/connection.php";
    include "../master/Nav.php";
    ?>
    <div class="container">
        <section style="background-color: #eee;" class="shadow ps-5 pe-5">
            <div class="container my-5 py-4">
                <div class="text-center pb-4">
                    <h2 class="fw-bold">Customer Table</h2>
                </div>
                <div class="text-end pb-4 d-flex justify-content-start">
                    <input type="search" autocomplete="off" id="search" class="form-control w-25 me-5" placeholder="search">
                </div>
                <table class="table table-primary text-center table-responsive table-bordered">
                    <thead class="table-borderless table-dark">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Password</th>
                        <th>Action</th>
                    </thead>
                    <tbody id="Search_table">
                        <?php
                        $select_product = "select * from users where type='customer' ORDER BY id DESC";
                        $result_select_product = mysqli_query($conn, $select_product);
                        while ($row = mysqli_fetch_array($result_select_product)) {
                        ?>
                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['password'] ?></td>
                                <td><a href="../../app/customer/delete.php?users_id=<?php echo $row['id'] ?>" class="btn btn-danger bi bi-trash"></a></td>
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