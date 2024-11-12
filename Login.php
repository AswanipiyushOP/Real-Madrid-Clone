<?php

include ('connection/connection.php');

if (isset($_REQUEST['submit'])) {

  $email = $_REQUEST['email'];
  $pass = $_REQUEST['password'];

  $qry = "select * from piyush_register where email='$email' AND password='$pass'";

  $result = mysqli_query($conn, $qry);

  if ($result) {

    $user_arr = mysqli_fetch_array($result);
    $_SESSION['user_data'] = $user_arr;

    header('location:index.php');
  } else {
    echo "<script>alert('Invalid Credentials!!!')</script>";
    echo "<script>window.location='login.php'</script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Real Madrid Clone</title>

  <!--==========================FAV ICON============================-->
  <link rel="icon" type="image/x-icon" href="assets/images/madrid-logo.svg" sizes="58*58" />

  <!--==========================BOOTSTRAP CSS============================-->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />

  <!--==========================CUSTOM CSS============================-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

  <!--====================font awesome CDN===================-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet"
    type="text/css" />
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
      <div class="row offset-4">
        <div class="col-12 col-lg-6 col-md-12 col-sm-12 border border-2 login-hover text-center">
          <form class="mt-2 mb-2" method="post">
            <div class="mb-3 mt-4">
              <input type="email" class="form-control" name="email" placeholder="Email address" required />
            </div>
            <div class="mb-3 mt-4">
              <input type="password" class="form-control" name="password" placeholder="Password" required />
            </div>
            <button type="submit" name="submit" class="btn btn-outline-info mb-3">
              <i class="fa fa-regular fa-user"></i>&nbsp;Login</button><br />

            <a href="register.php">can't log in?</a>
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