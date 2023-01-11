<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <a href="../../home/"> Home </a>
        <div class="w-100 p-4 d-flex justify-content-center pb-4">
            <form action="/product/app/user/signup.php" method="POST">
                <div class="form-outline mb-4">
                    <label class="form-label" for="name">User Name</label>
                    <input required type="text" name="Name" id="name" class="form-control" />
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="email">Email address</label>
                    <input required type="email" name="Email" id="email" class="form-control" />
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input required type="password" name="Password" id="password" class="form-control" />
                </div>
                <button type="submit" class="btn btn-primary btn-block w-100 mb-4" name="Register">Register</button>
                <div class="text-center">
                    <p>have an account ? <a href="../login/">Log in</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>