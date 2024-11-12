<?php
include ('../connection/connection.php');
if (!isset($_SESSION['user_data'])) {
    header('location:login.php');
}


//Logo Insertion
if (isset($_REQUEST['logo_submit'])) {

    $file = uniqid() . $_FILES['image']['name'];
    $path = "../assets/uploads/" . $file;
    $upload = move_uploaded_file($_FILES['image']['tmp_name'], $path);

    if ($upload) {
        $gid = uniqid();
        $name = $_REQUEST['name'];
        $title = $_REQUEST['title'];

        $qry = "insert into piyush_logo(gid,name,image,title) values('$gid','$name','$file','$title')";
        $result = mysqli_query($conn, $qry);

        if ($result) {
            echo "<script>alert('Data Inserted Successfuly!!')</script>";
            echo "<script>window.location='history.php'</script>";
        } else {
            echo "<script>alert('Insertion Error!!!')</script>";
            echo "<script>window.location='history.php'</script>";
        }
    } else {
        echo "<script>alert('file not uploaded')</script>";
    }
}

//Trophy Card Insertion
if (isset($_REQUEST['trophy_submit'])) {

    $file = uniqid() . $_FILES['image']['name'];
    $path = "../assets/uploads/" . $file;
    $upload = move_uploaded_file($_FILES['image']['tmp_name'], $path);

    if ($upload) {
        $gid = uniqid();
        $name = $_REQUEST['names'];
        $title = $_REQUEST['titles'];
        $desc = $_REQUEST['description'];

        $qry = "insert into piyush_trophy(gid,names,image,titles,description) values('$gid','$name','$file','$title','$desc')";
        $result = mysqli_query($conn, $qry);

        if ($result) {
            echo "<script>alert('Data Inserted Successfuly!!')</script>";
            echo "<script>window.location='history.php'</script>";
        } else {
            echo "<script>alert('Insertion Error!!!')</script>";
            echo "<script>window.location='history.php'</script>";
        }
    } else {
        echo "<script>alert('file not uploaded')</script>";
    }
}

//History Description Insertion
if (isset($_REQUEST['history_submit'])) {


    $file = uniqid() . $_FILES['image']['name'];
    $path = "../assets/uploads/" . $file;
    $upload = move_uploaded_file($_FILES['image']['tmp_name'], $path);

    if ($upload) {

        $gid = uniqid();
        $name = $_REQUEST['name'];
        $desc = $_REQUEST['description'];

        $qry = "insert into piyush_history(gid,name,image,description) values('$gid','$name','$file','$desc')";
        $result = mysqli_query($conn, $qry);

        if ($result) {
            echo "<script>alert('Data Inserted Successfuly!!')</script>";
            echo "<script>window.location='history.php'</script>";
        } else {
            echo "<script>alert('Insertion Error!!!')</script>";
            echo "<script>window.location='history.php'</script>";
        }
    } else {
        echo "<script>alert('file not uploaded')</script>";
    }
}

//EDIT Query for logo
if (isset($_GET['edits_id'])) {

    $id = $_GET['edits_id'];
    $edit_qry = "select * from piyush_logo where id='$id'";
    $get_Data = mysqli_query($conn, $edit_qry);
    $logo = mysqli_fetch_array($get_Data);
}

if (isset($_REQUEST['logo_update'])) {

    $file = uniqid() . $_FILES['image']['name'];
    $path = "../assets/uploads/" . $file;
    $upload = move_uploaded_file($_FILES['image']['tmp_name'], $path);

    if ($upload) {

        $id = $_GET['edits_id'];
        $gid = uniqid();
        $name = $_REQUEST['name'];
        $title = $_REQUEST['title'];

        $qry = "update piyush_logo set name='$name',image='$file',title='$title' where id='$id'";
        $update_qry = mysqli_query($conn, $qry);

        if ($update_qry) {
            echo "<script>alert('Data Updated Successfuly!!')</script>";
            echo "<script>window.location='viewLogo.php'</script>";
        } else {
            echo "<script>alert('Updation Error!!!')</script>";
            echo "<script>window.location='history.php'</script>";
        }
    } else {
        echo "<script>alert('file not uploaded')</script>";
        echo "<script>window.location='history.php'</script>";
    }
}

