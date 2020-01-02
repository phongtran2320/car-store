<?php
$ma=$_GET["ma"];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"dbqladmin");
$query=" DELETE from qlsp where ma='$ma'";
mysqli_query($con,$query);
?>
<?php
    mysqli_close($con);
    header("Location:giaodienAdmin.php");
?>