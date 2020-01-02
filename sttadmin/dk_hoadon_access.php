<?php
$con=mysqli_connect("localhost","root","");
$sp=$_POST["txtsp"];
$khach=$_POST["txtkhach"];



 mysqli_select_db($con,"dbqladmin");
 $insert="insert into hoadon(tensp,tenkhach) values ('$sp','$khach') ";
 $query=mysqli_query($con,$insert);

?>
<?php 
mysqli_close($con);
header("Location:qlhoadon.php");

?>