//EDIT Query for trophy
if (isset($_GET['edit_id'])) {

    $id = $_GET['edit_id'];
    $edit_qry = "select * from piyush_trophy where id='$id'";
    $get_Data = mysqli_query($conn, $edit_qry);
    $trophy = mysqli_fetch_array($get_Data);
}

if (isset($_REQUEST['trophy_update'])) {

    $file = uniqid() . $_FILES['image']['name'];
    $path = "../assets/uploads/" . $file;
    $upload = move_uploaded_file($_FILES['image']['tmp_name'], $path);

    if ($upload) {

        $id = $_GET['edit_id'];
        $gid = uniqid();
        $name = $_REQUEST['names'];
        $title = $_REQUEST['titles'];
        $desc = $_REQUEST['description'];

        $qry = "update piyush_trophy set names='$name',image='$file',titles='$title',description='$desc' where id='$id'";
        $update_qry = mysqli_query($conn, $qry);

        if ($update_qry) {
            echo "<script>alert('Data Updated Successfuly!!')</script>";
            echo "<script>window.location='viewTrophy.php'</script>";
        } else {
            echo "<script>alert('Updation Error!!!')</script>";
            echo "<script>window.location='history.php'</script>";
        }
    } else {
        echo "<script>alert('file not uploaded')</script>";
        echo "<script>window.location='history.php'</script>";
    }
}

//EDIT Query for history
if (isset($_GET['edit_id'])) {

    $id = $_GET['edit_id'];
    $edit_qry = "select * from piyush_history where id='$id'";
    $get_Data = mysqli_query($conn, $edit_qry);
    $history = mysqli_fetch_array($get_Data);
}

if (isset($_REQUEST['history_update'])) {

    $file = uniqid() . $_FILES['image']['name'];
    $path = "../assets/uploads/" . $file;
    $upload = move_uploaded_file($_FILES['image']['tmp_name'], $path);

    if ($upload) {

        $id = $_GET['edit_id'];
        $gid = uniqid();
        $name = $_REQUEST['name'];
        $desc = $_REQUEST['description'];

        $qry = "update piyush_history set name='$name',image='$file',description='$desc' where id='$id'";
        $update_qry = mysqli_query($conn, $qry);

        if ($update_qry) {
            echo "<script>alert('Data Updated Successfuly!!')</script>";
            echo "<script>window.location='history.php'</script>";
        } else {
            echo "<script>alert('Updation Error!!!')</script>";
            echo "<script>window.location='viewHistory.php'</script>";
        }
    } else {
        echo "<script>alert('file not uploaded')</script>";
        echo "<script>window.location='history.php'</script>";
    }
}

//Delete query logo
if (isset($_GET['del_id'])) {

    $id = $_GET['del_id'];
    $del_qry = "update piyush_logo set status =2 where id='$id'";
    $update_qry = mysqli_query($conn, $del_qry);

    if ($update_qry) {
        echo "<script>alert('Data Deleted!!')</script>";
        echo "<script>window.location='viewLogo.php'</script>";
    } else {

        echo "<scrript>alert('Error!!')</script>";
        echo "<script>window.location='history.php'</script>";
    }
}

//Delete query trophy
if (isset($_GET['del_id'])) {

    $id = $_GET['del_id'];
    $del_qry = "update piyush_trophy set status =2 where id='$id'";
    $update_qry = mysqli_query($conn, $del_qry);

    if ($update_qry) {
        echo "<script>alert('Data Deleted!!')</script>";
        echo "<script>window.location='viewTrophy.php'</script>";
    } else {

        echo "<scrript>alert('Error!!')</script>";
        echo "<script>window.location='history.php'</script>";
    }
}

