<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
</head>

<body>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Henil code</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    </head>

    <?php
    include "../../database/connection.php";
    include "../../database/AdminSecurity.php";

    if (isset($_REQUEST['Update_product_id'])) {
        $query = "select * from products where id=$_REQUEST[Update_product_id]";
        $execute = mysqli_query($conn, $query);

        if ($row = mysqli_fetch_array($execute)) {
            $id = $row['id'];
            $name = $row['name'];
            $price = $row['price'];
            $photo = $row['photo'];
        }
    }
    ?>

    <div class="container my-3">
        <div class="my-5 text-center">
            <h1 class="text-success">Update Product</h1>
        </div>
        <div class="container">
            <div class="card rounded float-end w-25">
                <img class="card-img-top" src="../../storage/upload/<?php echo $photo; ?>" alt="<?php echo $photo; ?>">
                <div class="card-body">
                    <label for="photo" class="btn btn-primary">Change</label>
                </div>
            </div>
        </div>
        <form class="row g-3 w-50 m-auto" autocomplete="off" method="post" enctype="multipart/form-data">
            <div class="input-group w-25">
                <spna class="input-group-text justify-content-center"> Id</spna>
                <input required type="text" class="form-control" disabled value="<?php echo $id; ?>" name="id" placeholder="Product Name">
            </div>
            <div class="input-group">
                <spna class="input-group-text justify-content-center"> Name</spna>
                <input required type="text" class="form-control" value="<?php echo $name; ?>" name="Product_name" placeholder="Product Name">
            </div>
            <div class="input-group">
                <spna class="input-group-text justify-content-center">Price</spna>
                <input required type="text" value="<?php echo $price; ?>" class="form-control" name="Product_price" placeholder="Price">
            </div>
            <div class="input-group">
                <span class="input-group-text justify-content-center">Photo</span>
                <input type="file" id="photo" class="form-control form-control-lg" value="<?php echo $photo; ?>" name="Product_photo" accept="image/*">
            </div>
            <div class="mt-5 text-center">
                <button type="submit" class="btn btn-primary w-50" name="updateProduct">update</button>
            </div>
        </form>
    </div>
</body>
<?php

if (isset($_REQUEST['updateProduct'])) {
    $id = $id;
    $name = $_REQUEST['Product_name'];
    $price = $_REQUEST['Product_price'];

    if ($_FILES['Product_photo']['name'] == "") {
        $query = "UPDATE products SET name='$name',price=$price WHERE id = $id";
    } else {
        $PrductPhoto = $_FILES['Product_photo']['name'];
        move_uploaded_file($_FILES['Product_photo']['tmp_name'], "../../storage/upload/" . $PrductPhoto);
        $query = "UPDATE products SET name='$name',price=$price,photo='$PrductPhoto' WHERE id = $id";
    }
    $exec_query = mysqli_query($conn, $query);
    if ($exec_query) {
        header("location: ../../Admin/product/");
    }
}
?>

</html>