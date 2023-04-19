<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!--CSS-->
    <link rel="stylesheet" href="attraction.css">
    <link rel="stylesheet" href="../boostrap/tour.css">



</head>

<body>

    <nav class="navbar fixed-top navbar-expand-lg " id="navbar" style="background-color: #282120;">
        <div class="container-fluid px-3">
            <a class="navbar-brand textLogo" href="index.php">Don Sak</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="bi bi-list" style="font-size: 30px;color:#fff;"></i></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item navMenu">
                        <a class="nav-link linkMenu" aria-current="page" href="index.php">Home</a>
                    </li>

                    <li class="nav-item dropdown navMenu ">
                        <a class="nav-link  linkMenu dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            VR TOUR
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="VR_attrachome.php">VR Attraction</a></li>
                            <li><a class="dropdown-item" href="VR_antiqhome.php">VR Antiquities</a></li>

                        </ul>
                    </li>

                    <li class="nav-item dropdown navMenu">
                        <a class="nav-link linkMenu dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            360 TOUR
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="360attraction.php">360 Attraction</a></li>
                            <li><a class="dropdown-item" href="360antiq.php">360 Antiquities</a></li>

                        </ul>
                    </li>

                    <li class="nav-item pe-2">
                        <a href="../login.php"><button type="button" class="btn mt-1 px-4 btMenu ">LOGIN</button></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!--------------------------------------add tourist--------------------------------------- -->
    <div class="mt-5 py-auto">
        <div class="container  ">
            <div class=" text-center h2 " role="alert">
                <p class="pt-5 fw-bold text-head ">Attractions VR</p>
            </div>
        </div>
    </div>

    <!--------------------------------------Card show tourist--------------------------------------- -->

    <div class="container">
        <div class="row">

            <div class="container col-xl-6 col-sm-12 col-md-10 col-xxl-4">
                <iframe width="100%" height="640" style="width: 100%; height: 50vh; border: none; max-width: 100%;" allow="xr-spatial-tracking; vr; gyroscope; accelerometer; fullscreen; autoplay; xr" scrolling="no" allowfullscreen="true" frameborder="0" src="https://webobook.com/public/63392e456485c94cb50c57a2,en?ap=true&si=true&sm=false&sp=true&sfr=false&sl=false&sop=false&" allowvr="yes"></iframe>
            </div>


            <div class="container col-xl-6 col-sm-12 col-md-10 col-xxl-4">
                <iframe width="100%" height="640" style="width: 100%; height: 50vh; border: none; max-width: 100%;" allow="xr-spatial-tracking; vr; gyroscope; accelerometer; fullscreen; autoplay; xr" scrolling="no" allowfullscreen="true" frameborder="0" src="https://webobook.com/public/63393acc0e07fc6a58605d92,en?ap=true&si=true&sm=false&sp=true&sfr=false&sl=false&sop=false&" allowvr="yes"></iframe>
            </div>

            <div class="container col-xl-6 col-sm-12 col-md-10 col-xxl-4">
                <iframe width="100%" height="640" style="width: 100%; height: 50vh; border: none; max-width: 100%;" allow="xr-spatial-tracking; vr; gyroscope; accelerometer; fullscreen; autoplay; xr" scrolling="no" allowfullscreen="true" frameborder="0" src="https://webobook.com/public/63393da057385b715450b9a2,en?ap=true&si=true&sm=false&sp=true&sfr=false&sl=false&sop=false&" allowvr="yes"></iframe>
            </div>


        </div>
    </div>


    <!-- <a href="edit_tourist.php?[Tourist360_id=<?= $result['[Tourist360_id'] ?>"><button class="btn btn-warning mb-2">Edit</button></a> -->

    <!-- <a href="delete_touristDB.php?[Tourist360_id=<?= $result['[Tourist360_id'] ?>"><button type="Delete" class="btn btn-danger mb-2">Delete</button></a> -->

    <!-- js -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- js 360- -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r105/three.min.js" integrity="sha512-uWKImujbh9CwNa8Eey5s8vlHDB4o1HhrVszkympkm5ciYTnUEQv3t4QHU02CUqPtdKTg62FsHo12x63q6u0wmg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/panolens.min.js"></script>

</body>

</html>