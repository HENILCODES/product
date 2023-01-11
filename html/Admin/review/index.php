<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Review</title>
</head>

<body>
    <?php
    
    include "/opt/lampp/htdocs/product/html/Admin/master/Nav.php";
    ?>
    <div class="container">
        <section style="background-color: #eee;" class="shadow rounded ps-5 pe-5">
            <div class="container my-5 py-4">
                <div class="text-center">
                    <h2 class="fw-bold">Review Table</h2>
                </div>
                <div class="text-end pb-4 d-flex justify-content-between">
                    <input type="search" autocomplete="off" class="form-control w-25 me-5" id="search" placeholder="search">
                </div>
                <table class="table table-primary text-center table-responsive table-bordered">
                    <thead class="table-borderless table-dark">
                        <th>Review id</th>
                        <th>Reviews</th>
                        <th>customer id</th>
                        <th>customer name</th>
                        <th>product id</th>
                        <th>Product Name</th>
                        <th>Product Photo</th>
                        <th>Action</th>
                    </thead>
                    <tbody id="Search_table">
                        <?php
                        $selectProduct = "SELECT reviews.id AS review_id ,reviews.name AS reviews,reviews.users_id,users.name AS customer_name,reviews.product_id,products.name AS product_name,products.photo FROM reviews INNER JOIN products on reviews.product_id=products.id INNER JOIN users ON reviews.users_id = users.id ORDER BY reviews.id DESC";
                        $resultSelectProduct = mysqli_query($conn, $selectProduct);
                        while ($row = mysqli_fetch_array($resultSelectProduct)) {
                        ?>
                            <tr>
                                <td><?php echo $row['review_id'] ?></td>
                                <td><?php echo $row['reviews'] ?></td>
                                <td><?php echo $row['users_id'] ?></td>
                                <td><?php echo $row['customer_name'] ?></td>
                                <td><?php echo $row['product_id'] ?></td>
                                <td><?php echo $row['product_name'] ?></td>
                                <td> <img src="/product/storage/upload/<?php echo $row['photo'] ?>" width="80px"> </td>
                                <td>
                                    <a href="/product/app/review/delete.php?reviewId=<?php echo $row['review_id'] ?>" class="btn btn-danger bi bi-trash"></a>
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