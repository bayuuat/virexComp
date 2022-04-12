<?php
session_start();
include 'config.php';
$update_materi = "";
$update_poster = "";
$update_video_demo = "";
$update_video_profile = "";
$email = $_SESSION['email'];

if (!empty($_FILES["materi"]["name"])) {
    $path = $_FILES['materi']['name'];
    $ext = pathinfo($path, PATHINFO_EXTENSION);
    $nama_file = 'materi - ' . $email . '.' . $ext;
    if (!is_dir("file/assets/" . $email . "/")) {
        mkdir("file/assets/" . $email . "/");
    }
    move_uploaded_file($_FILES["materi"]["tmp_name"], "file/assets/" . $email . '/' . $nama_file);

    $update_materi = "materi='$nama_file'";
    $run = mysqli_query($connect, "UPDATE db_tim SET $update_materi WHERE email='$email'") or die(mysqli_error($connect));
    if ($run) {
        header("location:f_submit.php");
    } else {
        header("location:f_home.php");
    }
}
if (!empty($_FILES["poster"]["name"])) {
    $path = $_FILES['poster']['name'];
    $ext = pathinfo($path, PATHINFO_EXTENSION);
    $nama_file = 'poster - ' . $email . '.' . $ext;
    if (!is_dir("file/assets/" . $email . "/")) {
        mkdir("file/assets/" . $email . "/");
    }
    move_uploaded_file($_FILES["poster"]["tmp_name"], "file/assets/" . $nama_file);

    $update_poster = "poster='$nama_file'";
    $run = mysqli_query($connect, "UPDATE db_tim SET $update_poster WHERE email='$email'") or die(mysqli_error($connect));
    if ($run) {
        header("location:f_submit.php");
    } else {
        header("location:f_home.php");
    }
}
if (!empty($_FILES["video_demo"]["name"])) {
    $path = $_FILES['video_demo']['name'];
    $ext = pathinfo($path, PATHINFO_EXTENSION);
    $nama_file = 'video_demo - ' . $email . '.' . $ext;
    if (!is_dir("file/assets/" . $email . "/")) {
        mkdir("file/assets/" . $email . "/");
    }
    move_uploaded_file($_FILES["video_demo"]["tmp_name"], "file/assets/" . $nama_file);

    $update_video_demo = "video_demo='$nama_file'";
    $run = mysqli_query($connect, "UPDATE db_tim SET $update_video_demo WHERE email='$email'") or die(mysqli_error($connect));
    if ($run) {
        header("location:f_submit.php");
    } else {
        header("location:f_home.php");
    }
}
if (!empty($_FILES["video_profile"]["name"])) {
    $path = $_FILES['video_profile']['name'];
    $ext = pathinfo($path, PATHINFO_EXTENSION);
    $nama_file = 'video_profile - ' . $email . '.' . $ext;
    if (!is_dir("file/assets/" . $email . "/")) {
        mkdir("file/assets/" . $email . "/");
    }
    move_uploaded_file($_FILES["file"]["tmp_name"], "file/assets/" . $nama_file);

    $update_video_profile = "video_profile='$nama_file'";
    $run = mysqli_query($connect, "UPDATE db_tim SET $update_video_profile WHERE email='$email'") or die(mysqli_error($connect));
    if ($run) {
        header("location:f_submit.php");
    } else {
        header("location:f_home.php");
    }
}
header("location:f_submit.php?pesan=gagal.php");
