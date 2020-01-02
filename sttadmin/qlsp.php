<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="table.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php 
$con = mysqli_connect("localhost","root","");
mysqli_set_charset($con,"utf8");
mysqli_select_db($con,"dbqladmin");
$strQuery = "select * from qlsp";
$resultSv = mysqli_query($con,$strQuery);
?>
<table id="table" align="center" border="1" cellspacing="0px">
	<tr>
    	<Td>Mã</Td>
        <Td>Tên sp</Td>
		<td>Giá</td>
		<td>Hãng xe</td>
		<td>Update</td>
		<td>Delete</td>
		
    
    </tr>
    <?php 
	while($rowSv =mysqli_fetch_array($resultSv))
	{
	?>
    <tr>
    	<Td><?php echo $rowSv["ma"]; ?></Td>
        <Td><?php echo $rowSv["tensp"]; ?></Td>
		<Td><?php echo $rowSv["gia"]; ?></Td>
		<Td><?php echo $rowSv["nsx"]; ?></Td>
		<Td><a href="?case=4&&ma=<?php echo $rowSv["ma"]; ?>" onclick="return confirm('ban chac chan muon sua');">Update</a></Td>
        <Td><a href="deleteSP.php?ma=<?php echo $rowSv["ma"]; ?>" onclick="return confirm('ban chac chan muon xoa');">Delete</a></Td>
    </tr>
    <?php 
	}
	?>
    <tr>
	 <td colspan="6" align="center"><a href="?case=5">Thêm sản phẩm</a></td>
	</tr>
	<tr>
	 <td colspan="6" align="center"><a href="giaodienAdmin.php">Quay lại</a></td>
	</tr>
	
</table>
<?php 
mysqli_close($con);

?>
