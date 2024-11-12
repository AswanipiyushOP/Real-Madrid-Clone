<?php


include ('../connection/connection.php');
if (!isset($_SESSION['user_data'])) {
    header('location:login.php');
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
    <!--==============================OFFCANVAS NAVBAR========================-->

    <nav class="navbar navbar-dark bg-primary ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">REAL MADRID</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header bg-info">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Admin Panel</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">Cards</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Team Management
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="modalm.php">First Team</a></li>
                                <li><a class="dropdown-item" href="modalf.php">Women's Team</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="history.php">RMA History</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="stadium.php">Santiago Bernabéu Stadium</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="rmplay.php">RMPlay</a>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <a class="btn btn-danger" href="logout.php">Log out</a>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!--==============================OFFCANVAS NAVBAR END========================-->

    <!--==============================Main Part===================================-->
    <div class="container-fluid">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-12 col-lg-6 col-md-12 col-sm-12">
                    <h2 class="pt-2 pb-2">Player Cards Management</h2>
                    <a class="nav-link" href="home.php">
                        <div class="card border-info">
                            <img src="../assets/images/RMA1.jpg" class="card-img-top px-4 pt-3 pb-2" height="300px"
                                width="300px" alt="...">
                            <h5 class="card-title px-4 pt-2 pb-2">Cards</h5>

                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-6 col-md-12 col-sm-12">
                    <h2 class="pt-2 pb-2">RMA History Management</h2>
                    <a class="nav-link " href="history.php">
                        <div class="card border-info">
                            <img src="../assets/images/history1.jpg" class="card-img-top px-4 pt-3 pb-2" height="300px"
                                width="300px" alt="...">
                            <h5 class="card-title px-4 pt-2 pb-2">RMA History</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row mt-5 mb-5">
                <div class="col-12 col-lg-6 col-md-12 col-sm-12">
                    <h2 class="pt-2 pb-2">First Team Management</h2>
                    <a class="nav-link" href="modalm.php">
                        <div class="card border-info">
                            <img src="../assets/images/cards.jpg" height="300px" width="300px"
                                class="card-img-top px-4 pt-3 pb-2" alt="...">
                            <h5 class="card-title px-4 pt-2 pb-2">First Team Full Details</h5>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-6 col-md-12 col-sm-12">
                    <h2 class="pt-2 pb-2">Women's Team Management</h2>
                    <a class="nav-link" href="modalf.php">
                        <div class="card border-info">
                            <img src="../assets/images/womencard.png" class="card-img-top px-4 pt-3 pb-2" height="300px"
                                width="300px" alt="...">
                            <h5 class="card-title px-4 pt-2 pb-2">Women's Team Full Details</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row mt-5 mb-5">
                <div class="col-12 col-lg-6 col-md-12 col-sm-12">
                    <h2 class="pt-2 pb-2">Santiago Bernabéu Stadium</h2>
                    <a class="nav-link" href="stadium.php">
                        <div class="card border-info">
                            <img src="../assets/images/TorreEuropa.png" height="300px" width="300px"
                                class="card-img-top px-4 pt-3 pb-2" alt="...">
                            <h5 class="card-title px-4 pt-2 pb-2">Santiago Bernabéu Stadium Management</h5>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-6 col-md-12 col-sm-12">
                    <h2 class="pt-2 pb-2">RMPlay</h2>
                    <a class="nav-link" href="rmplay.php">
                        <div class="card border-info">
                            <img src="../assets/images/resize.png" class="card-img-top px-4 pt-3 pb-2" height="300px"
                                width="300px" alt="...">
                            <h5 class="card-title px-4 pt-2 pb-2">RMPlay Management</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--==============================Main part end==============================-->

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