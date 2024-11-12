<?php
include ('connection/connection.php');

if (isset($_REQUEST['submit'])) {

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $mobile = $_REQUEST['mobile'];
    $pass = $_REQUEST['password'];

    $qry = "insert into piyush_register(name,email,mobile,password) values('$name','$email','$mobile','$pass')";
    $result = mysqli_query($conn, $qry);

    if ($result) {
        header('location:login.php');
    } else {
        echo "<script>alert('Please fill the field correctly!')</script>";
        echo "<script>window.location='register.php'</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Madrid | Real Madrid clone</title>
    <!--==========Fav ICON===========-->
    <link rel="icon" type="image/x-icon" href="./assets/images/madrid-logo.svg" sizes="48*48" />
    <!--==========Bootstrap CSS========-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />

    <!--===========Font Awesome CDN==========-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet"
        type="text/css" />

    <!--==================custom css======================-->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!--========================Header Part===============================================-->

    <div class="container text-center pt-3">
        <img src="assets/images/madrid-logo.svg" width="50px" height="70px" />
    </div>

    <!--========================Header Part end===========================================-->

    <!--========================Login Form part===========================================-->
    <div class="container-fluid mt-5">
        <div class="container">
            <div class="row offset-3">
                <div class="col-12 col-lg-8 col-md-12 col-sm-12 border border-2 login-hover text-center">
                    <form class="mt-2 mb-2" method="post">
                        <div class="mb-3 mt-4">
                            <input type="text" class="form-control" name="name" placeholder="Enter Name" required />
                        </div>
                        <div class="mb-3 mt-4">
                            <input type="email" class="form-control" name="email" placeholder="xyz12@gmail.com"
                                required />
                        </div>
                        <div class="mb-3 mt-4">
                            <input type="number" class="form-control" name="mobile" placeholder="1234567890" required />
                        </div>
                        <div class="mb-3 mt-4">
                            <input type="password" class="form-control" name="password" placeholder="******" required />
                        </div>
                        <button type="submit" name="submit" class="btn btn-outline-info mb-3">
                            <i class="fa fa-regular fa-user"></i>&nbsp;Sign in</button><br />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--========================Login Form part end=======================================-->

    <!--========================Footer Part===============================================-->
    <div class="container-fluid bg-secondary-subtle fixed-bottom">
        <div class="row mt-2 mb-2">
            <div class="col pt-2 pb-2">
                <img src="assets/images/madrid-logo.svg" width="30px" height="40px" />
                <span class="foot_text">Real Madrid © 2024. All rights reserved.</span>
            </div>
            <div class="col-3"></div>
            <div class="col pt-3 pb-2">
                <div class="row">
                    <div class="col foot_text">Legal notice</div>
                    <div class="col foot_text">Cookies policy</div>
                    <div class="col foot_text">Privacy policy</div>
                    <div class="col foot_text">realmadrid.com</div>
                </div>
            </div>
        </div>
    </div>

    <!--========================Footer Part end===========================================-->
</body>
<!--======================BOOTSTRAP JS===================================-->
<script src="../assets/js/bootstrap.bundle.min.js" rel="javascript" type="text/javascript"></script>

</html>