<?php
include_once("includes/dangnhap.php");

include_once("config.php");
include_once("admin/includes/lib.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quản lí Choose Mobile</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link rel="stylesheet" type="text/css" href="css/dangki.css">
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
if(isset($_POST['submit']))
{
$tendangnhap=$_POST['tendangnhap'];
$matkhau=$_POST['matkhau'];
$hoten=$_POST['hoten'];
$diachi=$_POST['diachi'];
$dienthoai=$_POST['dienthoai'];
$email=$_POST['email'];
mysql_query("INSERT INTO  thanhvien(tendangnhap,matkhau,hoten,diachi,dienthoai,email)VALUES
('$tendangnhap','$matkhau','$hoten','$diachi','$dienthoai','$email')");
header("Location:login.php");
		
}
?>
<div id="user-login">
<h2>Đăng nhập</h2>
<form action="register.php" method="POST">
<br>
<span>Username:</span>
<input type="text" name="tendangnhap">
<br>
<br>
<br>
<br>
<span>Password:</span>
<input type="password" name="matkhau">
<br>
<br>
<br>
<br>
<span>Họ tên:</span>
<input type="text" name="hoten">
<br>
<br>
<br>
<br>
<span>Địa chỉ:</span>
<input type="text" name="diachi">
<br>
<br>
<br>
<br>
<span>Điện thoại:</span>
<input type="text" name="dienthoai">
<br>
<br>
<br>
<br>
<span>Email:</span>
<input type="text" name="email">

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