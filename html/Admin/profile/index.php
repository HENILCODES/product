<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>

<body>
    <?php
    include "/opt/lampp/htdocs/product/html/Admin/master/Nav.php";
    $selectProfile = "SELECT users.id,users.password,users.name AS user_name,users.email,users.photo, document.name,document.number
    FROM users 
        LEFT JOIN document ON document.users_id = users.id
    WHERE users.id = $ActiveAdminID";
    $executSelectProfile = mysqli_query($conn, $selectProfile);
    $rowsP = mysqli_fetch_array($executSelectProfile);
    if (!empty($rowsP)) {
    ?>
      
        <section style="background-color: #f4f5f7;">
            <div class="container py-5 h-100">
           
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-lg-9 mb-4 mb-lg-0">
                        <div class="card mb-3 shadow" style="border-radius: .5rem;">
                            <div class="row g-0">
                                <div class="col-md-4 gradient-custom text-center text-black" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                    <img src="/product/storage/upload/<?php echo $rowsP['photo']; ?>" alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                                    <h2><?php echo $rowsP['user_name']; ?></h2>
                                </div>
                                <div class="col-md-8 pb-5">
                                    <div class="card-body p-4">
                                        <h5 class="text-danger">Information</h5>
                                        <hr class="mt-0 mb-4">
                                        <div class="row pt-1">
                                            <div class="col-6 mb-3">
                                                <h6 class="fw-bold">Email</h6>
                                                <p class="text-muted"><?php echo $rowsP['email'] ?></p>
                                            </div>
                                            <div class="col-3 mb-3">
                                                <h6 class="fw-bold">Password</h6>
                                                <p class="text-muted">*******</p>
                                            </div>
                                            <div class="col">
                                                <a class="btn btn-primary" href="/product/app/user/update.php?Admin_id=<?php echo $rowsP['id']; ?>">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php
    } else {
        echo "<h1 class='text-center pt-5 text-danger fw-bold'> No Data Found </h1>";
    }
    ?>
</body>

</html>