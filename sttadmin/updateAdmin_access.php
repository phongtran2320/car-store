<?php
$ma=$_POST["txtma"];
$user=$_POST["txtuser"];
$pass=$_POST["txtpass"];
$mail=$_POST["txtmail"];
$gt=$_POST["txtgt"];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"dbqladmin");
$query="UPDATE tbladmin set user='$user' , mail='$mail' , gt='$gt',password='$pass' where ma='$ma'";
mysqli_query($con,$query);
?>
<?php
mysqli_close($con);
header("Location:giaodienAdmin.php");
?>