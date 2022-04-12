<?php 
  include 'header.php';
  include 'cek.php';
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
      color: grey;
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
      left: 50%;
      width: 400px;
      padding: 40px;
      transform: translate(-50%, -50%);
      background: rgba(0, 0, 0, 10);
      box-sizing: border-box;
      box-shadow: 0 15px 25px rgba(0, 0, 0, 10);
      border-radius: 10px;
      opacity: 0.7;
    }
  .login-box h2
    {
      margin: 0 0 10px;
      padding: 0;
      color: yellow;
      text-align: center;
    }
  .login-box .user-box
    {
      position: relative;
    }
  .user-box input
    {
      width: 100%;
      padding: 7px 0;
      font-size: 14px;
      color: #fff;
      border: none;
      border-bottom: 1px solid #fff;
      border-radius: 0px;
      outline: none;
      background: transparent;
      margin-bottom: 14px;
    }
      ::placeholder
    {
      color: #818181;
    }
  .btn
    {
      width: 150px;
      height: 45px;
      background: #20334a;
      color: #fff;
      font-weight: bold;
      border-radius: 50px;
      border: none;
      cursor: pointer;
      transition: 0.5s;
      margin-top: 20px;
    }
  .btn:hover
    {
      background-color: #fff;
      color: #20334a;
    }
  .btnr
    {
      width: 310px;
      height: 35px;
      background: #6cace4;
      color: #fff;
      font-weight: bold;
      border-radius: 50px;
      border: none;
      cursor: pointer;
      transition: 0.5s;
      margin-top: 10px;
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
  h5{
      margin-top: 3px;
    }

</style>

  <div class="login-box">
    <h2>Data Tim</h2>
    <form action="b_tim.php" method="post">
      <div class="user-box">
        <input type="text" name="tim" required="" placeholder="Nama Tim">
      </div>
      <div class="user-box">
        <input type="text" name="judul" required="" placeholder="Judul">
      </div>
      <div class="user-box">
        <input type="text" name="ketua" required="" placeholder="Ketua">
      </div>
      <div class="user-box">
        <input type="text" name="anggota_1" placeholder="Anggota 1">
      </div>
      <div class="user-box">
        <input type="text" name="anggota_2" placeholder="Anggota 2">
      </div>
      <div class="user-box">
        <input type="text" name="anggota_3" placeholder="Anggota 3">
      </div>
      <button class="btn" onclick="window.location.href='#'">Kirim</button>
      <button class="btn" type="reset">Reset</button>
      </form>
  </div>

<?php 
  include 'footer.php';
?>