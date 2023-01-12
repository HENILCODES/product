<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Table</title>
</head>

<body>
    <?php

    include "/opt/lampp/htdocs/product/html/Admin/master/Nav.php";
    ?>
    <div class="modal" id="AddAdmin">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Admin</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="container my-3">
                        <form class="row g-3 m-auto" autocomplete="off" action="/product/app/user/signup.php" method="post" enctype="multipart/form-data">
                            <div class="input-group">
                                <spna class="input-group-text justify-content-center"> Name</spna>
                                <input required type="text" class="form-control" name="name" placeholder="enter name">
                            </div>
                            <div class="input-group">
                                <spna class="input-group-text justify-content-center"> email</spna>
                                <input required type="email" class="form-control" name="email" placeholder="enter email">
                            </div>
                            <div class="input-group">
                                <spna class="input-group-text justify-content-center">Password</spna>
                                <input required type="text" class="form-control" name="password" placeholder="enter password">
                            </div>
                            <div class="mt-5 text-center">
                                <button class="btn btn-primary" name="AddAdmin">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <section style="background-color: #eee;" class="shadow rounded ps-5 pe-5">
            <div class="container my-5 py-4">
           
                <div class="text-center">
                    <h2 class="fw-bold">Admin</h2>
                </div>
                <div class="text-end pb-4 d-flex justify-content-between">
                    <input type="search" autocomplete="off" class="form-control w-25 me-5" id="search" placeholder="search">
                    <button class="btn btn-success shadow" data-bs-toggle="modal" data-bs-target="#AddAdmin">Add</button>
                </div>
                <div class="overflow-auto" style="height: 600px;">

                    <table class="table table-primary text-center table-responsive table-bordered">
                        <thead class="table-borderless table-dark">
                            <th>ID</th>
                            <th>Name</th>
                            <th>email</th>
                            <th>Photo</th>
                            <th>Password</th>
                            <th>Action</th>
                        </thead>
                        <tbody id="Search_table" class="overflow-auto">
                            <?php
                            $select_product = "select * from users where type='admin' ORDER BY id DESC ";
                            $result_select_product = mysqli_query($conn, $select_product);
                            while ($row = mysqli_fetch_array($result_select_product)) {
                            ?>
                                <tr>
                                    <td><?php echo $row['id'] ?></td>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><img width="50px" src="/product/storage/upload/<?php echo $row['photo']; ?>"></td>
                                    <td><?php echo $row['password'] ?></td>
                                    <td>
                                        <a href="/product/app/user/update.php?Admin_id=<?php echo $row['id']; ?>" class="btn btn-success bi bi-pencil me-3"></a>
                                        <a href="/product/app/user/delete.php?Admin_id=<?php echo $row['id']; ?>" class="btn btn-danger bi bi-trash"></a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</body>

</html>