<?php
require_once('connection.php');

$sql = "select * from touristattractions360";

//limit number of items "select * from products limit 3";
//Manage pagination 
//echo $sql;

//4. Send sql to MySQl, get result back
$result = $con->query($sql);


//5. Count result
$count_row = mysqli_num_rows($result);
// echo $count_row;

$con->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="boostrap/boostrap.css">
</head>

<body>

    <div class="container">
        <div class="display-3 text-center">Manage TouristAttractions 360</div>
        <a href="add_tourist360.php" class="btn btn-success mb-3">Add+</a>
        <table class="table table-striped table-bordered table-hover">
            <?php
            // $select_stmt = $conn->prepare("SELECT * FROM touristattractions360");
            // $select_stmt->execute();

            // while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <div class="row">
                <?php
                //6.Work with data
                if ($count_row != 0) {
                    while ($rs = $result->fetch_assoc()) {
                        echo"
                       <div class='col-6'>
                        <p>
                        <img style='height: 14rem; width: 100%;' src='images/" . $rs['url'] . "'
                        </p>
                       </div>
                       <div class='col-6'>
                        <p >name: " . $rs['name'] . "</p>
                       </div>";
           
                    }
                }
                ?>

            </div>

            <!-- echo "
                            <div class='col-6'>
                                <img  src='images/" . $rs['url'] . "'
                            </div>
                            <div class='col-6'>
                                <h5>name: " . $rs['name'] . "</h5>
                        </div>"; -->

                        
            <!-- <thead>
            <tr>
                <th>name</th>
                <th>name</th>
                <th>url</th>
                <th>description</th>
                <th>location</th>

            </tr>
        </thead> -->



        </table>
    </div>



    <script src="js/slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/boostrap.js"></script>
</body>

</html>