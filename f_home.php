<?php 
  include 'header.php';
?>

<style type="text/css">
  html
    {
      height: 100%;
    }

  body {
      line-height: 20px;
      color: gray;
      background: #0A1964;
    }

  .mainBox {
      width: 500px;
      display: inline-block;
      border-radius: 2px;
      background: rgba(255,255,255,0.2);
      margin-top: 200px;
    }
  h1 {
      font-size: 50px;
      margin-bottom: 0px;
      margin-top: 0px;
      color: yellow;
    }
  @media only screen and (max-width: 600px) {
  .mainBox {
      width: 300px;
      }
    }

  @media only screen and (max-height: 700px) {
    .mainBox {
      margin-top: 50px;
      }
    }

  .login-box
    {
      position: absolute;
      top: 55%;
      left: 50%;
      width: 800px;
      padding: 40px;
      transform: translate(-50%, -50%);
      background: rgba(0, 0, 0, 0);
      box-sizing: border-box;
      box-shadow: 0 15px 25px rgba(0, 0, 0, 0);
      border-radius: 10px;
      opacity: 1;
    }
  .login-box h2
    {
      margin: 0 0 30px;
      padding: 0;
      color: #fff;
      text-align: center;
    }
  .login-box .user-box
    {
      position: relative;
    }
  .user-box input
    {
      width: 100%;
      padding: 10px 0;
      font-size: 16px;
      color: #fff;
      margin-bottom: 30px;
      border: none;
      border-bottom: 1px solid #fff;
      outline: none;
      background: transparent;
    }
      ::placeholder
    {
      color: #fff;
    }
  .btni
    {
      width: 150px;
      height: 150px;
      background: #6cace4;
      color: #fff;
      font-weight: bold;
      border-radius: 50px;
      border: none;
      cursor: pointer;
      transition: 0.5s;
      margin-top: 40px;
      margin-bottom: 30px;
      margin-left: 50px;
      margin-right: 50px;
    }
  .btni:hover
    {
      background-color: #fff;
      color: #6cace4;
    }
  .bottom 
    {
      margin-left: 10px;
      margin-right: 10px;
      display: flex;
      /*justify-content: space-between;*/
    }
 .bottom a 
    {
      color: white;
      font-size: 15px;
      text-decoration: none;
    }
 .bottom a:hover 
    {
      text-decoration: underline;
    }
  /*dropdown css*/
  .dropbtn 
    {
      width: 100%;
      padding: 10px 0;
      font-size: 16px;
      color: #fff;
      margin-bottom: 30px;
      border: none;
      border-bottom: 1px solid #fff;
      outline: none;
      background: transparent;
    }
      ::placeholder
    {
      color: #fff;
    }
</style>

  <div class="login-box"> 
    <h1 style="text-align:center">Virtual Exhibiton</h1>
    <div class="text-center">
        <?php
      if(isset($_SESSION['email']) == TRUE){
      ?>
      <button class="btni" onclick="window.location.href='f_tim.php'">
        Data Tim<img src="img/icon1.png" style="float:center;width:100px;height:100px;">
      </button> 
      <!--button class="btni" onclick="window.location.href='f_karakter.php'"-->
      <!--Ganti Karakter<img src="img/icon3.png" style="float:center;width:100px;height:100px;"-->
      <!--/button--> 
      <button class="btni" onclick="window.location.href='f_submit.php'"> 
        Input Data<img src="img/icon4.png" style="float:center;width:100px;height:100px;">
      </button> 
      <button class="btni"  onclick="window.location.href='http://webocr.eastasia.cloudapp.azure.com:3000/'">
        Eksebisi<img src="img/icon2.png" style="float:center;width:100px;height:100px;">
      </button>
      <?php } else { ?>
       <form action = "http://webocr.eastasia.cloudapp.azure.com:3000/">
      <button class="btni" type="submit">
        Eksebisi<img src="img/icon2.png" style="float:center;width:100px;height:100px;">
      </button>
      </form>
      <?php } ?>
    </div>
  </div>

<?php 
  include 'footer.php';
?>