<?php
include('connection.php');

$Tourist360_id = $_GET['Tourist360_id'];
$sql = "SELECT * FROM touristattractions360 WHERE Tourist360_id = '$Tourist360_id'";
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
        background-image: url("images/IMG/bgedit.jpg");
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
        <form action="edit_touristDB.php" method="post" enctype="multipart/form-data">
            <div class="col-sm-12 col-md-12  container pt-5  ">
                <div class="border w-75  mx-auto mb-3 rounded- bd-all p-3  ">
                    <h2 class="text-center pb-3 text-head">Edit Attractions 360</h2>

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
                    <div class="w-100 mb-3 mx-auto">
                        <label class="form-label ft-text">Tourist360_id</label>
                        <input type="Tourist360_id" readonly class="form-control" name="Tourist360_id" value=<?= $row['Tourist360_id'] ?> require>
                    </div>
                    <div class="w-100 mb-3 mx-auto">
                        <label class="form-label ft-text">Name</label>
                        <input type="name" class="form-control" name="name" value=<?= $row['name'] ?> require>
                    </div>
                    <div class="w-100 mb-3 mx-auto">
                        <label class="form-label ft-text">URL (ไฟล์ 360 องศา)</label>
                        <input type="file" name="url" class="form-control" value=<?= $row['url'] ?> require>
                    </div>
                    <div class="w-100 mb-3 mx-auto">
                        <label class="form-label ft-text">Description</label>
                        <input class="form-control" name="description" rows="3" value=<?= $row['description'] ?>></input>
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" name="Confirm" class="btn btnSubmit me-4 fw-bold">Confirm</button>
                        <a href="upload_Antiques.php"><button type="button" class="btn btnCancel fw-bold">Cancel</button></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>