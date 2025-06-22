<?php
include_once 'config.php';

$email = $_POST['lemail'];
$password = $_POST['lpassword'];

$email = mysqli_real_escape_string($con, $email);


$sql = "SELECT * FROM login_details WHERE email = '$email'AND password = '$password'";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) {
   header("Location: http://localhost/Reg_Form/index.php");
} else {
    echo "Email not found!";
}
mysqli_close($con);
?>
