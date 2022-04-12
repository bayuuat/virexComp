<!DOCTYPE html>
<html>

<head>
  <?php 
    session_start();
    include 'cek.php';
    include 'config.php';
  ?>
  <meta charset="utf-8">
  <title>Virtual Exhibiton</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no,user-scalable=0"/>

  <title>nodes.js - js connected nodes animation</title>
  <meta name="description" content="nodes.js is a nodes/particles animation useable for backgrounds">
  <meta name="keywords" content="nodes, animation, particlees, web, html5, canvas, backgorund">
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
            number: window.hasOwnProperty('orientation') ? 30: 100,
            speed: 20
        });
    </script>
    <div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%;">
        <canvas id="nodes"></canvas>
    </div>
    <!-- </nodes.js embedding> -->

    <script type="text/javascript">
        window.onresize = function () {
            nodesjs.setWidth(window.innerWidth);
            nodesjs.setHeight(window.innerHeight);
        };
    </script>

  <!--navigation bar-->
  <div class="brand clearfix">
    <a href="index.php" class="logo"><img src="img/logo.png" class="img-responsive" alt=""></a>
    <span class="menu-btn"><i class="fa fa-bars"></i></span>
    <ul class="ts-profile-nav">
      <li><a href="#">Help</a></li>
      <li><a href="#">Settings</a></li>
      
      <?php  
        $name = mysql_query("SELECT * FROM db_user WHERE email='$_SESSION[email]'");
        while($nm=mysql_fetch_array($name)){
      ?>
      <li class="ts-account">
        <a href="#"><img src="img/icon-u.png" class="ts-avatar hidden-side" alt=""> <?php echo $nm['nrp']  ?><?php } ?> <i class="fa fa-angle-down hidden-side"></i></a>
        <ul>
          <li><a href="#">My Profile</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </li>
    </ul>
  </div>
