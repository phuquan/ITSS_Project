<?php
include_once("includes/dangnhap.php");

include_once("config.php");
include_once("admin/includes/lib.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Choose Mobile</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link rel="stylesheet" type="text/css" href="css/dangnhap.css">
	<link rel="stylesheet" type="text/css" href="css/quanli.css">

</head>
<body>

<div class="quanli-menu">
	<a href="index.php">
	<img id="choose-mobile"src="images/logo.png" width="284"  height="96" alt="" />
	</a>
	<div id="banner">
	<div  id="pay" class="p">Thanh Toán Khi Nhận</div>
	<div  id="truck" class="p">Thanh Toán Khi Nhận</div>
	<div  id="return" class="p">Thanh Toán Khi Nhận</div>
	<div  id="phone" class="p">Thanh Toán Khi Nhận</div>
	<div  id="lock" class="p">Thanh Toán Khi Nhận</div>
	</div>
</div>
<?php
session_start();
if(isset($_SESSION['tendangnhap'])){
	sleep(1);
	header("Location:index.php");
}
else{

if(isset($_POST['submit'])){
	$sql=mysql_query('SELECT * FROM thanhvien where tendangnhap="'.$_POST['username'].'" and matkhau="'.$_POST['password'].'"');
	if (mysql_num_rows($sql)>0) {
		$_SESSION['tendangnhap']=$_POST['username'];
		sleep(1);
		header("Location:index.php");
		
	}
	else
	{
		echo "Bạn điền sai username hoặc password";
	}
}
}

?>
<div id="user-login">
<h2>Đăng nhập</h2> 
<form action="login.php" method="POST">
<br>
<span>Username:</span>
<input type="text" name="username">
<br>
<br>
<br>
<br>
<span>Password:</span>
<input type="password" name="password">

<br>
<br>

<span id="quenmatkhau"><a href="#">Quên mật khẩu?</a></span>
<br>
<br>
<br>
<input type="submit" name="submit" id="login" value="Đăng nhập">
</form>
<br>
<br>

<button id="login-face">Đăng nhập với facebook</button>

  </div>
</body>
</html>