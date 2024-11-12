<?php
include ('../connection/connection.php');
if (!isset($_SESSION['user_data'])) {
    header('location:login.php');
}

// Player Card Insertion
if (isset($_REQUEST['card_submit'])) {

    $file = uniqid() . $_FILES['image']['name'];
    $path = "../assets/uploads/" . $file;
    $upload = move_uploaded_file($_FILES['image']['tmp_name'], $path);

    if ($upload) {

        $gid = uniqid();
        $name = $_REQUEST['names'];
        $position = $_REQUEST['positions'];

        $qry = "insert into piyush_femalecards(gid,names,positions,image) values('$gid','$name','$position','$file')";
        $result = mysqli_query($conn, $qry);

        if ($result) {

            echo "<script>alert('Data Inserted Successfuly!!')</script>";
            echo "<script>window.location='modalf.php'</script>";
        } else {
            echo "<script>alert('Data Insertion Error!!!')</script>";
            echo "<script>window.location='modalf.php'</script>";
        }
    }
}

//EDIT Query for Female Card
if (isset($_GET['edit_id'])) {

    $id = $_GET['edit_id'];
    $edit_qry = "select * from piyush_femalecards where id='$id'";
    $get_Data = mysqli_query($conn, $edit_qry);
    $player = mysqli_fetch_array($get_Data);
}

if (isset($_REQUEST['card_update'])) {

    $file = uniqid() . $_FILES['image']['name'];
    $path = "../assets/uploads/" . $file;
    $upload = move_uploaded_file($_FILES['image']['tmp_name'], $path);

    if ($upload) {

        $id = $_GET['edit_id'];
        $gid = uniqid();
        $name = $_REQUEST['names'];
        $position = $_REQUEST['positions'];

        $qry = "update piyush_femalecards set names='$name',image='$file',positions='$position' where id='$id'";
        $update_qry = mysqli_query($conn, $qry);

        if ($update_qry) {
            echo "<script>alert('Data Updated Successfuly!!')</script>";
            echo "<script>window.location='player.php'</script>";
        } else {
            echo "<script>alert('Updation Error!!!')</script>";
            echo "<script>window.location='player.php'</script>";
        }
    } else {
        echo "<script>alert('file not uploaded')</script>";
        echo "<script>window.location='modalf.php'</script>";
    }
}

//Delete query for Female Card
if (isset($_GET['del_id'])) {

    $id = $_GET['del_id'];
    $del_qry = "update piyush_femalecards set status =2 where id='$id'";
    $update_qry = mysqli_query($conn, $del_qry);

    if ($update_qry) {
        echo "<script>alert('Data Deleted!!')</script>";
        echo "<script>window.location='player.php'</script>";
    } else {

        echo "<scrript>alert('Error!!')</script>";
        echo "<script>window.location='player.php'</script>";
    }
}



// Player Full Info Insertion
if (isset($_REQUEST['info_submit'])) {

    $file = uniqid() . $_FILES['image']['name'];
    $path = "../assets/uploads/" . $file;
    $upload = move_uploaded_file($_FILES['image']['tmp_name'], $path);

    if ($upload) {

        $gid = uniqid();
        $name = $_REQUEST['name'];
        $birth = $_REQUEST['birthplace'];
        $dob = $_REQUEST['DOB'];
        $weight = $_REQUEST['weight'];
        // $match = $_REQUEST['match'];
        // $minute = $_REQUEST['minutes'];
        // $save = $_REQUEST['saves'];
        // $goals = $_REQUEST['goals'];
        // $assist = $_REQUEST['assist'];

        $qry = "insert into piyush_modalf(gid,name,birthplace,image,dob,weight) values('$gid','$name','$birth','$file','$dob','$weight')";
        $result = mysqli_query($conn, $qry);

        if ($result) {

            echo "<script>alert('Data Inserted Successfuly!!')</script>";
            echo "<script>window.location='modalf.php'</script>";
        } else {
            echo "<script>alert('Data Insertion Error!!!')</script>";
            echo "<script>window.location='modalf.php'</script>";
        }
    }
}

//EDIT Query for Full Info
if (isset($_GET['edits_id'])) {

    $id = $_GET['edits_id'];
    $edit_qry = "select * from piyush_modalf where id='$id'";
    $get_Data = mysqli_query($conn, $edit_qry);
    $info = mysqli_fetch_array($get_Data);
}

