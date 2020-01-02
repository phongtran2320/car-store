<?php
$con=mysqli_connect("localhost","root","");
$user=$_POST["txtuser"];
$pass=$_POST["txtpass"];
$mail=$_POST["txtmail"];
$gt=$_POST["txtgt"];

 mysqli_select_db($con,"dbqladmin");
 $insert="insert into tbladmin(user,password,mail,gt) values ('$user','$pass','$mail','$gt') ";
 $query=mysqli_query($con,$insert);

?>
<?php 
mysqli_close($con);
header("Location:admin.php");

?>