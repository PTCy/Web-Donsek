<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
include('connection.php');

$Antiques360  = $_POST['Antiques360'];
$name = $_POST['name'];
$drescription = $_POST['drescription'];

$sql = "UPDATE antiques360 set  name = '$name',  drescription = '$drescription' WHERE Antiques360 = '$Antiques360' ";
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
            header("refresh:2; url=upload_Antiques.php");
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
            header("refresh:2; url=edit_Antiq.php");
    }
    mysqli_close($conn);

    
?>