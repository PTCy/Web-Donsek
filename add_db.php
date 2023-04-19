<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
session_start();
include('connection.php');

$errors = array();

//ตรวจว่ากรอกครบไหม
if (isset($_POST['reg_user'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

    if (empty($username)) {
        array_push($errors, "Username is required");
        $_SESSION['error'] = "Username is required";
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
        $_SESSION['error'] = "Email is required";
    }
    if (empty($password_1)) {
        array_push($errors, "Password is required");
        $_SESSION['error'] = "Password is required";
    }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
        $_SESSION['error'] = "The two passwords do not match";
    }

    //เช็คว่าซ้ำไหม
    $user_check_query = "SELECT * FROM tbl_admin WHERE username = '$username' OR email = '$email' ";
    $query = mysqli_query($conn, $user_check_query);
    $result = mysqli_fetch_assoc($query);

    if ($result) { // if user exists
        if ($result['username'] === $username) {
            array_push($errors, "Username already exists");
            $_SESSION['error'] = "Username already exists";
        }
        if ($result['email'] === $email) {
            array_push($errors, "Email already exists");
            $_SESSION['error'] = "Email already exists";
        }
    }

    //ไม่ซ้ำบันทึกลง DB
    if (count($errors) == 0) {
        $password = md5($password_1);

        $sql = "INSERT INTO tbl_admin (username, email, password) VALUES ('$username', '$email', '$password')";
        mysqli_query($conn, $sql);

        echo "<script>
                $(document).ready(function(){
                    Swal.fire({
                        title: 'success',
                        text: 'Add Officer successfully !',
                        icon: 'success',
                        // timer: 5000,
                        showConfirmButton: false,

                    });
                });
            </script>";
        header("refresh:2; url=manage_per.php");

        $_SESSION['success'] = "Add Offcer successfully";

    } else {
        echo "<script>
                $(document).ready(function(){
                    Swal.fire({
                        title: 'Orror!',
                        text: 'An error occurred !',
                        icon: 'error',
                        timer: 5000,
                        showConfirmButton: true,
                    });
                });
            </script>";

        header("location: add.php");
    }
}

?>