
<?php 
session_start();
require('Config.php');
if (isset($_POST['Dangky']) && $_POST['username'] != "" && $_POST['email'] != "" && $_POST['password'] != "" && $_POST['confirm_pw'] != "" ) {
                     # code...
	$username= $_POST['username'];
	$email= $_POST['email'];
	$password= $_POST['password'];
	$confirm_pw= $_POST['confirm_pw'];
	if ($password != $confirm_pw) {
		$_SESSION['thongbao']= "Mật khẩu không trùng khớp";
		header("location: Register.php");
      die(); //Không thực hiện sau nó nữa
  }
  $sql= "SELECT * FROM users WHERE username='$username' ";
  $result= mysqli_query($conn,$sql); 
                    //Mã hóa PW
  $password= md5($password);
    if (mysqli_num_rows($result) > 0) { //Kiểm tra tài khoản tồn tại chưa ?
    	$_SESSION['thongbao']= "Tài khoản đã tồn tại";
    	header("location: Register.php");
    	die();
    }
    $sql= "INSERT INTO users(username,email,password) VALUES ('$username','$email','$password') ";
    mysqli_query($conn,$sql);
    $_SESSION['thongbao']= "Đăng ký thành công";
    header('location: Login.php');
}

else{
	$_SESSION['thongbao'] = "Vui lòng nhập đủ thông tin";
	header("location: Register.php");

}
?>