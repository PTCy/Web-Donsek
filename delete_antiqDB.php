<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php 
    include('connection.php'); 

    $Antiques360 = $_GET['Antiques360'];
    $sql = "DELETE FROM antiques360 WHERE Antiques360 = '$Antiques360' ";
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
            header("refresh:2; url=upload_Antiques.php");

    }else{
        echo "Error : " . $sql . "<br>" . mysqli_error($conn);
        echo " <script>alert('Can not delete data');</script>";
    }
    mysqli_close($conn);
?>
