<?php
include ('../connection/connection.php');

$get_Data = "select * from piyush_modalf where status= 1";
$info_data = mysqli_query($conn, $get_Data);

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
    <!--==========================Table CDN==============================-->
    <link href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css" rel="stylesheet" type="text/css" />
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

    <!--==============================NAVBAR ========================-->
    <nav class="navbar navbar-expand-lg bg-info text-center">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">View Data Tables</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="player.php">Female Players Table</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="info.php">Players Full Info Table</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!--=============================== NAVBAR END========================-->

    <!--==============================VIEW DB DATA================================-->
    <div class="container-fluid mt-3 -mb-2">
        <div class="container">
            <div class="row mb-2">
                <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                    <h2 class="pt-2 pb-2">Female Players Full Information Table</h2>
                    <table class="table" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Images</th>
                                <th scope="col">Birthplace</th>
                                <th scope="col">DOB</th>
                                <th scope="col">Weight</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>


                        <tbody>
                            <?php $i = 1;
                            foreach ($info_data as $Data) { ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $Data['name']; ?></td>
                                    <td>
                                        <?php if ($Data['image']) { ?>
                                            <img src="../assets/uploads/<?php echo $Data['image']; ?>" width="200px"
                                                height="200px" />
                                        <?php } else { ?>
                                        <?php } ?>
                                    </td>
                                    <td><?php echo $Data['birthplace']; ?></td>
                                    <td><?php echo $Data['dob']; ?></td>
                                    <td><?php echo $Data['weight']; ?></td>
                                    <td>
                                        <div class="d-flex flex-row mb-3">
                                            <a href="modalf.php?del_id=<?php echo $Data['id']; ?>">
                                                <div class="p-2 g-2 btn btn-danger">Delete</div>
                                            </a>
                                            <a href="modalf.php?edits_id=<?php echo $Data['id']; ?>">
                                                <div class="p-2 mx-3 btn btn-primary">Edit</div>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <?php $i++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--==============================VIEW DB DATA END============================-->

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

<!--======================Table JS=======================================-->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>

<!--======================Internal JS=====================================-->
<script>
    let table = new DataTable('#myTable');
</script>
<!--======================BOOTSTRAP JS===================================-->
<script src="../assets/js/bootstrap.bundle.min.js" rel="javascript" type="text/javascript"></script>

</html>