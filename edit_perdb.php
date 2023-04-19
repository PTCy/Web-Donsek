<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
include('connection.php');
$admin_id = $_POST['admin_id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "UPDATE tbl_admin set  username = '$username', email = '$email', password = '$password' WHERE admin_id = '$admin_id' ";
    if(mysqli_query($conn,$sql)){
        echo "<script>
        $(document).ready(function(){
            Swal.fire({
                title: 'success',
                text: 'Update Complete!',
                icon: 'success',
                timer: 5000,
                showConfirmButton: false,

            });
        });
    </script>";
    header("refresh:2; url=manage_per.php");

    }else{
        echo "Error : " . $sql . "<br>" . mysqli_error($conn);
        echo "<script>
        $(document).ready(function(){
            Swal.fire({
                title: 'Error',
                text: 'Update Unsuccess!',
                icon: 'error',
                showConfirmButton: true,
            });
        });
    </script>";
    header("refresh:2; url=edit_per.php");

    }
    mysqli_close($conn);


    
?>