<?php
include('connection.php');
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}

if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    $deletestmt = $conn->query("DELETE FROM tbl_admin WHERE admin_id = $delete_id");
    $deletestmt->close();
    
    if ($deletestmt) {
        echo "<script>alert('Data has been deleted successfully');</script>";
        $_SESSION['success'] = "Data has been deleted succesfully";
        // header("refresh:1; url=index.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage person Page</title>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="boostrap/boostrap.css">
    <link rel="stylesheet" href="mange_per.css">
    <link rel="stylesheet" href="style.css">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

<!-- <script language="Javascript">
    function Del(mypage) {
        var agree = confirm("ต้องการลบข้อมูลใช่หรือไม่");
        if (agree) {
            window.location = mypage;
        }
    }
</script> -->

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
                <p class="pt-5 fw-bold text-head ">Manage Personnels</p>
            </div>
        </div>
    </div>

    <!-- ------------------------------------End--------------------------------------- -->


    <!-- logged in user information -->

    <div class=" container  pt-2">
        <a href="add.php"><button class="btn btn-primary mb-2 fs-5 fw-bold btn-Add">Add +</button></a>

        <table class="table table-striped table-hover" method='post'>
            <thead>
                <tr>
                    <th>admin_id</th>
                    <th>username</th>
                    <th>email</th>
                    <th>password</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <!-- <th>img</th> -->
                </tr>
            </thead>

            <?php

            $sql = "SELECT * FROM tbl_admin";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tbody>
                    <tr>
                        <td><?= $row["admin_id"] ?></td>
                        <td><?= $row["username"] ?></td>
                        <td><?= $row["email"] ?></td>
                        <td><?= $row["password"] ?></td>
                        <td><a href="edit_per.php?admin_id=<?= $row['admin_id'] ?>"><button class="btn  btn-primary mb-2 fw-bold btn-Edit">Edit</button></a></td>
                        <td>
                            <a data-admin_id="<?= $row['admin_id']; ?>" href="?delete=<?= $row['admin_id']; ?>" class="btn btn-danger delete-btn">Delete</a>
                        </td>
                    </tr>
                </tbody>
            <?php
            }
            mysqli_close($conn);
            ?>
        </table>

    </div>



    <!-- ------------------------------------------------------- -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(".delete-btn").click(function(e) {
            var admin_id = $(this).data('admin_id');
            e.preventDefault();
            deleteConfirm(admin_id);
        })

        function deleteConfirm(admin_id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "It will be deleted permanently!",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                                url: 'manage_per.php',
                                type: 'GET',
                                data: 'delete=' + admin_id,
                            })
                            .done(function() {
                                Swal.fire({
                                    title: 'success',
                                    text: 'Data deleted successfully!',
                                    icon: 'success',
                                }).then(() => {
                                    document.location.href = 'manage_per.php';
                                })
                            })
                            .fail(function() {
                                Swal.fire('Oops...', 'Something went wrong with ajax !', 'error')
                                window.location.reload();
                            });
                    });
                },
            });
        }
    </script>


    <!--js-->
    <script src="js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>