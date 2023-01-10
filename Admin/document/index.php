<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Document</title>
</head>

<body>
    <?php
    include "../../database/connection.php";
    include "../master/Nav.php";
    ?>
    <div class="container">
        <section style="background-color: #eee;" class="shadow rounded ps-5 pe-5">
            <div class="container my-5 py-4">
                <div class="text-center">
                    <h2 class="fw-bold">Document Table</h2>
                </div>
                <div class="text-end pb-4 d-flex justify-content-between">
                    <input type="search" autocomplete="off" class="form-control w-25 me-5" id="search" placeholder="search">
                </div>
                <table class="table table-primary text-center table-responsive table-bordered">
                    <thead class="table-borderless table-dark">
                        <th>Document id</th>
                        <th>Type</th>
                        <th>Proff Number</th>
                        <th>Customer id</th>
                        <th>Customer name</th>
                        <th>Customer email</th>
                        <th>Action</th>
                    </thead>
                    <tbody id="Search_table">
                        <?php
                        $select_product = "SELECT `users`.`name` as customer_name,users.email,`document`.* FROM `users`RIGHT JOIN `document` ON `document`.`users_id` = `users`.`id` order by id desc;";
                        $result_select_product = mysqli_query($conn, $select_product);
                        while ($row = mysqli_fetch_array($result_select_product)) {
                        ?>
                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['number'] ?></td>
                                <td><?php echo $row['users_id'] ?></td>
                                <td><?php echo $row['customer_name'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td>
                                    <a href="../../app/document/delete.php?Document_id=<?php echo $row['id'] ?>" class="btn btn-danger bi bi-trash"></a>
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