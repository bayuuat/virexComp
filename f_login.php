<?php 
  include 'header.php';
  include 'signed.php';
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
  .notif-box
    {
      position: absolute;
      top: 18%;
      left: 50%;
      width: 400px;
      padding: 12px;
      transform: translate(-50%, -50%);
      background: rgba(0, 0, 0, 10);
      box-sizing: border-box;
      box-shadow: 0 15px 25px rgba(0, 0, 0, 10);
      border-radius: 10px;
      opacity: 0.7;
    }
  .notif-box h4
    {
      margin-top: 5px;
      margin-bottom: 5px;
      padding: 0;
      color: #fff;
      text-align: center;
    }
</style>

  <?php 
    if(isset($_GET['pesan'])){
      if($_GET['pesan'] == "gagal"){?>
        <div class="notif-box">
          <h4>Login gagal <a class="fas fa-frown" style="color: white;"></a> Email & Password salah!!!</h4>
        </div>
  <?php
      }
    }
  ?>
  <div class="ima">
    <img src="img/login2.png" style="width: 500px;height: 500px;">
  </div>
  <div class="login-box">
    <h2>Login Virtual Exhibiton</h2>
    <form action="b_login.php" method="post">
      <div class="user-box">
        <input type="text" name="email" required="" placeholder="Email">
      </div>
      <div class="user-box">
        <input type="password" name="password" required="" placeholder="Password">
      </div>
      <button class="btnr" type="submit">Submit</button>
      <button class="btnr" type="reset">Reset</button>
      </form>
      <div class="bottom">
        Don't have any account? &nbsp; <a href="f_register.php">Register here</a>
      </div>
      
  </div>

<?php 
  include 'footer.php';
?>