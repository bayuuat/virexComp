<?php 
  include 'header.php';
  include 'signed.php';
?>

<script>
  var check = function() {
    if (document.getElementById('password').value ==
      document.getElementById('confirm_password').value) {
      document.getElementById('message').style.color = 'green';
      document.getElementById('message').innerHTML = 'password match';
      document.getElementById('submit').disabled = false;
    } else {
      document.getElementById('message').style.color = 'red';
      document.getElementById('message').innerHTML = 'password not match';
      document.getElementById('submit').disabled = true;
    }
  }
</script>

<style type="text/css">
  html
    {
      height: 100%;
    }
  body
    {
      margin: 0;
      padding: 0;
      /*background-image: url(img/background.jpg);*/
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
      font-size: 15px;
      color: #fff;
      margin-bottom: 15px;
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
      height: 34px;
      background: #6cace4;
      color: #fff;
      font-weight: bold;
      border-radius: 50px;
      border: none;
      cursor: pointer;
      transition: 0.5s;
      margin-bottom: 5px;
    }
  .btnr:hover
    {
      background-color: #fff;
      color: #6cace4;
    }
  .bottom 
    {
      margin-left: 10px;
      color: white;
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
    
 .dropbtn 
    {
      width: 100%;
      padding: 10px 0;
      font-size: 15px;
      color: #fff;
      margin-bottom: 15px;
      border: none;
      border-bottom: 1px solid #fff;
      outline: none;
      background: transparent;
    }
      ::placeholder
    {
      color: #fff;
    }
  h2{
      font-size: 25px;
      margin-bottom: 0px;
      margin-top: 0px;
      color: yellow;
    }
</style>

  <div class="ima">
    <img src="img/register.png" style="width: 500px;height: 500px;">
  </div>
  <div class="login-box">
    <h2>Registration Virtual Exhibiton</h2>
    <form action="b_register.php" method="post">
      <div class="user-box">
        <input type="text" name="email" required="" placeholder="Email">
      </div>
      <div class="user-box">
        <input type="text" name="nama" required="" placeholder="Nama">
      </div>
     <!--dropdown-->
      <input class="dropbtn" list="role" name="role" placeholder="Role" required>
        <datalist id="role">
          <option value="Pengunjung">
          <option value="Ekshibitor">
        </datalist>
      <div class="user-box">
        <input type="password" name="password" required="" id="password" onkeyup='check();' placeholder="Masukkan Password">
      </div>
      <div class="user-box">
        <input type="password" name="confirm_password" required="" id="confirm_password" onkeyup='check();' placeholder="Konfirmasi Password">
      </div>
       <div class="user-box">
        <input type="hidden" name="gender" placeholder="gender" value="0" >
      </div>
      <span id='message'></span>
      <h1> </h1>
      <button class="btnr" type="submit" name="submit" id="submit" disabled>Daftar</button>
      </form>
      <div class="bottom">
        Already have an account? &nbsp; <a href="f_login.php">login here</a>
      </div>
  </div>

<?php 
  include 'footer.php';
?>