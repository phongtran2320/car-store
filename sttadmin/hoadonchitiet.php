<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<link rel="stylesheet" type="text/css" href="table.css">
<body>
<div id="divtong">
 <table id="table"  align="center" border="1" cellspacing="0px">
   <tr>
    <td colspan="7" align="center"> Quan ly hoa don chi tiet</td>
   </tr>
   <tr>
    <td>Ma hoa don</td>
    <td>Ten san pham</td>
	<td>So luong</td>
	<td>Gia</td>
	<td>Ten khach hang</td>
	<td>Ngay dat</td>
	<td>Tong tien</td>
   </tr>
  <?php 
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"dbqladmin");
	$strQuery = "SELECT * from qlhd ";
	$result1 = mysqli_query($con,$strQuery);
	$rowSv = mysqli_fetch_array($result1);
  ?>
    <tr>
		<td><?php echo $rowSv['ma']; ?></td>
		<td><?php echo $rowSv['tensp']; ?></td>
		<td><?php echo $rowSv['soluong']; ?></td>
		<td><?php echo $rowSv['gia']; ?></td>
		<td><?php echo $rowSv['tenkh']; ?></td>
		<td><?php echo $rowSv['ngaydathang']; ?></td>
		<td><?php echo $rowSv['tongtien']; ?></td>
	</tr>
	<tr>
	 <td colspan="7" align="center"><a href="?case=4">quay lai hoa don</a></td>
	</tr>
<?php 
mysqli_close($con);
?>
 </table>
</div>
</body>
</html>
