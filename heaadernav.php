<div class="container-fluid">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <!--================logo part==============================-->
        <a class="navbar-brand" href="#">
          <img src="assets/images/2.svg" width="160" height="160" />
        </a>
        <!--================logo part end===========================-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto mb-2 mb-lg-0">
            <!--===================home part============================-->
            <li class="nav-item">
              <a class="nav-link active nav_color" aria-current="page" href="index.php">
                <red>Home</red>
              </a>
            </li>
            <!--===================home part end======================-->

            <!--===================football part=======================-->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle nav_color" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <red>Football</red>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item nav_color" href="first_team.php">
                    <red>First Team</red>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item nav_color" href="womens_team.php">
                    <red>Women's Team</red>
                  </a>
                </li>
              </ul>
            </li>
            <!--====================football part end=====================-->

            <!--====================The Club part==========================-->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle nav_color" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <red>The Club</red>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item nav_color" href="football_history.php">
                    <red>Football History</red>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link nav_color" href="burnebeu.php">
                <red>Bernabéu Stadium</red>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav_color" href="RMPlay.php">
                <red>RMPlay</red>
              </a>
            </li>
          </ul>
          <a class="navbar-brand" href="https://www.emirates.com/us/english/" target="_blank">
            <img src="assets/images/emirates_gray.svg" width="60" height="60" />&nbsp;&nbsp;
          </a>
          <a class="navbar-brand" href="https://www.adidas.co.uk/football" target="_blank">
            <img src="assets/images/adidas_gray.svg" width="60" height="60" />&nbsp;&nbsp;
          </a>
          <!--========================The Club part end=========================-->
          <form class="d-flex justify-content-end" role="sign-in">
            <?php if ($_SESSION['user_data']) { ?>
              <a href="Logout.php" class="btn btn-outline-danger btn-lg">
                <i class="fa fa-regular fa-user"></i>&nbsp;Logout
              </a>

            <?php } else { ?>
              <a href="Login.php" class="btn btn-outline-success btn-lg">
                <i class="fa fa-regular fa-user"></i>&nbsp;sign-in
              </a>
            <?php } ?>
          </form>
        </div>
      </div>
    </nav>
    <hr />
  </div>
 