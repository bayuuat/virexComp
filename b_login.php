<?php
session_start();
include 'config.php';
$email = $_POST['email'];
$password = $_POST['password'];

$queryPass = mysqli_query($connect, "SELECT * FROM db_user2 WHERE email='$email'");
$queryPass2 = mysqli_query($connect, "SELECT * FROM db_tim WHERE email='$email'");
if (mysqli_num_rows($queryPass) == 1) {
	$row = mysqli_fetch_assoc($queryPass);
	$hashedPass = $row['password'];
	if (password_verify($password, $hashedPass)) {
		$_SESSION['email'] = $email;
		header("location:f_homeuser.php");
	} else {
		header("location:f_login.php?pesan=gagal");
	}
} else if (mysqli_num_rows($queryPass2) == 1) {
	$row2 = mysqli_fetch_assoc($queryPass2);
	$hashedPas2 = $row2['password'];
	if (password_verify($password, $hashedPas2)) {
		$_SESSION['email'] = $email;
		header("location:f_home.php");
	} else {
		header("location:f_login.php?pesan=gagal");
	}
} else {
	header("location:f_login.php?pesan=gagal");
}
