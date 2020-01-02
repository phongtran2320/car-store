<?php
$ma=$_GET["ma"];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"dbqladmin");
$query=" DELETE from hoadon where mahoadon='$ma'";
mysqli_query($con,$query);
?>
<?php
    mysqli_close($con);
    header("Location:qlhoadon.php");
?>