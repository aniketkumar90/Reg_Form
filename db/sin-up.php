<?php
include_once 'config.php';

$name = $_POST['sName'];
$email = $_POST['semail'];
$password = $_POST['spassword'];
$password1 = $_POST['spassword1'];
if ($password !== $password1) {
    die("Passwords do not match.");
}
$sql = "INSERT INTO login_details(email, password) VALUES('{$email}', '{$password}');";
$result = mysqli_query($con, $sql) or die("Failed to insert into login_details");

$sql1 = "INSERT INTO user_details(email, name) VALUES('{$email}', '{$name}');";
$resul1t = mysqli_query($con, $sql1) or die("Failed to insert into user_details");

mysqli_close($con);
header("Location: http://localhost/Reg_Form/login.php");
    exit;
?>