//Delete query history
if (isset($_GET['del_id'])) {

    $id = $_GET['del_id'];
    $del_qry = "update piyush_history set status =2 where id='$id'";
    $update_qry = mysqli_query($conn, $del_qry);

    if ($update_qry) {
        echo "<script>alert('Data Deleted!!')</script>";
        echo "<script>window.location='viewHistory.php'</script>";
    } else {

        echo "<scrript>alert('Error!!')</script>";
        echo "<script>window.location='history.php'</script>";
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
                                Modal
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
                        <a class="nav-link active" aria-current="page" href="viewLogo.php">LOGO Table</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="viewTrophy.php">TROPHY Table</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="viewHistory.php">History Table</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--=============================== NAVBAR END========================-->

    <!--==============================MAIN PART===================================-->
    <div class="contaier-fluid">

        <div class="container ">
            <div class="row">
                <div class="col-12 col-lg-4 col-md-12 col-sm-12">
                    <!--==============================Logo Form===================================-->
                    <h2 class="fs-5 pt-4 pb-2 text-center">Insert/Update Logo</h2>
                    <form method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" value="<?= @$logo['name']; ?>" class="form-control" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="image_file" class="form-label">Image</label>
                            <input type="file" class="form-control" name="image" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="<?= @$logo['title']; ?>"
                                required>
                        </div>
                        <?php if (isset($_GET['edit_id'])) { ?>
                            <button type="submit" name="logo_update" class="btn btn-primary text-center">Update</button>
                        <?php } else { ?>
                            <button type="submit" name="logo_submit" class="btn btn-primary text-center">Insert</button>
                        <?php } ?>
                    </form>
                    <!--==============================Logo Form end===============================-->
                </div>
                <div class="col-12 col-lg-4 col-md-12 col-sm-12">
                    <!--==============================Trophies Card Form==========================-->
                    <h2 class="fs-5 pt-4 pb-2 text-center">Insert/Update Trophies</h2>
                    <form method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" value="<?= @$trophy['names']; ?>" class="form-control" name="names"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="image_file" class="form-label">Image</label>
                            <input type="file" class="form-control" name="image" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Title</label>
                            <input type="text" class="form-control" value="<?= @$trophy['titles']; ?>" name="titles"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Description</label>
                            <textarea class="form-control" value="<?= @$trophy['description']; ?>" name="description"
                                onclick="clickMe()" id="editors" required></textarea>
                        </div>
                        <!-- <script>
                            ClassicEditor
                                .create(document.querySelector('#editors'))
                                .catch(error => {
                                    console.error(error);
                                });
                        </> -->
                        <?php if (isset($_GET['edit_id'])) { ?>
                            <button type="submit" name="trophy_update" class="btn btn-primary text-center">Update</button>
                        <?php } else { ?>
                            <button type="submit" name="trophy_submit" class="btn btn-primary text-center">Insert</button>
                        <?php } ?>
                    </form>
                    <!--==============================Trophies Card end===========================-->
                </div>
                <div class="col-12 col-lg-4 col-md-12 col-sm-12">
                    <!--===============================History desc Form==========================-->
                    <h2 class="fs-5 pt-4 pb-2 text-center">Insert/Update Football History</h2>
                    <form method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="year" class="form-label">Name</label>
                            <input type="text" value="<?= @$history['name']; ?>" class="form-control" name="name"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="image_file" class="form-label">Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Description</label>
                            <textarea class="form-control" value="<?= @$history['description']; ?>" id="myeditor"
                                name="description" onclick="Click()" required></textarea>
                        </div>
                        <?php if (isset($_GET['edit_id'])) { ?>
                            <button type="submit" name="history_update" class="btn btn-primary text-center">Update</button>
                        <?php } else { ?>
                            <button type="submit" name="history_submit" class="btn btn-primary text-center">Insert</button>
                        <?php } ?>
                    </form>

                    <!--===============================History desc end===========================-->
                </div>
            </div>

        </div>

    </div>
    <!--===============================MAIN PART END==============================-->

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
<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
<script>
    function Click() {
        CKEDITOR.replace('myeditor');
    };
</script>
<script>
    function clickMe() {
        CKEDITOR.replace('editors');
    };
</script>

</html>