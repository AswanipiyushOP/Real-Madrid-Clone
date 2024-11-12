<?php

include('connection/connection.php');

$qry = "select * from piyush_home where id=1 AND status=1";
$result = mysqli_query($conn, $qry);
$img_details = mysqli_fetch_array($result);

$get_Data = "select * from piyush_home where status=1 limit 1,4 ";
$view_data = mysqli_query($conn, $get_Data);


$get3_data = "select * from piyush_home where status=1 limit 5,3";
$view3_data = mysqli_query($conn, $get3_data);



$get_data4 = "select * from piyush_home where status=1 limit 8,3";
$view_data4 = mysqli_query($conn, $get_data4);

$get_data5 = "select * from piyush_home where status=1 limit 11,3";
$view_data5 = mysqli_query($conn, $get_data5);

$get_data6 = "select * from piyush_home where status=1 limit 14,3";
$view_data6 = mysqli_query($conn, $get_data6);

$get_data7 = "select * from piyush_home where status=1 limit 17,3";
$view_data7 = mysqli_query($conn, $get_data7);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Real Madrid CF | Real Madrid CF Clone</title>
  <!--====================Fav ICON=========================-->
  <link rel="icon" type="image/x-icon" href="./assets/images/madrid-logo.svg" sizes="48*48" />

  <!--=====================bootstrap css===================-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />

  <!--====================font awesome CDN===================-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet"
    type="text/css" />

  <!--====================custom css===========================-->
  <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <!--======================header part===========================-->
  <?php include "heaadernav.php" ?>
  <!--================================header part end=============================-->

  <!--======================main part==========================================-->

  <!--================image card part==========================================-->

  <div class="container mt-2 mb-2">
    <div class="row">
      <div class="col-12 col-lg-12 col-md-12 col-sm-12 pb-4 pt-3">
        <div class="card mb-3 border-success">
          <div class="row g-0">
            <div class="col-12 col-lg-8 col-md-12 col-sm-12">
              <div class="img-hover">
                <img src="assets/uploads/<?php echo $img_details['image']; ?>" class="img-fluid rounded-start"
                  alt="<?php echo $img_details['name']; ?>" />
              </div>
            </div>
            <div class="col-12 col-lg-4 col-md-12 col-sm-12 bg-light">
              <div class="text-hover">
                <div class="card-body">
                  <h5 class="card-title text-center" style="line-height: 350px">
                    <?php echo $img_details['short_desc']; ?>
                  </h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--================image card part end==========================================-->

  <!--================row cards part 1==========================================-->
  <div class="container mt-2 mb-2">
    <div class="row mt-2 mb-2">
      <?php
      foreach ($view_data as $show_data) {
        ?>
        <div class="col-12 col-lg-3 col-md-12 col-sm-12">
          <div class="card ho border-0 imgs-hover pt-3 pb-3">
            <img src="assets/uploads/<?php echo $show_data['image']; ?>" class="card-img-top im"
              alt="<?php echo $show_data['name']; ?>" title="<?php echo $show_data['short_desc']; ?>" />
            <div class="card-body">
              <p class="card-text">
                <?php echo $show_data['short_desc']; ?>
              </p>
            </div>
          </div>

        </div>
        <?php
      } ?>
    </div>
  </div>
  <!--================row cards part 1 end==========================================-->

  <!--================row cards part 2==============================================-->
  <div class="container mt-2 mb-2">
    <div class="row mt-2 mb-2">
      <?php
      foreach ($view3_data as $show3_data) {

        ?>
        <div class="col-12 col-lg-4 col-md-12 col-sm-12">
          <div class="card ho border-0 imgs-hover pt-3 pb-3">
            <img src="assets/uploads/<?php echo $show3_data['image']; ?>" class="card-img-top im"
              alt="<?php echo $show3_data['name']; ?>" title="<?php echo $show3_data['short_desc']; ?>" />
            <div class="card-body">
              <p class="card-text f">
                <?php echo $show3_data['short_desc']; ?>
              </p>
            </div>
          </div>
        </div>
      <?php } ?>
      <!--==================row cards part 2 end====================================-->
    </div>
  </div>

  <!--=================gif part 1================================================-->
  <div class="container-fluid bg-secondary-subtle">

    <div class="row">
      <div class="col-12 col-lg-12 col-md-12 col-sm-12 pt-3 pb-3 text-center">
        <a class="navbar-brand" href="https://www.adidas.co.in/" target="_blank">
          <img src="	https://tpc.googlesyndication.com/simgad/4994230691188472728" />
        </a>
      </div>
    </div>

  </div>
  <!--=================gif part 1 end================================================-->

  <!--================row cards part 3==========================================-->
  <div class="container mb-3 mt-3">
    <div class="row">
      <?php
      foreach ($view_data4 as $show_data4) {
        ?>
        <div class="col-12 col-lg-4 col-md-12 col-sm-12">
          <div class="card ho border-0 imgs-hover pt-3 pb-3">
            <img src="assets/uploads/<?php echo $show_data4['image']; ?>" class="card-img-top im"
              alt="Barça-Real Madrid: all out for a place in the league final"
              title="Barça-Real Madrid: all out for a place in the league final" />
            <div class="card-body">
              <p class="card-text f">
                <?php echo $show_data4['short_desc']; ?>
              </p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  <!--=================row cards part 3 end=====================================-->

  <!--=================gif part 2================================================-->
  <div class="container-fluid bg-secondary-subtle">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-12 col-md-12 col-sm-12 pt-3 pb-3 text-center">
          <img src="	https://tpc.googlesyndication.com/simgad/5437312081444243075" />
        </div>
      </div>
    </div>
  </div>
  <!--=================gif part2 end=============================================-->

  <!--=================row cards part 4=========================================-->
  <div class="container mb-3 mt-3">
    <div class="row">
      <?php foreach ($view_data5 as $show_data5) { ?>
        <div class="col-12 col-lg-4 col-md-12 col-sm-12">
          <div class="card ho border-0 imgs-hover pt-3 pb-3">
            <img src="assets/uploads/<?php echo $show_data5['image']; ?>" class="card-img-top im"
              alt="46 years without Santiago Bernabéu" title="<?php echo $show_data5['short_desc']; ?>" />
            <div class="card-body">
              <p class="card-text f"><?php echo $show_data5['short_desc']; ?></p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  <!--==================row cards part 4 end===================================-->

  <!--==================row cards part 5=======================================-->
  <div class="container mb-3 mt-3">
    <div class="row">
      <?php foreach ($view_data6 as $show_data6) { ?>
        <div class="col-12 col-lg-4 col-md-12 col-sm-12">
          <div class="card ho border-0 imgs-hover pt-3 pb-3">
            <img src="assets/uploads/<?php echo $show_data6['image']; ?>" class="card-img-top im"
              alt="46 years without Santiago Bernabéu" title="<?php echo $show_data6['short_desc']; ?>" />
            <div class="card-body">
              <p class="card-text f"><?php echo $show_data6['short_desc']; ?></p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  <!--==================row cards part 5 end===================================-->

  <!--==================gif part 3=============================================-->
  <div class="container-fluid bg-secondary-subtle">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-12 col-md-12 col-sm-12 text-center pt-3 pb-3">
          <img src="https://tpc.googlesyndication.com/simgad/15705061092617949598" />
        </div>
      </div>
    </div>
  </div>
  <!--===================gif part 3 end=======================================-->

  <!--===================row cards part 6=====================================-->
  <div class="container mb-3 mt-3">
    <div class="row">
      <?php foreach ($view_data7 as $show_data7) { ?>
        <div class="col-12 col-lg-4 col-md-12 col-sm-12">
          <div class="card ho border-0 imgs-hover pt-3 pb-3">
            <img src="assets/uploads/<?php echo $show_data7['image']; ?>" class="card-img-top im"
              alt="46 years without Santiago Bernabéu" title="<?php echo $show_data7['short_desc']; ?>" />
            <div class="card-body">
              <p class="card-text f"><?php echo $show_data7['short_desc']; ?></p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  <!--=====================row cards part 6 end================================-->

  <!--=====================gif part 4==========================================-->
  <div class="container-fluid bg-secondary-subtle mt-3 mb-3">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-4 col-md-12 col-sm-12 pt-3 pb-3">
          <a class="navbar-brand" href="https://www.adidas.co.in/" target="_blank">
            <img src="	https://tpc.googlesyndication.com/simgad/4994230691188472728" />
          </a>
        </div>
        <div class="col-12 col-lg-4 col-md-12 col-sm-12 pt-3 pb-3">
          <a class="navbar-brand" href="https://www.emirates.com/es/english/discover-dubai/" target="_blank">
            <img src="https://tpc.googlesyndication.com/simgad/17072080768508996330" />
          </a>
        </div>
        <div class="col-12 col-lg-4 col-md-12 col-sm-12 pt-3 pb-3">
          <a class="navbar-brand" href="https://shop.realmadrid.com/fashion/urban/real" target="_blank">
            <img src="	https://tpc.googlesyndication.com/simgad/10392368214554384571" />
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--=====================gif part 4 end======================================-->

  <!--=====================main part end=====================================-->

  <!--=====================footer part======================================-->
  <div class="container-fluid mt-3">
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
            <img src="assets/images/2.svg" width="160" height="160" class="pb-4" />
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

    <!--======================Footer bottom part========================-->
    <div class="container-fluid bg-secondary-subtle fixed-bottom">
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
  </div>
  <!--=====================footer part end============================-->
</body>
<!--======================bootstrap js===================================-->
<script src="assets/js/bootstrap.bundle.min.js" rel="javascript" type="text/javascript"></script>

</html>