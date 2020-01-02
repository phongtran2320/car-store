<?php
$con=mysqli_connect("localhost","root","");
$ten=$_POST["txtten"];
$gia=$_POST["txtgia"];
$hang=$_POST["txtnsx"];


 mysqli_select_db($con,"dbqladmin");
 $insert="insert into qlsp(tensp,gia,nsx) values ('$ten','$gia','$hang') ";
 $query=mysqli_query($con,$insert);

?>
<?php 
mysqli_close($con);
header("Location:giaodienAdmin.php");

?>
