<?php
session_start();
include('connection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- <link rel="stylesheet" href="boostrap/style.css"> -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="boostrap/boostrap.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="Userpage/home.css">

</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg " style="background-color: #282120; " id="navbar">
        <div class="container-fluid px-3">
            <a class="navbar-brand textLogo" href="index.php">Don Sak</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="bi bi-list" style="font-size: 30px;color:#fff;"></i></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item navMenu">
                        <a class="nav-link linkMenu" aria-current="page" href="Userpage/index.php">Home</a>
                    </li>

                    <li class="nav-item dropdown navMenu ">
                        <a class="nav-link  linkMenu dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            VR TOUR
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="UserPage/VR_attrachome.php">VR Attraction</a></li>
                            <li><a class="dropdown-item" href="UserPage/VR_antiqhome.php">VR Antiquities</a></li>

                        </ul>
                    </li>

                    <li class="nav-item dropdown navMenu">
                        <a class="nav-link linkMenu dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            360 TOUR
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="UserPage/360attraction.php">360 Antiquities</a></li>
                            <li><a class="dropdown-item" href="UserPage/360antiq.php">360 Attraction</a></li>
                        </ul>
                    </li>


                </ul>
            </div>
        </div>
    </nav>

    <form action="login_db.php" method="post">
        <div class="row g-0 bg-corlor">

            <div class=" col-md-8  image-container"></div>

            <div class="col-md-4  my-auto mx-auto  ">
                <div class="text-center w-75 mx-auto m-3 p-3">
                    <h1 class="fw-bold teg" style="font-size: 60px; color: #282120;letter-spacing:5px">LOGIN</h1>
                </div>
                <div class="w-75 mx-auto mb-3">
                    <?php if (isset($_SESSION['error'])) : ?>
                        <div class="error fw-bold text-center">
                            <p class="pt-3">
                                <?php
                                echo $_SESSION['error'];
                                unset($_SESSION['error']);
                                ?>
                            </p>
                        </div>
                    <?php endif ?>
                </div>
                <div class="w-75 mb-2 mx-auto">
                    <label for="username" class="form-label fw-bold" style="font-size: 20px; color: #282120;">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="w-75 mb-3 mx-auto">
                    <label for="password" class="form-label fw-bold" style="font-size: 20px; color: #282120;">Password</label>
                    <input type="password" name="password" id="pw" class="form-control">
                    <div style="margin-top:.5rem"><input type="checkbox" onclick="togglePassword()"> แสดงรหัสผ่าน</div>
                </div>
                <script>
                    function togglePassword() {
                        var pw = document.getElementById("pw");
                        (pw.type === "password") ? pw.type = "text": pw.type = "password";
                    }
                </script>
                <div class="text-center">
                    <a class="" href="manage_per.php"><button type="submit" name="login_user" class="px-3 btn btn-login fw-bold bt_login">LOGIN</button></a>
                </div>
            </div>
        </div>
    </form>

    <!-- js -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- js 360- -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r105/three.min.js" integrity="sha512-uWKImujbh9CwNa8Eey5s8vlHDB4o1HhrVszkympkm5ciYTnUEQv3t4QHU02CUqPtdKTg62FsHo12x63q6u0wmg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/panolens.min.js"></script>
    <script src="js/login.js"></script>
</body>

</html>