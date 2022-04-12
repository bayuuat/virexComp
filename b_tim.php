<?php
include 'config.php';

$tim   		= $_POST['tim'];
$judul   	= $_POST['judul'];
$ketua 		= $_POST['ketua'];
$anggota_1  = $_POST['anggota_1'];
$anggota_2  = $_POST['anggota_2'];
$anggota_3  = $_POST['anggota_3'];

mysqli_query($connect, "INSERT INTO db_tim2 VALUES('$tim','$judul', '$ketua','$anggota_1','$anggota_2','$anggota_3')");

header("location:f_home.php");
?>