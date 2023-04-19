<?php

session_start();
include('connection.php');

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!--CSS-->
    <link rel="stylesheet" href="upload_att.css">
    <link rel="stylesheet" href="boostrap/tour.css">

    <style>
        /* ------button------------- */
        .btn-Add {
            color: #fff;
            background-color: #2B7A0B;
            border: none;
        }

        .btn-Add:hover {
            color: #fff;
            background-color: #5BB318;
            transform: translateY(1px);
            box-shadow: 3px 3px rgba(0, 0, 0, 0.3);
            border: none;
        }

        .btn-View {
            color: #fff;
            background-color: #282120;
            border: none;
        }

        .btn-View:hover {
            border: none;
            color: #fff;
            background-color: #523936;
            transform: translateY(1px);
            box-shadow: 3px 3px rgba(0, 0, 0, 0.3);
        }

        .btn-Edit {
            color: #fff;
            background-color: #541690;
            border: none;
        }

        .btn-Edit:hover {
            border: none;
            color: #fff;
            background-color: #AB46D2;
            transform: translateY(1px);
            box-shadow: 3px 3px rgba(0, 0, 0, 0.3);
        }

        .btn-Dlete {
            color: #fff;
            background-color: #EB5353;
            border: none;
        }

        .btn-Dlete:hover {
            border: none;
            color: #fff;
            background-color: #f87171;
            transform: translateY(1px);
            box-shadow: 3px 3px rgba(0, 0, 0, 0.3);
        }
    </style>


</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg" id="navbar" style="background-color: #282120;">
        <div class="container-fluid px-3">
            <a class="navbar-brand textLogo" href="#">Don Sak</a>

            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
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
                        <a href="UserPage/index.php"><button type="button" class="btn px-2 btMenu ">LOGOUT</button></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!--------------------------------------add tourist--------------------------------------- -->
    <div class="mt-5 py-auto">
        <div class="container  ">
            <div class=" text-center h2 " role="alert">
                <p class="pt-5 fw-bold text-head ">Tourist Attractions 360</p>
            </div>
        </div>
    </div>


    <!--------------------------------------Card show tourist--------------------------------------- -->

    <div class="container">
        <div class="container mt-3">
            <a href="add_tourist.php"><button class="btn btn-primary mb-2 fs-5 fw-bold btn-Add">Add +</button></a>
        </div>
        <div class="row">

            <?php
            $query = mysqli_query($conn, "SELECT * FROM touristattractions360");
            while ($result = mysqli_fetch_array($query)) {

            ?>
                <div class="container col-xl-6 col-sm-12 col-md-10 col-xxl-4">

                    <main class="grid h-100 ">
                        <article class="ms-5 p-2">

                            <img src="images/<?php echo $result['url']; ?>" class="card-img-top" alt="">

                            <h3 class="card-title mt-3 mb-2 fs-4 fw-bold"> <?= $result['name'] ?> </h3>
                            <p class="card-text "> <?= $result['description'] ?> </p>

                            

                            <a href="edit_tourist.php?Tourist360_id=<?= $result['Tourist360_id'] ?>"><button class="btn  btn-primary mb-2 fw-bold btn-Edit">Edit</button></a>



                            <a href="delete_touristDB.php?Tourist360_id=<?= $result['Tourist360_id'] ?>">
                                <button type="Delete" class="btn btn-primary mb-2 fw-bold btn-Dlete" onclick="return confirm('Want to Delete ?');">Delete</button>
                            </a>


                        </article>
                    </main>
                </div>

            <?php } ?>
        </div>
    </div>


    <!-- js -->
    <script src="js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- js 360- -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r105/three.min.js" integrity="sha512-uWKImujbh9CwNa8Eey5s8vlHDB4o1HhrVszkympkm5ciYTnUEQv3t4QHU02CUqPtdKTg62FsHo12x63q6u0wmg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/panolens.min.js"></script>

</body>

</html>