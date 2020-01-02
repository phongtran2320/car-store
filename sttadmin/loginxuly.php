<?php
session_start();
$user=$_POST["txtuser"];
$pass=$_POST["txtpass"];

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"dbqladmin");
$query="select *from tbladmin where user='$user' and password='$pass' ";
$result=mysqli_query($con,$query);
$sobanghi=mysqli_num_rows($result);
$page="";
if($sobanghi>0){
    $_SESSION["user"]=$user;
    $page="giaodienAdmin.php";
} 
else{
    $page="index.php";
     echo 'Hãy nhập lại';

}
mysqli_close($con);
header("location:$page");
?>