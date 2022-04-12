<?php 
include 'config.php';

session_start();
echo $_SESSION['email'];

$email=$_POST['email'];
$gender=$_POST['gender'];


mysqli_query($connect, "UPDATE db_user2 SET gender='$gender' WHERE email='$email'");
header("location:f_home.php");

?>
