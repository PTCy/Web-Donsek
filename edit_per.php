<?php
include('connection.php');
$admin_id = $_GET['admin_id'];
$sql = "SELECT * FROM tbl_admin WHERE admin_id = '$admin_id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- <link rel="stylesheet" href="boostrap/style.css"> -->
    <link rel="stylesheet" href="boostrap/boostrap.css">
</head>



<style>
    /* ----font--------- */
    @import url('https://fonts.googleapis.com/css2?family=Pridi:wght@300&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Kodchasan:wght@400;500;700&display=swap');
    /* --------icon------------- */
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css");



    body {
        font-family: 'Kodchasan', sans-serif;
        color: #282120;
    }

    .bg-main {
        background-image: url("images/IMG/bgadd.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 100vh;
    }

    .text-head {
        font-size: 45px;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .bd-all {
        backdrop-filter: blur(10px);
        background-color: rgba(255, 255, 255, 0.4);

    }

    .rounded- {
        border-radius: 15px;
    }

    .ft-text {
        font-weight: bold;
        font-size: 16px;
        letter-spacing: 1px;
    }

    .btnSubmit {
        color: #fff;
        background-color: #001D6E;
        border: none;
    }

    .btnSubmit:hover {
        color: #fff;
        background-color: #1363DF;
        transform: translateY(1px);
        box-shadow: 3px 3px rgba(0, 0, 0, 0.3);
        border: none;
    }

    .btnCancel {
        color: #fff;
        background-color: #B20600;
        border: none;
    }

    .btnCancel:hover {
        color: #fff;
        background-color: #FF5F00;
        transform: translateY(1px);
        box-shadow: 3px 3px rgba(0, 0, 0, 0.3);
        border: none;
    }

    /* ขนาดเล็ก */
    @media (max-width:1000px) {
        .text-head {
            font-size: 30px;
        }
    }

    @media (max-width:500px) {
        .text-head {
            font-size: 25px;
        }
    }

    /* ขนาดเล็ก */
</style>

<body>
    <div class="bg-main ">
        <form action="edit_perdb.php" method="POST">
            <div class="col-sm-12 col-md-12  container pt-5">
                <div class="border w-75  mx-auto mb-3 rounded- bd-all p-3">
                    <h2 class="text-center pb-3 text-head">Edit Officer</h2>

                    <div class="text-center w-100 mx-auto mb-2">
                        <?php include('errors.php'); ?>
                        <?php if (isset($_SESSION['error'])) : ?>
                            <div class="error">
                                <h3>
                                    <?php
                                    echo $_SESSION['error'];
                                    unset($_SESSION['error']);
                                    ?>
                                </h3>
                            </div>
                        <?php endif ?>
                    </div>
                    <div class="w-100 mb-2 mx-auto">
                        <label for="admin_id" class="form-label ft-text">Admin_id</label>
                        <input type="admin_id" readonly class="form-control" name="admin_id" value=<?= $row['admin_id'] ?>>
                    </div>
                    <div class="w-100 mb-2 mx-auto">
                        <label for="username" class="form-label ft-text">Username</label>
                        <input type="username" name="username" class="form-control" value=<?= $row['username'] ?>>
                    </div>
                    <div class="w-100 mb-2 mx-auto">
                        <label for="email" class="form-label ft-text">Email</label>
                        <input type="email" name="email" class="form-control" value=<?= $row['email'] ?>>
                    </div>
                    <div class="w-100 mb-2 mx-auto">
                        <label for="password_1" class="form-label ft-text">Password</label>
                        <input type="password" name="password" class="form-control" value=<?= $row['password'] ?>>
                    </div>
                    <div class="w-100 mb-2 my-3 mx-auto text-center">
                        <button type="Update" class="btn btnSubmit me-4 fw-bold">Update</button>
                        <a href="manage_per.php"><button type="button" class="btn btnCancel fw-bold">Cancel</button></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>