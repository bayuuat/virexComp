<?php 
  include 'header.php';
  include 'cek.php';
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
      margin-bottom: 40px;
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
      top: 50%;
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
      width: 180px;
      height: 180px;
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
    <h1 style="text-align:center">Pilih Karaktermu</h1>
    <form class="text-center" action="b_karakter.php" method="post">
      <div class="user-box">
        <input name="email" type="hidden" value="<?php echo $_SESSION['email']; ?>">
      </div>
      <button class="btni" type="submit" name="gender" value="1">
        <img src="img/cowo.png" style="float:center;width:60px;height:120px;">
      </button>
      <button class="btni" type="submit" name="gender" value="2">
        <img src="img/cewe.png" style="float:center;width:70px;height:130px;">
      </button>
    </form>
  </div>

<?php 
  include 'footer.php';
?>