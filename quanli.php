<?php 
include_once("config.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Quản lí Choose Mobile</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<div class="quanli-left">
	<a href="quanli.php?ac=tintuc"><button>Quản Lí Tin Tức</button></a>
	<a href="quanli.php?ac=thongtin"><button>Quản Lí Thông Tin Về Sản Phẩm</button></a>
	<a href="quanli.php?ac=hoadon"><button>Quản Lí Hóa Đơn</button></a>
	<a href="quanli.php?ac=giohang"><button>Quản Lí Giỏ Hàng</button></a>
</div>
<div class="quanli-right">

<?php
if(isset($_GET['ac']))
{
if(($_GET['ac']=='tintuc'))
{	?>
<center>
<h2>Quản lí phản hồi từ khách hàng</h2>
</center>
<?php
	$tintuc=mysql_query('select * from lienhe order by id desc');
	$i=0;
	while($tintuc1=mysql_fetch_array($tintuc)){ $i++;
?>
<p id="stt">
<?php
	

	echo $i;
?>
</p>
<br>
<br>
<span class="p1">Họ tên:</span><span class="p2"><?php echo $tintuc1['hoten'];?></span><br><br>
<span class="p1">Địa chỉ:</span><span class="p2"><?php echo $tintuc1['diachi'];?></span><br><br>
<span class="p1">Email:</span><span class="p2"><?php echo $tintuc1['email'];?></span><br><br>
<span class="p1">Số điện thoại:</span><span class="p2"><?php echo $tintuc1['sdt'];?></span><br><br>
<span class="p1">Tiêu đề:</span><span class="p2"><?php echo $tintuc1['tieude'];?></span><br><br>
<span class="p1">Nội dung:</span><span class="p2"><?php echo $tintuc1['noidung'];?></span><br><br>
<a href="quanli.php?idtt=<?php echo $tintuc1['id']?>"><button class="p1" id="xoatintuc" name="xoatintuc">Xóa</button></a><br><br>

<?php
}
}
}

?>
<?php
if (isset($_GET['idtt'])) {
	mysql_query("delete  from lienhe where id =".$_GET['idtt']);
	?>
	<center>
	<h2>
	<?php
	echo "Đã xóa thành công";

}
?>
</h2>
</center>


<?php
if(isset($_GET['ac']))
{
if(($_GET['ac']=='thongtin'))
{	?>
<center>
<h2>Quản lí thông tin về sản phẩm</h2>

<a href="quanli.php?id=them"><button class="quanli-thongtin">Thêm sản phẩm</button></a>
<a href="quanli.php?id=sua"><button class="quanli-thongtin">Sửa thông tin sản phẩm</button></a>
<a href="quanli.php?id=xoa"><button class="quanli-thongtin">Xóa sản phẩm</button></a>
</center>
<?php
}
}
?>
<?php
if (isset($_GET['id'])) {
	if ($_GET['id']=='them') {
		?>
<center>
<h2>Thêm vào bảng sản phẩm</h2>
<form style=" margin-top:40px;" action="quanli.php" method="POST">
<table width="500" border="1" cellspacing="0" cellpadding="4">
<tr>
    <td height="32">Loại sản phẩm</td>
    <td><select name="loaisanpham">
     <?php
	$products_type=mysql_query('select * from products_type');
	$i=0;
	
	
	while($products_type1=mysql_fetch_array($products_type)){ $i++;
	?>
	<option class="themsp">
	<?php echo $products_type1['ProductTypeName'];?>
	</option>
     <?php }?>
    </select></td>
  </tr>
  <tr>
    <td width="130" height="35">Tên sản phẩm</td>
   <td width="257"><input class="themsp" type="text" name="tensanpham" size="40"/></td>
  </tr>
  <tr>
    <td height="39">SKU</td>
    <td><input type="text" name="sku" size="40" class="themsp"/></td>
  </tr>
  <tr>
    <td height="36">Giá</td>
    <td><input type="number" name="gia" size="40" class="themsp"/></td>
  </tr>
  <tr>
    <td height="36">Link ảnh </td>
    <td>
    <input type="text" name="linkanh" size="40" class="themsp"/>
    </td>
  </tr>
  <tr>
    <td height="173">Mô tả sản phẩm </td>
    <td><textarea name="motasanpham" rows="10" cols="41"></textarea>
    
    </td>
  </tr>
 <tr>
    <td height="36">Hệ điều hành </td>
    <td>
    <input type="text" name="hedieuhanh" size="40" class="themsp"/>
    </td>
  </tr>
  <tr>
    <td height="36">Màn hình</td>
    <td>
    <input type="text" name="manhinh" size="40" class="themsp"/>
    </td>
  </tr>
  <tr>
    <td height="36">Ram</td>
    <td>
    <input type="text" name="ram" size="40" class="themsp"/>
    </td>
  </tr>
  <tr>
    <td height="36">Camera</td>
    <td>
    <input type="text" name="camera" size="40" class="themsp"/>
    </td>
  </tr>
  <tr>
    <td height="36">Pin</td>
    <td>
    <input type="text" name="pin" size="40" class="themsp"/>
    </td>
  </tr>
  <tr>
    <td height="36">CPU</td>
    <td>
    <input type="text" name="cpu" size="40" class="themsp"/>
    </td>
  </tr>
  <tr>
    <td height="36">Giá mới</td>
    <td>
    <input type="number" name="giamoi" size="40" class="themsp"/>
    </td>
  </tr>
  <tr>
  <td colspan="2"><center><input type="submit"  value="Thêm vào" name="thembangsanpham" class="themsp" id="submit-them" /></center></td>
  </tr>
</table>
</form>
</center>		
		<?php
	}
}

if(isset($_POST['thembangsanpham']))
{
$lsp=$_POST['loaisanpham'];
$lsp1= mysql_query('select ID from products_type where ProductTypeName="'.$lsp.'"');
$lsp2=mysql_fetch_array($lsp1);

$ProductTypeId=$lsp2['ID'];
$ProductTypeName=$_POST['tensanpham'];
$SKU=$_POST['sku'];
$Price=$_POST['gia'];
$Image=$_POST['linkanh'];
$Description=$_POST['motasanpham'];
$Hedieuhanh=$_POST['hedieuhanh'];
$Manhinh=$_POST['manhinh'];
$Ram=$_POST['ram'];
$Camera=$_POST['camera'];
$Pin=$_POST['pin'];
$CPU=$_POST['cpu'];
$PriceNew=$_POST['giamoi'];
mysql_query("INSERT INTO  products(ProductTypeId,ProductName,SKU,Price,Image,Description,Hedieuhanh,Manhinh,Ram,Camera,Pin,CPU,PriceNew)VALUES
('$ProductTypeId','$ProductTypeName','$SKU','$Price','$Image','$Description','$Hedieuhanh','$Manhinh','$Ram','$Camera','$Pin','$CPU','$PriceNew')");

?>
<center>
<h2>
<?php
echo "Đã thêm thành công";		
}

?>
</h2>
</center>



<?php
if(isset($_GET['id']))
{
if(($_GET['id']=='sua'))
{	?>
<center>
<h2>Cập nhật thông tin sản phẩm</h2>
</center>
<?php
	$sp=mysql_query('select * from products order by id desc');
	$i=0;
	while($sp1=mysql_fetch_array($sp)){ $i++;
?>
<p id="stt">
<?php
	

	echo $i;
?>
</p>
<br>
<br>
<div id="update">
<form action="quanli.php" method="post">
<span class="p1">ID sản phẩm</span><input  type="text"class="p2" name="ID"value=<?php echo $sp1['ID']; ?>><br><br>
<span class="p1">Tên sản phẩm:</span><input name="ProductName" type="text" class="p2" value=<?php echo $sp1['ProductName'];?>><br><br>
<span class="p1">SKU:</span><input name="SKU" type="text" class="p2" value=<?php echo $sp1['SKU'];?>><br><br>
<span class="p1">Price:</span><input name="Price" type="number" class="p2" value=<?php echo $sp1['Price'];?>><br><br>
<span class="p1">Link ảnh:</span><input name="Image" type="text" class="p2" value=<?php echo $sp1['Image'];?>><br><br>
<span id="anh">Ảnh</span><img  id="img-sp" src="<?php echo $sp1['Image'];?>"><br><br>
<span class="p1">Mô tả sản phẩm:</span><textarea id="motasanpham" name="motasanpham" rows="10" cols="41" ><?php echo $sp1['Hedieuhanh'];?></textarea><!-- <input class="p2" type="text" value=<?php echo $sp1['Hedieuhanh'];?>> --><br><br>
<span class="p1">Hệ điều hành:</span><input name="Hedieuhanh" type="text" class="p2" value=<?php echo $sp1['Hedieuhanh'];?>><br><br>
<span class="p1">Màn hình:</span><input name="Manhinh" type="text" class="p2" value=<?php echo $sp1['Manhinh'];?>><br><br>
<span class="p1">Ram:</span><input name="Ram" type="text" class="p2" value=<?php echo $sp1['Ram'];?>><br><br>
<span class="p1">Camera:</span><input name="Camera" type="text" class="p2" value=<?php echo $sp1['Camera'];?>><br><br>
<span class="p1">Pin:</span><input name="Pin" type="text" class="p2" value=<?php echo $sp1['Pin'];?>><br><br>
<span class="p1">CPU:</span><input name="CPU" type="text" class="p2" value=<?php echo $sp1['CPU'];?>><br><br>
<span class="p1">Giá mới:</span><input  name="PriceNew" type="number" class="p2" value=<?php echo $sp1['PriceNew'];?>><br><br>
<input type="submit" class="p1" id="xoatintuc" name="suathongtin" value="Cập nhật"><br><br>
</form>
</div>


<?php
}
}
}

?>
<?php
if (isset($_POST['suathongtin'])) {
$ID=$_POST['ID'];
$ProductName=$_POST['ProductName'];
$SKU=$_POST['SKU'];
$Price=$_POST['Price'];
$Image=$_POST['Image'];
$Description=$_POST['motasanpham'];
$Hedieuhanh=$_POST['Hedieuhanh'];
$Manhinh=$_POST['Manhinh'];
$Ram=$_POST['Ram'];
$Camera=$_POST['Camera'];
$Pin=$_POST['Pin'];
$CPU=$_POST['CPU'];
$PriceNew=$_POST['PriceNew'];
	mysql_query("update products set ProductName='$ProductName',SKU='$SKU',Price='$Price',
	Image='$Image',Description='$Description',Hedieuhanh='$Hedieuhanh',Manhinh='Manhinh',Ram='Ram',Camera='$Camera'
	,Pin='$Pin',CPU='$CPU',PriceNew='$PriceNew' where ID ='$ID'" );
	?>
	<center>
	<h2>
	<?php
	echo "Đã cập nhật thành công";

}
?>
</h2>
</center>





<?php
if(isset($_GET['id']))
{
if(($_GET['id']=='xoa'))
{	?>
<center>
<h2>Xóa sản phẩm</h2>
</center>
<?php
	$sp=mysql_query('select * from products order by id desc');
	$i=0;
	while($sp1=mysql_fetch_array($sp)){ $i++;
?>
<p id="stt">
<?php
	

	echo $i;
?>
</p>
<br>
<br>
<span class="p1">Tên sản phẩm:</span><span class="p2"><?php echo $sp1['ProductName'];?></span><br><br>
<span class="p1">SKU:</span><span class="p2"><?php echo $sp1['SKU'];?></span><br><br>
<span class="p1">Price:</span><span class="p2"><?php echo $sp1['Price'];?></span><br><br>
<span class="p1">Link ảnh:</span><span class="p2"><?php echo $sp1['Image'];?></span><br><br>
<img  id="img-sp" src="<?php echo $sp1['Image'];?>"><br><br>
<span class="p1">Mô tả sản phẩm:</span><span class="p2"><?php echo $sp1['Hedieuhanh'];?></span><br><br>
<span class="p1">Màn hình:</span><span class="p2"><?php echo $sp1['Manhinh'];?></span><br><br>
<span class="p1">Ram:</span><span class="p2"><?php echo $sp1['Ram'];?></span><br><br>
<span class="p1">Camera:</span><span class="p2"><?php echo $sp1['Camera'];?></span><br><br>
<span class="p1">Pin:</span><span class="p2"><?php echo $sp1['Pin'];?></span><br><br>
<span class="p1">CPU:</span><span class="p2"><?php echo $sp1['CPU'];?></span><br><br>
<span class="p1">Giá mới:</span><span class="p2"><?php echo $sp1['PriceNew'];?></span><br><br>
<a href="quanli.php?idxoa=<?php echo $sp1['id']?>"><button class="p1" id="xoatintuc" name="xoatintuc">Xóa</button></a><br><br>

<?php
}
}
}

?>
<?php
if (isset($_GET['idxoa'])) {
	mysql_query("delete  from products where id =".$_GET['idxoa']);
	?>
	<center>
	<h2>
	<?php
	echo "Đã xóa thành công";

}
?>
</h2>
</center>



<?php
if(isset($_GET['ac']))
{
if(($_GET['ac']=='hoadon'))
{	?>
<center>
<h2>Quản lí hóa đơn</h2>
</center>
<?php
	$hoadon=mysql_query('select * from hoadon order by id desc');
	$i=0;
	while($hoadon1=mysql_fetch_array($hoadon)){ $i++;
?>
<p id="stt">
<?php
	

	echo $i;
?>
</p>
<br>
<br>
<span class="p1">Họ tên:</span><span class="p2"><?php echo $hoadon1['hoten'];?></span><br><br>
<span class="p1">Số điện thoại:</span><span class="p2"><?php echo $hoadon1['sodienthoai'];?></span><br><br>
<span class="p1">Email:</span><span class="p2"><?php echo $hoadon1['email'];?></span><br><br>
<span class="p1">Địa chỉ:</span><span class="p2"><?php echo $hoadon1['diachi'];?></span><br><br>
<span class="p1">Quận/huyện:</span><span class="p2"><?php echo $hoadon1['quanhuyen'];?></span><br><br>
<span class="p1">Thành phố:</span><span class="p2"><?php echo $hoadon1['thanhpho'];?></span><br><br>
<span class="p1">Thời gian đặt mua:</span><span class="p2"><?php echo $hoadon1['tgiandatmua'];?></span><br><br>
<span class="p1">Cách thanh toán:</span><span class="p2"><?php echo $hoadon1['paymethod'];?></span><br><br>
<a href="quanli.php?idhd=<?php echo $hoadon1['id']?>"><button class="p1" id="xoatintuc" name="xoatintuc">Xóa</button></a><br><br>

<?php
}
}
}

?>
<?php
if (isset($_GET['idhd'])) {
	mysql_query("delete  from hoadon where id =".$_GET['idhd']);
	?>
	<center>
	<h2>
	<?php
	echo "Đã xóa thành công";

}
?>
</h2>
</center>


<?php
if(isset($_GET['ac']))
{
if(($_GET['ac']=='giohang'))
{	?>
<center>
<h2>Quản lí giỏ hàng</h2>
</center>
<?php
	$giohang=mysql_query('select * from giohang ');
	$i=0;
	while($giohang1=mysql_fetch_array($giohang)){ $i++;
?>
<p id="stt">
<?php
	

	echo $i;
?>
</p>
<br>
<br>
<span class="p1">ID sản phẩm:</span><span class="p2"><?php echo $giohang1['idsp'];?></span><br><br>
<span class="p1">Số lượng:</span><span class="p2"><?php echo $giohang1['sl'];?></span><br><br>
<span class="p1">Tên sản phẩm:</span><span class="p2"><?php echo $giohang1['ProductName'];?></span><br><br>
<span class="p1">Giá:</span><span class="p2"><?php echo $giohang1['Price'];?></span><br><br>
<a href="quanli.php?idgh=<?php echo $giohang1['idgh']?>"><button class="p1" id="xoatintuc" name="xoatintuc">Xóa</button></a><br><br>

<?php
}
}
}

?>
<?php
if (isset($_GET['idgh'])) {
	mysql_query("delete  from giohang where idgh =".$_GET['idgh']);
	?>
	<center>
	<h2>
	<?php
	echo "Đã xóa thành công";

}
?>
</h2>
</center>
</div>
</body>
</html>