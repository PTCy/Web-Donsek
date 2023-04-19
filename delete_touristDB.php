<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php 
    include('connection.php'); 

    $Tourist360_id = $_GET['Tourist360_id'];
    $sql = "DELETE FROM touristattractions360 WHERE Tourist360_id = '$Tourist360_id' ";
    if(mysqli_query($conn,$sql)){
        echo "<script>
                $(document).ready(function(){
                    Swal.fire({
                        title: 'success',
                        text: 'Delete Complete !',
                        icon: 'success',
                        timer: 3000,
                        showConfirmButton: false

                    });
                });
            </script>";
            header("refresh:2; url=upload_attraction.php");

    }else{
        echo "Error : " . $sql . "<br>" . mysqli_error($conn);
        echo " <script>alert('Can not delete data');</script>";
    }
    mysqli_close($conn);
?>
