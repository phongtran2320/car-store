<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="iso-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <title>Untitled Document</title>
	<?php 
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"dbqladmin");
session_start();
$user_name = $_SESSION["user"];
$strQuery = "select * from tbladmin where user = '$user_name'";
$resultSv = mysqli_query($con, $strQuery);
$rowSv = mysqli_fetch_array($resultSv);
?>
 </head>
 <style>
#tong{
  position: relative;
  top: 0px;

}
 #bot{
   position: absolute;
   top:150px;
   left: 130px;
 }
 .menu{
   font-size: 22px;
   background-color: black;
  color: white;
  padding: 14px 40px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
#undertop{
  position: absolute;
  top:30px;
  
}
#top{
  position: absolute;
  top:10px;
  left: 10px;
  font-size: 22px;
  font-family: Trebuchet MS;
}
#content{
  position: absolute;
  top: 230px;
  left: 200px;
  
  width: 1000px;
  height: 500px;
}
.dangxuat{
  font-size: 20px;
   background-color: black;
  color: red;
  padding: 14px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border: black solid 1px;
  border-radius: 15px;
  font-family: Trebuchet MS;
}
#right{
  position: absolute;
  top: 10px;
  right: 10px;
}


 #tong{background: url(hinhnendep4.jpg); background-size: 100% 700px;  width:100%; height:700px; margin:auto;color: white;}
 </style>
 <body>
<div id="tong" >
  <div id="top" >Xin chào <?php echo $user_name ?></div>
 
   <div id="right">
  <a class="dangxuat" href="logout.php">Đăng xuất</a>
  <a class="dangxuat" href="updateAdmin.php?ma=<?php echo $rowSv["ma"]; ?>">Sửa thông tin</a>
   </div>

 <div id="bot">
  <a class="menu" href="giaodienAdmin.php">Trang chủ</a>
  <a class="menu" href="?case=6">Quản lý hóa đơn</a>
  <a class="menu" href="?case=1">Quản lý sản phẩm</a>
  <a class="menu" href="?case=2">Quản lý khách hàng</a>
  <a class="menu" href="?case=3">Quản lý NSX</a>
 </div>
 <div id="content">
 <?php 
			if(isset($_GET['case'])){
				$case_menu = $_GET['case'];
				switch($case_menu){
          case 1 : include 'qlsp.php';
        break;
        case 2 : include 'listkh.php';
      break;
      case 3 : include 'listNsx.php';
      break;
      case 4 : include 'updateSP.php'; 
      break;
      case 5 : include 'formdangkiSP.php'; 
      break;
      case 6 : include 'hoadonchitiet.php'; 
      break;
				}
			}
		?>
 </div>
 



    	 
</div>
	
</body>

</html>
