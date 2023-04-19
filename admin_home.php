<?php
session_start();
include('connection.php');

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>


    <link rel="stylesheet" href="boostrap/boostrap.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="admin_home.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body>

    <!-- <div class="homeheader">
        <h2>Home Page</h2>
    </div> -->

    <div class="">
        <!--  notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <h3>
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>



    </div>

    <nav class="navbar fixed-top navbar-expand-lg" id="navbar">
        <div class="container-fluid px-3">
            <a class="navbar-brand textLogo" href="#">Don Sak</a>

            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="bi bi-list" style="font-size: 30px;color:#fff;"></i></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <div class="mx-auto "></div>

                <ul class="navbar-nav">

                    <li class="nav-item navMenu">
                        <a class="nav-link linkMenu" aria-current="page" href="admin_home.php">Home</a>
                    </li>
                    <li class="nav-item navMenu">
                        <a class="nav-link linkMenu" aria-current="page" href="upload_attraction.php">Manage Attractions 360</a>
                    </li>
                    <li class="nav-item navMenu">
                        <a class="nav-link linkMenu" aria-current="page" href="upload_Antiques.php">Manage Antiques 360</a>
                    </li>
                    <li class="nav-item navMenu">
                        <a class="nav-link linkMenu" aria-current="page" href="manage_per.php">Manage Personnel</a>
                    </li>

                    <li class="nav-item navMenu ">
                        <a href="UserPage/index.php"><button type="button" class="btn px-2 btMenu " onclick="return confirm('Want to log out ?');">LOGOUT</button></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- ------------------------------------End--------------------------------------- -->


    <!-- image BG -->
    <div class="bg d-flex"> </div>

    <!-- logged in user information -->
    <div class="mb-3  text-center  ps_lg end-0 ">
        <div class="log_name">
            <?php if (isset($_SESSION['username'])) : ?>
                <p><i class="bi bi-person-fill fs-4 me-2"></i> <strong><?php echo $_SESSION['username']; ?></strong></p>
            <?php endif ?>
        </div>
    </div>



    <div class="text-center textImage position-absolute top-50 start-50 translate-middle ">

        <div>
            <h2 class="t1"><i class="bi bi-geo-alt me-1" style="font-size: 45px;"></i>ประเทศไทย</h2>
            <h1 class="t2">อำเภอดอนสัก</h1>
            <h3 class="t3">สุราษฎร์ธานี</h3>
        </div>

    </div>


    <!-- ------------------------------------------------------- -->

    <?php
    echo '<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
                ';
    ?>


    <!--js-->
    <script src="js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>