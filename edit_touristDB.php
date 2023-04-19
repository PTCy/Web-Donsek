<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
include('connection.php');

$Tourist360_id  = $_POST['Tourist360_id'];
$name = $_POST['name'];
$description = $_POST['description'];

$sql = "UPDATE touristattractions360 set  name = '$name',  description = '$description' WHERE Tourist360_id = '$Tourist360_id' ";
    if(mysqli_query($conn,$sql)){
        echo "<script>
                $(document).ready(function(){
                    Swal.fire({
                        title: 'success',
                        text: 'Update Complete !',
                        icon: 'success',
                        timer: 3000,
                        showConfirmButton: false

                    });
                });
            </script>";
            header("refresh:2; url=upload_attraction.php");
    }else{
        echo "Error : " . $sql . "<br>" . mysqli_error($conn);
        echo "<script>
                $(document).ready(function(){
                    Swal.fire({
                        title: 'Error!',
                        text: 'Update Unsuccess !',
                        icon: 'error',
                        showConfirmButton: true,
                    });
                });
            </script>";
            header("refresh:2; url=upload_attraction.php");
    }
    mysqli_close($conn);

    
?>