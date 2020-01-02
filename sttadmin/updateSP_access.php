<?php
$ma=$_POST["txtma"];
$tensp=$_POST["txtten"];
$gia=$_POST["txtgia"];
$hang=$_POST["txthang"];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"dbqladmin");
$query="UPDATE qlsp set tensp='$tensp' , gia='$gia' , nsx='$hang' where ma='$ma'";
mysqli_query($con,$query);
mysqli_close($con);
header("Location:giaodienAdmin.php")
?>

