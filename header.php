<?php
session_start();
include 'config.php';
if (isset($_SESSION['email']) == TRUE) {
    $getName = mysqli_query($connect, "SELECT * FROM db_tim WHERE email='$_SESSION[email]'");
    $getNamePeng = mysqli_query($connect, "SELECT * FROM db_user2 WHERE email='$_SESSION[email]'");
    $isExshib = (mysqli_num_rows($getName) == 1);
    $row = mysqli_fetch_assoc($getName);
    $rowPeng = mysqli_fetch_assoc($getNamePeng);
    $showName = $isExshib ? $row['nama_tim'] : $rowPeng['nama'];
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Virtual Exhibiton</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no,user-scalable=0" />
    <title>nodes.js - js connected nodes animation</title>
    <meta name="description" content="nodes.js is a nodes/particles animation useable for backgrounds">
    <meta name="keywords" content="nodes, animation, particlees, web, html5, canvas, backgorund">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <!-- <nodes.js embedding> -->
    <script type="text/javascript" src="js/nodes.js"></script>
    <script type="text/javascript">
        var nodesjs = new NodesJs({
            id: 'nodes',
            width: window.innerWidth,
            height: window.innerHeight,
            particleSize: 2,
            lineSize: 1,
            particleColor: [255, 255, 255, 0.3],
            lineColor: [255, 255, 255],
            backgroundFrom: [10, 25, 100],
            backgroundTo: [25, 50, 150],
            backgroundDuration: 4000,
            nobg: false,
            number: window.hasOwnProperty('orientation') ? 30 : 100,
            speed: 20
        });
    </script>
    <div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%;">
        <canvas id="nodes"></canvas>
    </div>
    <!-- </nodes.js embedding> -->
    <script type="text/javascript">
        window.onresize = function() {
            nodesjs.setWidth(window.innerWidth);
            nodesjs.setHeight(window.innerHeight);
        };
    </script>
    <!--navigation bar-->
    <?php
    if (isset($_SESSION['email']) == TRUE) { ?>
        <div class="brand clearfix">
            <a class="logo"><img src="img/logo.png" class="img-responsive" alt=""></a>
            <span class="menu-btn"><i class="fa fa-bars"></i></span>
            <ul class="ts-profile-nav mb-0">
                <li><a href="f_home.php">Home</a></li>
                <li class="ts-account">
                    <a href="#"><img src="img/gender-0.png" class="ts-avatar hidden-side" alt=""><?php echo $showName ?><i class="fa fa-angle-down hidden-side"></i></a>
                    <ul>
                        <li><a href="#">My Profile</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    <?php } elseif (isset($_SESSION['email']) == FALSE) { ?>
        <div class="brand clearfix">
            <a href="index.php" class="logo"><img src="img/logo.png" class="img-responsive" alt=""></a>
            <span class="menu-btn"><i class="fa fa-bars"></i></span>
            <ul class="ts-profile-nav mb-0">
                <li class="ts-account">
                    <a href="#"><img alt="">Menu<i class="fa fa-angle-down hidden-side"></i></a>
                    <ul>
                        <li><a href="f_register.php">Register</a></li>
                        <li><a href="f_login.php">Login</a></li>
                    </ul>
                </li>
        </div>
    <?php } ?>