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
mysqli_select_db($con,"dbqladmin");
$strQuery = "select * from hoadon";
$resultSv = mysqli_query($con,$strQuery);
?>
<table align="center" border="1">
	<tr>
    	<Td>Ma</Td>
        <Td>Tensp</Td>
		<td>Ten Khách</td>
		
		
		<td>Delete</td>
		
    
    </tr>
    <?php 
	while($rowSv =mysqli_fetch_array($resultSv))
	{
	?>
    <tr>
    	<Td><?php echo $rowSv["mahoadon"]; ?></Td>
        <Td><?php echo $rowSv["tensp"]; ?></Td>
		<Td><?php echo $rowSv["tenkhach"]; ?></Td>
		
		
        <Td><a href="deleteHD.php?ma=<?php echo $rowSv["mahoadon"]; ?>" onclick="return confirm('ban chac chan muon xoa');">Delete</a></Td>
    </tr>
    <?php 
	}
	?>
    <tr>
	 <td colspan="6" align="center"><a href="formdangkyHD.php">them san pham</a></td>
	</tr>
	<tr>
	 <td colspan="6" align="center"><a href="giaodienadmin.php">quay lai trang chu</a></td>
	</tr>
</table>
<?php 
mysqli_close($con);

?>
