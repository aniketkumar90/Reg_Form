<?php
include_once 'config.php';

$email = mysqli_real_escape_string($con, $_POST['lemail']);
$password = mysqli_real_escape_string($con, $_POST['lpassword']);

$sqlEmail = "SELECT * FROM login_details WHERE email = '$email'";
$sqlPass = "SELECT * FROM login_details WHERE password = '$password'";
$sqlBoth  = "SELECT * FROM login_details WHERE email = '$email' AND password = '$password'";

$resultEmail = mysqli_query($con, $sqlEmail);
$resultPass  = mysqli_query($con, $sqlPass);
$resultBoth  = mysqli_query($con, $sqlBoth);

if (mysqli_num_rows($resultBoth) > 0) {

    header("Location: http://localhost/Reg_Form/index.php");
    exit;
} else {

    $emailErr = "";
    $passErr = "";

    if (mysqli_num_rows($resultEmail) == 0) {
        $emailErr = "Email not match!";
    }

    if (mysqli_num_rows($resultPass) == 0) {
        $passErr = "Password not match!";
    }


    header("Location: http://localhost/Reg_Form/login.php?emailErr=" . urlencode($emailErr) . "&passErr=" . urlencode($passErr));
    exit;
}

mysqli_close($con);
?>
