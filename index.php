<?php 
  include 'header.php';
?>

<style type="text/css">
  html
    {
      height: 100%;
    }
  body
    {
      margin: 0;
      padding: 0;
      background: linear-gradient(#0e2949, #0e2949);
    }
  .mainBox {
      width: 500px;
      display: inline-block;
      border-radius: 2px;
      background: rgba(255,255,255,0.2);
      margin-top: 200px;
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
      left: 75%;
      width: 400px;
      padding: 40px;
      transform: translate(-50%, -50%);
      background: rgba(0, 0, 0, 0);
      box-sizing: border-box;
      box-shadow: 0 15px 25px rgba(0, 0, 0, 0);
      border-radius: 10px;
      opacity: 0.7;
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
  .btn
    {
      width: 153px;
      height: 45px;
      background: #20334a;
      color: #fff;
      font-weight: bold;
      border-radius: 50px;
      border: none;
      cursor: pointer;
      transition: 0.5s;
      margin-bottom: 10px;
    }
  .btn:hover
    {
      background-color: #fff;
      color: #20334a;
    }
  .btnr
    {
      width: 310px;
      height: 45px;
      background: #6cace4;
      color: #fff;
      font-weight: bold;
      border-radius: 50px;
      border: none;
      cursor: pointer;
      transition: 0.5s;
      margin-bottom: 10px;
    }
  .btnr:hover
    {
      background-color: #fff;
      color: #6cace4;
    }
  .bottom 
    {
      margin-left: 10px;
      margin-right: 10px;
      display: flex;
      justify-content: space-between;
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
h1 {
      font-size: 50px;
      margin-bottom: 0px;
      margin-top: 0px;
      color: yellow;
    }

</style>


  <div class="ima">
    <img src="img/awal2.png" style="width: 520px;height: 500px;">
  </div>

  <div class="login-box">
    <h1 style="text-align:left">Virtual</h1>
    <h1 style="text-align:center">Exhibiton</h1>
    <h2 style="color: white; text-align: left;">Come and Experience <br> the Exhibition</h2>
      <button class="btn" onclick="window.location.href='f_register.php'">Register</button> 
      <button class="btn" onclick="window.location.href='f_login.php'">Login</button>
  </div>

<?php 
  include 'footer.php';
?>