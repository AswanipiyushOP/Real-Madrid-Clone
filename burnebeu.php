<?php

include ('connection/connection.php');
// Step 1
if (!isset($_SESSION['user_data'])) {
  header('location:login.php');
}


$get_data = "select * from piyush_stadium where status=1 limit 0,1";
$view_data = mysqli_query($conn, $get_data);

$get_data1 = "select * from piyush_stadium where status=1 limit 1,3";
$view_data1 = mysqli_query($conn, $get_data1);

$get_data2 = "select * from piyush_stadium where status=1 limit 4,3";
$view_data2 = mysqli_query($conn, $get_data2);

$get_data3 = "select * from piyush_stadium where status=1 limit 7,3";
$view_data3 = mysqli_query($conn, $get_data3);

$get_data4 = "select * from piyush_stadium where status=1 limit 10,3";
$view_data4 = mysqli_query($conn, $get_data4);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Real Madrid CF | Real Madrid CF Clone</title>
  <!--=================Fav ICON====================-->
  <link rel="icon" type="image/x-icon" href="./assets/images/madrid-logo.svg" sizes="48*48" />

  <!--================bootstrap css================-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />

  <!--===============font awesome CDN==============-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet"
    type="text/css" />

  <!--================custom css====================-->
  <link href="assets/css/style.css" rel="stylesheet" type="text/css" />


</head>

