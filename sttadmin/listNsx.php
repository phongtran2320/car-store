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
$strQuery = "select * from nsx";
$resultSv = mysqli_query($con,$strQuery);
?>
<table id="table" border="1" cellspacing="0px">
	<tr>
    	<Td>Mã</Td>
        <Td>NSX</Td>
        
        <Td></Td>
    </tr>
    <?php 
	while($rowSv =mysqli_fetch_array($resultSv))
	{
	?>
    <tr>
    	<Td><?php echo $rowSv["ma"]; ?></Td>
        <Td><?php echo $rowSv["tennsx"]; ?></Td>
        
        <Td><a href="deleteNSX.php?ma=<?php echo $rowSv["ma"]; ?>" onclick="return confirm('ban chac chan muon xoa');">Delete</a></Td>
    </tr>
    
    <?php 
    }
    
    ?>
    <tr>
        <td colspan="3"><a href="giaodienAdmin.php">Quay lại</a></td>
    </tr>
</table>
<?php 
mysqli_close($con);
?>