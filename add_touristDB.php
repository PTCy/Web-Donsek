<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
include('connection.php');
    
if (isset($_POST) && !empty($_POST)) {
    $name = $_POST['name'];
    $description = $_POST['description'];

    if (isset($_FILES['url']['name']) && !empty($_FILES['url']['name'])) {
        $extension = array('jpeg', 'jpg', 'png'); 
        $target = 'images/'; 
        $filename = $_FILES['url']['name'];
        $filetmp = $_FILES['url']['tmp_name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if (in_array($ext, $extension)) {
            if (!file_exists($target.$filename)) {
                if (move_uploaded_file($filetmp, $target . $filename)) {
                    $filename = $_FILES['url']['name'];
                } else {
                    echo 'no folder';
                }
            } else {
                $newfilename = time() . $filename;
                if (move_uploaded_file($filetmp, $target . $newfilename)) {
                    $filename = $newfilename;
                } else {
                    echo 'no folder';
                }
            }
        } else {
            echo 'no';
        }
    }else{
        $filename = '';
    }

    $sql = "INSERT INTO touristattractions360 (name,url,description)
                        VALUES ('$name', '$filename', '$description')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                $(document).ready(function(){
                    Swal.fire({
                        title: 'success',
                        text: 'Created successfully !',
                        icon: 'success',
                        timer: 2000,
                        showConfirmButton: false,
                    });
                });
            </script>";
            header("refresh:2; url=upload_attraction.php");

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo "<script>
                $(document).ready(function(){
                    Swal.fire({
                        title: 'Error',
                        text: 'Created Unsuccessfully !',
                        icon: 'error',
                        showConfirmButton: true,
                    });
                });
            </script>";
            header("refresh:2; url=upload_attraction.php");
    }
    mysqli_close($conn);
}

?>