<body>
  <!--=================header part==============================================-->
  <?php include "heaadernav.php" ?>
  <!--=================header part end=========================================-->

  <!--==================main part==============================================-->
  <div class="container-fluid bg_body_container">
    <div class="container pb-4">
      <h2 class="text-light fs-1 fw-bolder p-4">
        View the Stadium redevelopment work
      </h2>
      <!--===============header-image-card part===============================-->
      <div class="card header-top-bg">
        <div class="d-flex justify-content-start">
          <button type="button" class="btn-light mt-10 h-10 mx-5" data-bs-toggle="modal" data-bs-target="#exampleModal"
            data-bs-whatever="@mdo">
            <i class="fa fa-solid fa-circle-play"></i> 1. Main façade
            Castellana
          </button>
        </div>
        <div class="d-flex justify-content-end">
          <button type="button" class="btn-light h-10 my-5" data-bs-toggle="modal" data-bs-target="#grassModal"
            data-bs-whatever="@mdo">
            <i class="fa fa-solid fa-circle-play"></i> 2 - Bernabéu's
            retractable grass
          </button>
        </div>
      </div>
      <!--================header-image-card part end==========================-->
    </div>
  </div>


  <div class="container-fluid">
    <h2 class="card-title px-4 pt-3">Santiago Bernabéu Stadium Outside</h2>
    <div class="container">
      <?php foreach ($view_data as $show_data) { ?>
        <div class="card mb-2 mt-3 card-border">
          <div class="row g-0">
            <div class="col-12 col-lg-8 col-md-12 col-sm-12">
              <div class="img-hover">
                <img src="assets/uploads/<?php echo $show_data['image']; ?>" class="img-fluid rounded-start"
                  title="<?php echo $show_data['name']; ?>" alt="Stadium_outside" />
              </div>
            </div>
            <div class="col-12 col-lg-4 col-md-12 col-sm-12 bg-light card-border">
              <div class="card-body">
                <h5 class="card-title text-center" style="line-height: 350px">
                  <button type="button" class="text-hover b-0" data-bs-toggle="modal" data-bs-target="#stadiumModal"
                    data-bs-whatever="@mdo">
                    <?php echo $show_data['name']; ?>
                  </button>
                </h5>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>

  <div class="container mt-5">
    <!-- row cards part-->
    <div class="row">
      <?php foreach ($view_data1 as $show_data1) { ?>
        <div class="col-12 col-lg-4 col-md-12 col-sm-12">
          <div class="card ho border-0 imgs-hover pt-2 pb-2" style="width: 20rem">
            <img src="assets/uploads/<?php echo $show_data1['image']; ?>" class="card-img-top im"
              title="<?php echo $show_data1['name']; ?>" alt="<?php echo $show_data1['name']; ?>" />
          </div>
        </div>
      <?php } ?>
    </div>
    <br />
    <!-- row cards part 1 end-->
  </div>

  <!--======================gif part===========================================-->
  <div class="container-fluid h-30 bg-secondary-subtle mt-2 mb-3">
    <div class="row">
      <div class="col-12 col-lg-12 col-md-12 col-sm-12">
        <div class="container text-center">
          <img src="https://tpc.googlesyndication.com/simgad/17072080768508996330" class="pb-4 pt-3" />
        </div>
      </div>
    </div>
  </div>
  <!--======================gif part end=======================================-->
  <div class="container">
    <h2 class="card-title px-4">Santiago Bernabéu Stadium pictures</h2>
    <br />

    <!--====================row cards 2 part==================================-->
    <div class="row">
      <?php foreach ($view_data2 as $show_data2) { ?>
        <div class="col-12 col-lg-4 col-md-12 col-sm-12 ">
          <div class="card ho border-0 imgs-hover pt-3 pb-3" style="width: 20rem">
            <img src="assets/uploads/<?php echo $show_data2['image']; ?>" class="card-img-top im"
              alt="<?php echo $show_data2['name']; ?>" title="<?php echo $show_data2['name']; ?>" />
          </div>
        </div>
      <?php } ?>
    </div>

    <!--====================row cards 2 part end==================================-->

    <!--====================row cards 3 part==================================-->
    <div class="row">
      <?php foreach ($view_data3 as $show_data3) { ?>
        <div class="col-12 col-lg-4 col-md-12 col-sm-12">
          <div class="card ho border-0 imgs-hover pt-3 pb-3" style="width: 20rem">
            <img src="assets/uploads/<?php echo $show_data3['image']; ?>" class="card-img-top im"
              alt="<?php echo $show_data3['name']; ?>" title="<?php echo $show_data3['name']; ?>" />
          </div>
        </div>
      <?php } ?>
    </div>

    <!--====================row cards 3 part end==================================-->

    <!--====================row cards 4 part==================================-->
    <div class="row">
      <?php foreach ($view_data4 as $show_data4) { ?>
        <div class="col-12 col-lg-4 col-md-12 col-sm-12">
          <div class="card ho border-0 imgs-hover" style="width: 20rem">
            <img src="assets/uploads/<?php echo $show_data4['image']; ?>" class="card-img-top im pt-3 pb-3"
              alt="<?php echo $show_data4['name']; ?>" title="<?php echo $show_data4['name']; ?>" />
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  <!--======================Container end=====================================-->

  <!--======================row cards part 4 end==============================-->

  <!--======================gif part 2=======================================-->

  <div class="container-fluid  bg-secondary-subtle mt-2 mb-2">
    <div class="container text-center">
      <div class="row">
        <div class="col-12 col-lg-4 col-md-12 col-sm-12 pt-4 pb-4">
          <a class="navbar-brand" href="https://www.adidas.co.in/real_madrid" target="_blank">
            <img src="assets/images/gif2-1.jpeg">
          </a>
        </div>
        <div class="col-12 col-lg-4 col-md-12 col-sm-12 pt-4 pb-4">
          <a class="navbar-brand" href="https://www.emirates.com/es/english/discover-dubai/" target="_blank">
            <img src="https://tpc.googlesyndication.com/simgad/17072080768508996330">
          </a>
        </div>
        <div class="col-12 col-lg-4 col-md-12 col-sm-12 pt-4 pb-4">
          <a class="navbar-brand"
            href="https://shop.realmadrid.com/en-gb/jerseys-kits/home?utm_source=web&utm_medium=display&utm_campaign=tie_launch-home-kit-24-25_20240605_en_gb&utm_content=banner_300x250"
            target="_blank">
            <img src="assets/images/gif2-3.gif">
          </a>
        </div>
      </div>

    </div>
  </div>

  <!--======================gif part 2end=====================================-->

  <!--======================header top modal=================================-->
  <div class="row">
    <div class="col-12 col-lg-12 col-md-12 col-sm-12">

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <!-- <h1 class="modal-title fs-5" id="exampleModalLabel"></h1> -->
              <button type="button" class="btn-close" id="closeModal" data-bs-dismiss="modal"
                aria-label="Close"></button>
            </div>
            <div class="modal-body px-7">
              <iframe width="360" height="315" id="modalVideo"
                src="https://www.youtube.com/embed/k6m6h2ukSU0?si=9a0mxZbnw2yX6G53" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-lg-12 col-md-12 col-sm-12">
      <div class="modal fade" id="grassModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
          <div class="modal-content">
            <div class="modal-header">
              <!-- <h1 class="modal-title fs-5" id="exampleModalLabel"></h1> -->
              <button type="button" class="btn-close" id="closeModals" data-bs-dismiss="modal"
                aria-label="Close"></button>
            </div>
            <div class="modal-body px-7">
              <iframe width="360" height="315" id="modalVideos"
                src="https://www.youtube.com/embed/xZZs6BxLYHM?si=cwjuEsyEwVK30IcX" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--======================top modal end====================================-->


  <!--======================main part end====================================-->

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

  </div>
  <!--=======================container-fluid end=========================-->

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

  <!--=====================footer part end============================-->
</body>
<!--================bootstrap js===================-->
<script src="assets/js/bootstrap.bundle.min.js" rel="javascript" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>

<script>

  //   $(document).ready(function() {
  //     $('.btn-close').click(function(){
  //     $('.modal-body').each(function() {
  //       $(this).get(0).pause();
  //     })
  //   });
  // });
  document.getElementById('closeModal').addEventListener('click', function () {
    document.getElementById('modalVideo').src = document.getElementById('modalVideo').src;
  });

</script>

<script>
  document.getElementById('closeModals').addEventListener('click', function () {
    document.getElementById('modalVideos').src = document.getElementById('modalVideo').src;
  });

</script>

</html>