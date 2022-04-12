<?php
include 'config.php';

$email = $_POST['email'];
$nama = $_POST['nama'];
$role = $_POST['role'];
$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

if ($role == 'Pengunjung') {
    mysqli_query($connect, "INSERT INTO db_user2 (email, nama, role, password, gender) VALUES('$email', '$nama','$role','$hashed_password', '0')");
} else if ($role == 'Ekshibitor') {
    mysqli_query($connect, "INSERT INTO db_tim (email, nama_tim, role, password) VALUES('$email', '$nama','$role','$hashed_password')");
}

header("location:index.php");
