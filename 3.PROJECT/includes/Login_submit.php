<?php  
session_start();
require('Config.php');
if (isset($_POST['Dangnhap']) && $_POST['username'] != ""  && $_POST['password'] != ""  ) {
	$username= $_POST['username'];
	$password= $_POST['password'];
    // $password= password_hash($password, PASSWORD_DEFAULT);
	$password= md5($password);
	$sql= "SELECT * FROM users WHERE username='$username' AND password='$password' ";
	$result= mysqli_query($conn,$sql);
	if (mysqli_num_rows($result) > 0) {
		header("location:users/users.php");
       $_SESSION["user"]= $username;  //Đăng nhập thành công thì khởi tạo session user
   }
   else{
   	$_SESSION['error']= "Bạn nhập sai username hoặc mật khẩu";
   	header("location: Login.php");
   }
}
else{
	$_SESSION['error']= "Bạn chưa nhập username hoặc mật khẩu";
	header("location: Login.php");
}
?>