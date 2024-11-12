<?php

include ('connection/connection.php');

$id = $_GET['player_id'];

$sel = "select * from piyush_modalf where id= '$id' and status=1";
$res = mysqli_query($conn,$sel);
$fetch_record = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Real Madrid CF | Real Madrid CF Clone</title>
  <link rel="icon" type="image/x-icon" href="./assets/images/madrid-logo.svg" sizes="48*48">

  <!-- bootstrap css-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- font awesome CDN-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet"
    type="text/css" />

  <!--=============== REMIXICONS ===============-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="" />

  <!--=============== SWIPER CSS ===============-->
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />

  <!--=============== CSS ===============-->
  <link rel="stylesheet" href="assets/css/styles.css" />


  <!-- custom css-->
  <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

</head>
<body>
        <!--=====================================header part=====================================-->
        <?php include "heaadernav.php"?> <!--=====================================header part end=================================-->



  <div class="container py-4">
        <div class="row">
            <div class="col-6 mod-bg">
                <img src="assets/uploads/<?php echo $fetch_record['image']?>" alt="" srcset="" class="w-100">
            </div>
            <div class="col fw-bolder">
                <p>Player Name: <?php echo $fetch_record['name']?> </p>
                <p>Birth PLace : <?php echo $fetch_record['birthplace']?></p>
                <p>DOB :<?php echo $fetch_record['dob']?> </p>
                <p>weight :<?php echo $fetch_record['weight']?> </p>
                
                
            </div>
        </div>
  </div>
 <!--======================Footer bottom part========================-->
 <div class="container-fluid bg-secondary-subtle">
    <div class="row">
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
  <!--=======================Footer bottom part end===================-->

</body>
<!--=============== SWIPER JS ===============-->
<script src="assets/js/swiper-bundle.min.js"></script>

<!--=============== MAIN JS ===============-->
<script src="assets/js/main.js"></script>

<!-- bootstrap js-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>