if (isset($_REQUEST['info_update'])) {

    $file = uniqid() . $_FILES['image']['name'];
    $path = "../assets/uploads/" . $file;
    $upload = move_uploaded_file($_FILES['image']['tmp_name'], $path);

    if ($upload) {

        $id = $_GET['edits_id'];
        $gid = uniqid();
        $name = $_REQUEST['name'];
        $birth = $_REQUEST['birthplace'];
        $dob = $_REQUEST['DOB'];
        $weight = $_REQUEST['weight'];
        // $match = $_REQUEST['match'];
        // $minute = $_REQUEST['minutes'];
        // $save = $_REQUEST['saves'];
        // $goals = $_REQUEST['goals'];
        // $assist = $_REQUEST['assist'];

        $qry = "update piyush_modalf set name='$name',image='$file', birthplace='$birth',dob='$dob',weight=' $weight' where id='$id'";
        $update_qry = mysqli_query($conn, $qry);

        if ($update_qry) {
            echo "<script>alert('Data Updated Successfuly!!')</script>";
            echo "<script>window.location='info.php'</script>";
        } else {
            echo "<script>alert('Updation Error!!!')</script>";
            echo "<script>window.location='info.php'</script>";
        }
    } else {
        echo "<script>alert('file not uploaded')</script>";
        echo "<script>window.location='modalf.php'</script>";
    }
}

//Delete query for Full Info
if (isset($_GET['del_id'])) {

    $id = $_GET['del_id'];
    $del_qry = "update piyush_modalf set status =2 where id='$id'";
    $update_qry = mysqli_query($conn, $del_qry);

    if ($update_qry) {
        echo "<script>alert('Data Deleted!!')</script>";
        echo "<script>window.location='info.php'</script>";
    } else {

        echo "<scrript>alert('Error!!')</script>";
        echo "<script>window.location='info.php'</script>";
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
    <nav class="navbar navbar-expand-lg bg-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">View Data Tables</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav text-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="player.php">Player Table</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="info.php">Player Full Info Table</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--=============================== NAVBAR END========================-->

    <!--==============================Main Part========================================-->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <!--==============================Male Cards==================================-->
                <div class="col-12 col-lg-4 col-md-12 col-sm-12">
                    <!--==============================Logo Form===================================-->
                    <h2 class="fs-5 pt-4 pb-2 text-center">Insert/Update Female Team Card</h2>
                    <form method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="names" class="form-label">Name</label>
                            <input type="text" value="<?= @$player['names']; ?>" class="form-control" name="names"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="positions" class="form-label">Player Position</label>
                            <input type="text" value="<?= @$player['positions']; ?>" class="form-control"
                                name="positions" required>
                        </div>
                        <div class="mb-3">
                            <label for="image_file" class="form-label">Image</label>
                            <input type="file" class="form-control" name="image" required>
                        </div>
                        <?php if (isset($_GET['edit_id'])) { ?>
                            <button type="submit" name="card_update" class="btn btn-primary text-center">Update</button>
                        <?php } else { ?>
                            <button type="submit" name="card_submit" class="btn btn-primary text-center">Insert</button>
                        <?php } ?>
                    </form>
                    <!--==============================Logo Form end===============================-->
                </div>
                <!--==============================Male Cards End==============================-->

                <!--==============================Modal Info==================================-->
                <div class="col-12 col-lg-6 col-md-12 col-sm-12">
                    <!--==============================Modal Info Form==========================-->
                    <h2 class="fs-5 pt-4 text-center">Insert/Update Full Player Details</h2>
                    <form method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" value="<?= @$info['name']; ?>" class="form-control" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="image_file" class="form-label">Image</label>
                            <input type="file" class="form-control" name="image" required>
                        </div>
                        <div class="mb-3">
                            <label for="birthplace" class="form-label">Birthplace</label>
                            <input type="text" value="<?= @$info['birthplace']; ?>" class="form-control"
                                name="birthplace" required>
                        </div>
                        <div class="mb-3">
                            <label for="DOB" class="form-label">Date Of Birth</label>
                            <input type="date" class="form-control" value="<?= @$info['dob']; ?>" name="DOB" required>
                        </div>
                        <div class="mb-3">
                            <label for="weight" class="form-label">Weight</label>
                            <input type="text" class="form-control" value="<?= @$info['weight']; ?>" name="weight"
                                required></input>
                        </div>
                        <?php if (isset($_GET['edits_id'])) { ?>
                            <button type="submit" name="info_update" class="btn btn-primary text-center">Update</button>
                        <?php } else { ?>
                            <button type="submit" name="info_submit" class="btn btn-primary text-center">Insert</button>
                        <?php } ?>
                    </form>

                </div>
                <!--==============================Modal Info End==============================-->
            </div>
        </div>
    </div>
    <!--==============================Main Part End===============================-->

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