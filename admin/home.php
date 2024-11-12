<?php
include ('../connection/connection.php');
// Step 1
if (!isset($_SESSION['user_data'])) {
    header('location:login.php');
}


$get_Data = "select * from piyush_home where status= 1";
$card_data = mysqli_query($conn, $get_Data);


if (isset($_REQUEST['submit'])) {

    // echo "<pre>";
    // print_r($_FILES);
    // print_r($_REQUEST);
    // exit;

    $file = uniqid() . $_FILES['image']['name'];
    $path = "../assets/uploads/" . $file;
    $upload = move_uploaded_file($_FILES['image']['tmp_name'], $path);

    if ($upload) {

        $gid = uniqid();
        $name = $_REQUEST['name'];
        $short_desc = $_REQUEST['short_desc'];


        $qry = "insert into piyush_home(gid,name,image,short_desc) values('$gid','$name','$file','$short_desc')";
        $result = mysqli_query($conn, $qry);
        if ($result) {
            echo "<script>alert('Data Inserted Successfuly!!')</script>";
            echo "<script>window.location='home.php'</script>";
        } else {
            echo "<script>alert('Data Insertion Error:(!!')</script>";
            echo "<script>window.location='home.php'</script>";
        }
    } else {
        echo "<script>alert('Insertion Error!!')</script>";
        echo "<script>window.location='home.php'</script>";
    }
}

//Update query
if (isset($_GET['edit_id'])) {

    $id = $_GET['edit_id'];
    $edit_qry = "select * from piyush_home where id='$id'";
    $get_data = mysqli_query($conn, $edit_qry);
    $card_details = mysqli_fetch_array($get_data);

}

if (isset($_REQUEST['update'])) {

    $file = uniqid() . $_FILES['image']['name'];
    $path = "../assets/uploads/" . $file;
    $upload = move_uploaded_file($_FILES['image']['tmp_name'], $path);

    if ($upload) {
        $id = $_GET['edit_id'];
        $gid = uniqid();
        $name = $_REQUEST['name'];
        $short_desc = $_REQUEST['short_desc'];

        $qry = "update piyush_home set gid='$gid',name='$name',short_desc='$short_desc',image='$file' where id='$id'";
        $update_qry = mysqli_query($conn, $qry);

        if ($update_qry) {
            echo "<script>alert('Data Updated Successfuly!!')</script>";
            echo "<script>window.location='home.php'</script>";
        } else {
            echo "<script>alert('updation Error!!')</script>";
            echo "<script>window.location='home.php'</script>";
        }
    }

}

//Delete query
if (isset($_GET['del_id'])) {

    $id = $_GET['del_id'];
    $del_qry = "update piyush_home set status =2 where id='$id'";
    $update_qry = mysqli_query($conn, $del_qry);

    if ($update_qry) {
        echo "<script>alert('Data Deleted!!')</script>";
        echo "<script>window.location='home.php'</script>";
    } else {
        echo "<script>alert('Data Updation Error!!')</script>";
        echo "<script>window.location='home.php'</script>";
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

    <!--==============================Main part===================================-->
    <div class="container-fluid">
        <div class="container ">
            <h2 class="fs-5 pt-4 pb-2 text-center">Insert a new card</h2>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6 col-md-12 col-sm-12">
                    <form method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" value="<?= @$card_details['name']; ?>" class="form-control" name="name"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="image_file" class="form-label">Image</label>
                            <input type="file" class="form-control" name="image" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Short_desc</label>
                            <textarea class="form-control" value="<?= @$card_details['short_desc']; ?>"
                                name="short_desc" id="myeditor" onclick="Click()" required></textarea>
                        </div>
                        <?php if (isset($_GET['edit_id'])) { ?>
                            <button type="submit" name="update" class="btn btn-primary text-center">update</button>
                        <?php } else { ?>
                            <button type="submit" name="submit" class="btn btn-primary text-center">Submit</button>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-3 -mb-2">
        <div class="container">
            <div class="row ">
                <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                    <table class="table" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Short_description</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>


                        <tbody>
                            <?php $i = 1;
                            foreach ($card_data as $Data) { ?>
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
                                    <td><?php echo $Data['short_desc']; ?></td>
                                    <td>
                                        <div class="d-flex flex-row mb-3">
                                            <a href="?del_id=<?php echo $Data['id']; ?>">
                                                <div class="p-2 g-2 btn btn-danger">Delete</div>
                                            </a>
                                            <a href="?edit_id=<?php echo $Data['id']; ?>">
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
    <!--==============================Main part end===============================-->

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
<!--======================Table JS=======================================-->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>


<!--======================Internal JS=====================================-->
<script>
    let table = new DataTable('#myTable');
</script>

</html>