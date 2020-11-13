<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="utf-8">
  <title>Đăng nhập</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="../css/Register.css">
</head>
<body>
  <div class="container-fluid Register-form">
    <div class="row justify-content-center"> <!-- Căn cả khung ra giữa màn hình-->
      <div class="col-12 col-sm-6 col-md-3 form-container">
        <form method="POST"  action="Login_submit.php">
          <center><h1>Đăng nhập</h1></center>
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" class="form-control btn btn-outline-success" name="username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control btn btn-outline-success" name="password">
          </div>
          <center><input type="submit" name="Dangnhap" value="Đăng nhập" class="btn-lg btn-primary btn-block"></center>
          <!-- Hiển thị lỗi -->
          <?php 
          if (isset($_SESSION['error'])) {
            echo $_SESSION['error'];
            
          }
          ?>
          <a href="Register.php">Bạn chưa có tài khoản?</a>
        </form>
      </div>
    </div>
  </div>
</body>
</html>