<?php include_once("includes/dangnhap.php");

if($vModule=='logout') {
	abc();
	session_destroy();

}
?>
<div id="dangnhap">
<div id="top">

	<div id="bg-menu">

<ul>
	
	<?php
        if(isset($_SESSION['tendangnhap']))
		{
			$admin=mysql_query('SELECT * FROM thanhvien where tendangnhap="'.$_SESSION['tendangnhap'].'"');
			$admin1=mysql_fetch_array($admin);
		?>
		 <li colspan="2" align="center">Xin chào: <?php echo $_SESSION['tendangnhap'];?>&nbsp-&nbsp[<a href="?mod=thongtintaikhoan">Thông Tin Tài Khoản</a>] &nbsp-&nbsp[<a href="?mod=logout">Đăng xuất</a>]</li>
       	<?php
       	if ($admin1['admin']==1 ){
       	
       	
       	?>

        <li align="center"><strong><a href="quanli.php">Quản lí</a></strong></li>

		<?php
		}	
		}

		else
		{
		?>
        <li align="center"><strong><a href="login.php">Đăng nhập </a></strong></li>-
        <li align="center"><strong><a href="register.php">Đăng ký</a></strong></li>
        <?php
		}
		
		?>

	</ul>
	
	</div>
</div>
</div><div class="clear"></div>

