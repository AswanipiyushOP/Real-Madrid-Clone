<?php

include ('connection/connection.php');

//Cards Data
$get_data = "select * from piyush_malecards where status=1 limit 0,3";
$view_data = mysqli_query($conn, $get_data);

$get_data1 = "select * from piyush_malecards where status=1 limit 3,7";
$view_data1 = mysqli_query($conn, $get_data1);

$get_data2 = "select * from piyush_malecards where status=1 limit 10,7";
$view_data2 = mysqli_query($conn, $get_data2);

$get_data3 = "select * from piyush_malecards where status=1 limit 17,4";
$view_data3 = mysqli_query($conn, $get_data3);

$get_data4 = "select * from piyush_malecards where status=1 limit 21,8";
$view_data4 = mysqli_query($conn, $get_data4);

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
  <?php include "heaadernav.php" ?>
  <!--=====================================header part end=================================-->

  <!--======================================main part======================================-->

  <!--====================================heading part======================================-->
  <div class="container-fluid sub_header">
    <div class="row g-0">
      <div class="col-12 col-lg-6 col-md-12 col-sm-12 text-center">
        <h2 class="sub_h2">First Team</h2>
      </div>
      <div class="col-12 col-lg-6 col-md-12 col-sm-12">
        <img src="assets/images/logo-bg-right.svg" style="float:right;">
      </div>
    </div>
    <hr class="sub_bott">
  </div>
  <!--====================================heading part end==================================-->

  <!--====================================Goalkeeper part===================================-->
  <div class="container-fluid">
    <div class="container">
      <h3 class="gk_h3 pb-3">GoalKeeper</h3>
      <div class="row g-0">
        <?php foreach ($view_data as $show_data) { ?>
          <div class="col">
            <a href="details.php?player_id=<?php echo $show_data['id'] ?>">
              <button type="button" class="btn" data-bs-toggle="" data-bs-target="" style="border:0;">
                <article class="card__article imges-hover">
                  <div class="card__image">
                    <img src="assets/uploads/<?php echo $show_data['image']; ?>" alt="image"
                      title="<?php echo $show_data['position']; ?>" class="card__img" />
                    <div class="card__shadow"></div>
                  </div>

                  <div class="card__data">
                    <h3 class="card__name"><?php echo $show_data['name']; ?><br>
                      <i class="fa fa-solid fa-hand-pointer"></i>
                    </h3>
                  </div>
                </article>
              </button>
            </a>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <!--====================================Goalkeeper part end================================-->

  <!--====================================Defender Part==========================================-->

  <div class="container-fluid">

    <div class="container">
      <h3 class="gk_h3 pt-5 pb-3">Defend</h3>
      <div class="card__container swiper ">
        <div class="card__content">
          <div class="swiper-wrapper">
            <?php foreach ($view_data1 as $show_data1) { ?>
              <article class="card__article swiper-slide imges-hover">

                <div class="card__image">
                  <img src="assets/uploads/<?php echo $show_data1['image']; ?>" alt="image"
                    title="<?php echo $show_data1['position']; ?>" class="card__img" />
                  <div class="card__shadow"></div>
                </div>

                <div class="card__data">
                  <a href="details.php?player_id=<?php echo $show_data1['id'] ?>">
                    <button type="button" class="btn" data-bs-toggle="" data-bs-target="" style="border: 0;">
                      <h3 class="card__name"><?php echo $show_data1['name']; ?><br>
                        <i class="fa fa-solid fa-hand-pointer"></i>
                      </h3>
                    </button>
                  </a>
                </div>

              </article>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <!-- container end-->
  </div>

  <!--====================================Defender part end========================================-->

  <!--=============================================Midfielder part========================================-->

  <div class="container-fluid">

    <div class="container">
      <br><br>
      <h3 class="gk_h3 pt-4 pb-4">Midfield</h3>
      <div class="card__container swiper ">
        <div class="card__content">
          <div class="swiper-wrapper">
            <?php foreach ($view_data2 as $show_data2) { ?>
              <article class="card__article swiper-slide imges-hover">

                <div class="card__image">
                  <img src="assets/uploads/<?php echo $show_data2['image']; ?>" alt="image"
                    title="<?php echo $show_data2['position']; ?>" class="card__img" />
                  <div class="card__shadow"></div>
                </div>

                <div class="card__data">
                  <a href="details.php?player_id=<?php echo $show_data2['id'] ?>">
                    <button type="button" class="btn" data-bs-toggle="" data-bs-target="" style="border: 0;">
                      <h3 class="card__name"><?php echo $show_data2['name']; ?><br>
                        <i class="fa fa-solid fa-hand-pointer"></i>
                      </h3>
                    </button>
                  </a>
                </div>

              </article>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <!-- container end-->
  </div>
  <!--=============================================Midfielder part end====================================-->

  <!--============================================Forward part===============================================-->
  <div class="container-fluid">

    <div class="container">
      <br><br>
      <h3 class="gk_h3 pt-4 pb-4">Forward</h3>
      <div class="card__container swiper ">
        <div class="card__content">
          <div class="swiper-wrapper">
            <?php foreach ($view_data3 as $show_data3) { ?>
              <article class="card__article swiper-slide imges-hover">

                <div class="card__image">
                  <img src="assets/uploads/<?php echo $show_data3['image']; ?>" alt="image"
                    title="<?php echo $show_data3['position']; ?>" class="card__img" />
                  <div class="card__shadow"></div>
                </div>

                <div class="card__data">
                  <a href="details.php?player_id=<?php echo $show_data3['id'] ?>">
                    <button type="button" class="btn" data-bs-toggle="" data-bs-target="" style="border: 0;">
                      <h3 class="card__name"><?php echo $show_data3['name']; ?><br>
                        <i class="fa fa-solid fa-hand-pointer"></i>
                      </h3>
                    </button>
                  </a>
                </div>

              </article>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <!-- container end-->
  </div>
  <!--============================================Forward part end===========================================-->


  <!--============================================Coaches part===============================================-->
  <div class="container-fluid">

    <div class="container">
      <br><br>
      <h3 class="gk_h3">Coaches</h3>
      <div class="card__container swiper ">
        <div class="card__content">
          <div class="swiper-wrapper">
            <?php foreach ($view_data4 as $show_data4) { ?>
              <article class="card__article swiper-slide imges-hover">

                <div class="card__image">
                  <img src="assets/uploads/<?php echo $show_data4['image']; ?>" alt="image"
                    title="<?php echo $show_data4['position']; ?>" class="card__img" />
                  <div class="card__shadow"></div>
                </div>

                <div class="card__data">
                  <button type="button" class="btn" data-bs-toggle="" data-bs-target="" style="border: 0;">
                    <h3 class="card__name"><?php echo $show_data4['name']; ?><br>
                      <i class="fa fa-solid fa-hand-pointer"></i>
                    </h3>
                  </button>
                </div>

              </article>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <!-- container end-->
  </div>
  <!--============================================Coaches part end===========================================-->


  <!-- main part end-->

  <!--=====================footer part======================================-->
  <div class="container-fluid">
    <!--===========container super part========================-->
    <div class="container">
      <hr />
      <!--=============footer section==================-->

      <!--===================Row part 1====================-->
      <div class="container text-center">
        <div class="row mt-2 mb-2">
          <div class="col-12 col-lg-12 col-md-12 col-sm-12">
            <gray>Download Now</gray><br />
            <blue>Official App Fan</blue>
          </div>
        </div>
      </div>
      <!--===================Row part 1 end====================-->

      <!--===================Row part 2========================-->
      <div class="container text-center">
        <div class="row g-2 offset-2 mt-2 mb-2">
          <div class="col-12 col-lg-3 col-md-12 col-sm-12">
            <a class="navbar-brand"
              href="https://play.google.com/store/apps/details?id=com.mcentric.mcclient.MyMadrid&hl=en&gl=US&pli=1"
              target="_blank">
              <img src="assets/images/Google+Play+Badge_en.svg" width="216px" height="64px" />
            </a>
          </div>
          <div class="col-12 col-lg-3 col-md-12 col-sm-12">
            <a class="navbar-brand" href="https://apps.apple.com/us/app/real-madrid/id1107624540" target="_blank">
              <img src="assets/images/App+Store+Badge_en.svg" width="216px" height="64px" />
            </a>
          </div>
          <div class="col-12 col-lg-3 col-md-12 col-sm-12">
            <a class="navbar-brand" href="https://appgallery.huawei.com/#/app/C102163903" target="_blank">
              <img src="assets/images/Huawei+Store+Badge_en.svg" width="216px" height="64px" />
            </a>
          </div>
        </div>
      </div>
      <hr />
      <!--===================Row part 2 end========================-->

      <!--==================footer section end====================-->

      <!--==================footer section  upper===================-->

      <!--==================Row part 3===============================-->
      <div class="row mt-2 mb-3 offset-3">
        <div class="col-12 col-lg-3 col-md-12 col-sm-12">
          <a class="navbar-brand" href="https://www.emirates.com/us/english/" target="_blank">
            <img src="assets/images/emirates_gray_big.svg" width="140px" height="116px" />
          </a>
        </div>
        <div class="col-12 col-lg-3 col-md-12 col-sm-12">
          <a class="navbar-brand" href="https://www.adidas.co.uk/football" target="_blank">
            <img src="assets/images/adidas_gray_big.svg" width="140px" height="116px" />
          </a>
        </div>
        <div class="col-12 col-lg-3 col-md-12 col-sm-12">
          <a class="navbar-brand" href="https://www.hp.com/us-en/home.html" target="_blank">
            <img src="assets/images/HP.svg" width="140px" height="117px" />
          </a>
        </div>
      </div>
      <!--==================Row part 3 end===========================-->

      <!--======================footer section  upper end=============-->

      <!--==================footer section Middle=====================-->

      <!--==================Row part 4===============================-->
      <div class="row mt-4 mb-3">
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/mahou_gray.svg" width="66px" height="55px" />
          </a>
        </div>
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/dubai_gray.svg" width="66px" height="55px" />
          </a>
        </div>
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/ea-sports_gray.svg" width="66px" height="55px" />
          </a>
        </div>
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/abbott_gray.svg" width="66px" height="55px" />
          </a>
        </div>
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/nivea_gray.svg" width="66px" height="55px" />
          </a>
        </div>
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/cantabria-labs_gray.svg" width="66px" height="55px" />
          </a>
        </div>
      </div>
      <!--==================Row part 4 end===========================-->

      <!--==================Row part 5===============================-->
      <div class="row mt-4 mb-2">
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/easymarkets_gray.svg" width="66px" height="55px" />
          </a>
        </div>
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/adobe_gray.svg" width="66px" height="55px" />
          </a>
        </div>
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/zegna_gray.svg" width="66px" height="55px" />
          </a>
        </div>
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/cisco_gray.svg" width="66px" height="55px" />
          </a>
        </div>
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/palladium_gray.svg" width="66px" height="55px" />
          </a>
        </div>
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/daktronics_gray.svg" width="66px" height="55px" />
          </a>
        </div>
      </div>
      <!--==================Row part 5 end===========================-->

      <!--==================Row part 6===============================-->
      <div class="row mt-2 mb-2">
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/softtek_gray.svg" width="66px" height="55px" />
          </a>
        </div>
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/canon_gray.svg" width="66px" height="55px" />
          </a>
        </div>
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/unicaja_gray_2.svg" width="66px" height="55px" />
          </a>
        </div>
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/playstation_gray.svg" width="66px" height="55px" />
          </a>
        </div>
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/sanitas_gray.svg" width="66px" height="55px" />
          </a>
        </div>
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/cocacola_gray.svg" width="66px" height="55px" />
          </a>
        </div>
      </div>
      <!--==================Row part 6 end===========================-->

      <!--===================footer section Middle end============-->
    </div>

    <!--=========================container end super======================-->

    <!--=========================container part 2=====================-->
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-8 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/2.svg" width="160" height="160" />
          </a>
        </div>

        <div class="col-12 col-lg-4 col-md-12 col-sm-12">
          <div class="ms-auto gap-5" style="line-height: 154px">
            <i class="fa fa-brands fa-facebook icon"></i>
            <i class="fa fa-brands fa-instagram icon"></i>
            <i class="fa fa-brands fa-x-twitter icon"></i>
            <i class="fa fa-brands fa-youtube icon"></i>
            <i class="fa fa-brands fa-twitch icon"></i>
            <i class="fa fab fa-snapchat-ghost icon"></i>
            <i class="fa fa-brands fa-tiktok icon"></i>
          </div>
        </div>
      </div>
    </div>
    <hr />
    <!--=======================container part 2 enb=====================-->
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

  <!--=======================container-fluid end=========================-->
  <!--=====================footer part end============================-->
</body>
<!--=============== SWIPER JS ===============-->
<script src="assets/js/swiper-bundle.min.js"></script>

<!--=============== MAIN JS ===============-->
<script src="assets/js/main.js"></script>

<!-- bootstrap js-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>