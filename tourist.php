<?php
include('connection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="tour.css">
    <link rel="stylesheet" href="boostrap/boostrap.css">
    <title>Document</title>
</head>

<body>

    <div class="image-container"></div>

    <div class="text-center " style="background-color:#E1E2E7;height: 15vh;"><a href="UserPage/360antiq.php" class="px-5 py-2 btn-back">BACK</a></div>
    <!-- ---js----- -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r105/three.min.js" integrity="sha512-uWKImujbh9CwNa8Eey5s8vlHDB4o1HhrVszkympkm5ciYTnUEQv3t4QHU02CUqPtdKTg62FsHo12x63q6u0wmg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/panolens.min.js"></script>
    <!-- <script src="main.js"></script> -->

    <?php
    $file360url = $_GET['file360url'];
    ?>
    <script>
        const panoramaImage = new PANOLENS.ImagePanorama("images/<?php echo $file360url; ?>");
        const imageContainer = document.querySelector(".image-container");

        const viewer = new PANOLENS.Viewer({
            container: imageContainer,
            autoRotate: true, //ภาพเคลื่นauto
            autoRotateSpeed: 0.3, //เวลา
        });
        viewer.add(panoramaImage);
    </script>


</body>

</html>