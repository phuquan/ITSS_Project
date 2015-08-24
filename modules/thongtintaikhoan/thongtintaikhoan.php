<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<div class="sanpham_moi"><h3>Thông tin tài khoản</h3>

<?php
error_reporting(E_ALL & ~E_NOTICE & ~8192);
include('/ketnoi.php');
$user=$_SESSION['tendangnhap'];
			$sql    = "SELECT * from thanhvien WHERE tendangnhap='$user'";
        	$result = mysql_query($sql);
        	$row    = mysql_fetch_array($result);
?>
							
<form name="form1" method="post" action="">
  <table width="500px" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr class="table-tt">
    	<td colspan='2' align='center'><b>Thông tin tài khoản </b></td>
    </tr>
    <tr class="table-tt">
      <td>Tài khoản:</td>
      <td align='center'>
	 	<?php
			echo $row['tendangnhap'] ;
		?></td>
    </tr>
    <tr class="table-tt">
      <td>Họ và tên:</td>
      <td align='center'><?php
			echo $row['hoten'];
		?></td>
    </tr>
    
    
    <tr class="table-tt">
      <td>Địa chỉ:</td>
      <td align='center'><?php
			echo $row['diachi'];
		?></td>
    </tr>
    <tr class="table-tt">
      <td>Điện thoại:</td>
      <td align='center'><?php
			echo $row['dienthoai'];
		?></td>
    </tr>
    <tr class="table-tt">
      <td>Email:</td>
      <td align='center'><?php
			echo $row['email'];
		?></td>
    </tr>
    <tr class="table-tt">
    	<td colspan='2' align='center'><b>Thiết lập tài khoản</b></td>
    </tr>
     <tr class="table-tt"><td colspan='2'><a href="#">Thay đổi mật khẩu</a></td></tr>
     <tr class="table-tt"><td colspan='2'><a href="#">Thay đổi thông tin tài khoản</a></td>
  </table>
</form>
</div>

