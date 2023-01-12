<?php
// include "../../database/connection.php";
include "/opt/lampp/htdocs/product/html/Admin/master/Nav.php";

// user profile
if (isset($_REQUEST['Update'])) {
    $Name = $_REQUEST['Name'];
    $UserId = $_REQUEST['UserId'];
    $Password = $_REQUEST['Password'];
    $photo = $_FILES['photo']['name'];

    if ($photo == "") {
        $insertQuery = "UPDATE users SET name='$Name',password='$Password' WHERE id = $UserId";
    } else {
        move_uploaded_file($_FILES['photo']['tmp_name'], "/opt/lampp/htdocs/product/storage/upload/" . $photo);
        $insertQuery = "UPDATE users SET name='$Name',password='$Password',photo='$photo' WHERE id = $UserId";
    }
    $insertResult = mysqli_query($conn, $insertQuery);
    if ($insertResult) {
        header("location: /product/html/user/profile/");
    }
}
?>
<!-- admin update -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update...</title>
    <link rel="stylesheet" href="/product/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<?php

if (isset($_REQUEST['Admin_id'])) {
    $query = "select * from users where id=$_REQUEST[Admin_id]";
    $execute = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_array($execute)) {
        $id = $row['id'];
        $name = $row['name'];
        $password = $row['password'];
    }
}
?>

<div class="container my-3">
    <div class="my-5 text-center">
        <h1 class="text-success">Update Admin</h1>
    </div>
    <form class="row g-3 w-50 m-auto" autocomplete="off" method="post" enctype="multipart/form-data">
        <div class="input-group w-25">
            <spna class="input-group-text justify-content-center"> Id</spna>
            <input required type="text" class="form-control" disabled value="<?php echo $id; ?>" name="id" placeholder="Product Name">
        </div>
        <div class="input-group">
            <spna class="input-group-text justify-content-center"> Name</spna>
            <input required type="text" class="form-control" value="<?php echo $name; ?>" name="AdminName" placeholder="Product Name">
        </div>
        <div class="form-outline mb-4">
            <label class="form-label">Photo</label>
            <input type="file" accept="image/*" name="photo" class="form-control" />
        </div>
        <div class="input-group">
            <spna class="input-group-text justify-content-center">Password</spna>
            <input required type="password" class="form-control" value="<?php echo $row['password']; ?>" name="AdminPassword" placeholder="Password">
        </div>
        <div class="mt-5 text-center">
            <button type="submit" class="btn btn-primary w-50" name="updateAdmin">update</button>
        </div>
    </form>
</div>
</body>
<?php

if (isset($_REQUEST['updateAdmin'])) {
    $id = $id;
    $name = $_REQUEST['AdminName'];
    $password = $_REQUEST['AdminPassword'];

    $photo = $_FILES['photo']['name'];

    if ($photo == "") {
        $query = "UPDATE users SET name='$name',password='$password' WHERE id = $id";
    } else {
        move_uploaded_file($_FILES['photo']['tmp_name'], "/opt/lampp/htdocs/product/storage/upload/" . $photo);
        $query = "UPDATE users SET name='$name',password='$password',photo='$photo' WHERE id = $id";
    }    
    $execQuery = mysqli_query($conn, $query);
    if ($execQuery) {
        header("location: /product/html/Admin/admin/");
    }
}
?>

</html>