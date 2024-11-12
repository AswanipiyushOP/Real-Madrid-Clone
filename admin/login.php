<?php
include "../connection/connection.php";

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $qry = "select * from piyush_admin where email='$email' and password='$password'";
    $result = mysqli_query($conn, $qry);

    // echo "<pre>";
    // print_r($result);
    // exit;

    if ($result) {

        $user_arr = mysqli_fetch_array($result);
        $_SESSION['user_data'] = $user_arr;

        header('location:index.php');
    } else {
        echo "error";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <!--==========================FAV ICON============================-->
    <link rel="icon" type="image/x-icon" href="../assets/images/madrid-logo.svg" sizes="58*58" />

    <!--==========================BOOTSTRAP CSS============================-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css" />

    <!--==========================CUSTOM CSS============================-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />

    <!--====================font awesome CDN===================-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet"
        type="text/css" />
</head>

<body>
    <!--========================Logo Part========================================-->
    <div class="container-fluid">
        <div class="row bg-info">
            <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                <h3 class="text-center">
                    <img src="../assets/images/madrid-logo.svg" class="img-top" width="100px" height="100px" />
                </h3>
            </div>
        </div>
    </div>

    <!--========================Logo Part end========================================-->

    <!--========================Form heading Part========================================-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                <h1 class="text-center pt-3 pb-2">Login Form</h1>
            </div>
        </div>
    </div>
    <!--========================Form heading Part end========================================-->

    <!--========================Login Form part===========================================-->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 col-md-12 col-sm-12 border border-2 login-hover border-black">
                    <form class="mt-2 mb-2" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary text-center">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--========================Login Form part end=======================================-->

    <!--==================================FOOTER PART=============================-->
    <div class="container-fluid mt-5 border border-5 border-dark">
        <div class="row" style="background:#6610f2;">
            <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                <div class="container">
                    <h2 class="text-center text-info fs-5 fw-bolder pt-2 pb-2">ADMIN PANEL</h2>
                </div>
            </div>
        </div>
    </div>
    <!--==================================FOOTER END===============================-->
</body>
<!--======================BOOTSTRAP JS===================================-->
<script src="../assets/js/bootstrap.bundle.min.js" rel="javascript" type="text/javascript"></script>

</html>