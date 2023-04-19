<?php
    $conn = mysqli_connect("localhost", "root", "", "db_admin");
    $sql = " SELECT * FROM tbl_admin ";
    $q = mysqli_query( $conn, $sql );
    while( $f = mysqli_fetch_assoc( $q ) ) {
        echo "<img src='".$f['img']."' /><br/>";
    }
    mysqli_close( $conn );
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>






</body>

</html>