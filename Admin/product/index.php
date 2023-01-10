<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Products</title>
</head>

<body>
    <?php
    include "../../database/connection.php";
    include "../master/Nav.php";
    ?>
    <div class="modal" id="AddProduct">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Product</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="container my-3">
                        <form class="row g-3 m-auto" autocomplete="off" action="../../app/product/insert.php" method="post" enctype="multipart/form-data">
                            <div class="input-group">
                                <spna class="input-group-text justify-content-center"> Name</spna>
                                <input required type="text" class="form-control" name="Product_name" placeholder="Product Name">
                            </div>
                            <div class="input-group">
                                <spna class="input-group-text justify-content-center">Price</spna>
                                <input required type="text" class="form-control" name="Product_price" placeholder="Price">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text justify-content-center">Photo</span>
                                <input required type="file" class="form-control form-control-lg" name="Product_photo" accept="image/*">
                            </div>
                            <div class="mt-5 text-center">
                                <button class="btn btn-primary" name="AddProducts">Add</button>
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
                    <h2 class="fw-bold">Product Table</h2>
                </div>
                <div class="text-end pb-4 d-flex justify-content-between">
                    <input type="search" autocomplete="off" class="form-control w-25 me-5" id="search" placeholder="search">
                    <button class="btn btn-success shadow" data-bs-toggle="modal" data-bs-target="#AddProduct">Add</button>
                </div>
                <table class="table table-primary text-center table-responsive table-bordered">
                    <thead class="table-borderless table-dark">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </thead>
                    <tbody id="Search_table">
                        <?php
                        $selectProduct = "select * from products ORDER BY id DESC";
                        $resultSelectProduct = mysqli_query($conn, $selectProduct);
                        while ($row = mysqli_fetch_array($resultSelectProduct)) {
                        ?>
                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['price'] ?></td>
                                <td> <img src="../../storage/upload/<?php echo $row['photo'] ?>" width="80px"> </td>
                                <td>
                                    <a href="../../app/product/update.php?Update_product_id=<?php echo $row['id']; ?>" class="btn btn-success bi bi-pencil me-3"></a>
                                    <a href="../../app/product/delete.php?Product_id=<?php echo $row['id']; ?>" class="btn btn-danger bi bi-trash"></a>
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