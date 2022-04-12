<?php
include 'header.php';
include 'cek.php';
?>

<style type="text/css">
  html {
    height: 100%;
  }

  body {
    margin: 0;
    padding: 0;
    color: grey;
    /*background-image: url(img/background.jpg);*/
    background: linear-gradient(#0e2949, #0e2949);
  }

  iframe {
    overflow: hidden;
  }

  h2 {
    font-size: 20px;
    margin-bottom: 0px;
    margin-top: 0px;
    color: yellow;
  }

  h4 {
    margin-bottom: 0px;
    margin-top: 0px;
  }

  .mainBox {
    width: 500px;
    display: inline-block;
    border-radius: 2px;
    background: rgba(255, 255, 255, 0.2);
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

  .login-box {
    position: absolute;
    top: 55%;
    left: 50%;
    width: 450px;
    padding: 40px;
    transform: translate(-50%, -50%);
    background: rgba(0, 0, 0, 10);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0, 0, 0, 10);
    border-radius: 10px;
    opacity: 0.7;
  }

  .login-box h2 {
    margin: 0 0 30px;
    padding: 0;
    color: yellow;
    text-align: center;
  }

  .login-box .user-box {
    position: relative;
  }

  .user-box input {
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: gray;
    border: none;
    border-bottom: 1px solid #fff;
    border-radius: 5px;
    outline: none;
    background: white;
    margin-bottom: 10px;
  }

  ::placeholder {
    color: #818181;
  }

  .btn {
    /* width: 250px;
    height: 45px;
    background: #20334a;
    color: #fff;
    font-weight: bold;
    border-radius: 50px;
    border: none;
    cursor: pointer;
    transition: 0.5s; */
    margin-bottom: 20px;
  }

  .btn:hover {
    background-color: #fff;
    color: #20334a;
  }

  .btnr {
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

  .btnr:hover {
    background-color: #fff;
    color: #6cace4;
  }

  .bottom {
    margin-left: 10px;
    color: white;
    margin-right: 10px;
    display: flex;
    justify-content: space-between;
  }

  .bottom a {
    color: white;
    font-size: 15px;
    text-decoration: none;
  }

  .bottom a:hover {
    text-decoration: underline;
  }

  .dropbtn {
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
</style>
<?php
if (isset($_GET['pesan'])) {
  if ($_GET['pesan'] == "gagal") { ?>
    <div class="notif-box">
      <h4>Login gagal <a class="fas fa-frown" style="color: white;"></a> Email & Password salah!!!</h4>
    </div>
<?php
  }
}
?>

<div class="login-box">
  <h2>Submission Form</h2>
  <form action="b_submit.php" method="POST" enctype="multipart/form-data">
    <h4>Materi</h4>
    <div class="mb-3">
      <input class="form-control" type="file" name="materi">
    </div>
    <button type="submit" class="btn btn-outline-secondary">Save</button>
  </form>
  <form action="b_submit.php" method="POST" enctype="multipart/form-data">
    <h4>Poster</h4>
    <div class="mb-3">
      <input class="form-control" type="file" name="poster">
    </div>
    <button type="submit" class="btn btn-outline-secondary">Save</button>
  </form>
  <form action="b_submit.php" method="POST" enctype="multipart/form-data">
    <h4>Video Demo</h4>
    <div class="mb-3">
      <input class="form-control" type="file" name="video_demo">
    </div>
    <button type="submit" class="btn btn-outline-secondary">Save</button>
  </form>
  <form action="b_submit.php" method="POST" enctype="multipart/form-data">
    <h4>Video Profile</h4>
    <div class="mb-3">
      <input class="form-control" type="file" name="video_profile">
    </div>
    <button type="submit" class="btn btn-outline-secondary">Save</button>
  </form>
</div>

<?php
include 'footer.php';
?>