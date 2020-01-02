<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
    #tong {
    height: 100%;
    width: 100%;
    background-image: url(oto.png);
    background-size: 100% 100%;
    position: absolute;
    top: 0px;
    color: white;
}
#top {
    text-align: center;
    color: white;
}

#main {
    margin-left: 475px;
    margin-top: 100px;
    width: 350px;
    height: 500px;
    border: white solid 1px;
    position: relative;
    background-color: black;
    opacity: 0.7;
}



#login {
    background-color: rgb(255, 0, 0);
    width: 350px;
    height: 50px;
    border-radius: 3px;
    outline: none;
    font-size: 20px;
    position: absolute;
    bottom: 50px;
    color: white;
    border: red solid 1px;
}

.ten {
    width: 100px;
    height: 40px;
    padding-left: 20px;
}

.txt {
    width: 220px;
    height: 30px;
    font-size: 18px;
    background-color: black;
    color: white;
    outline: none;
    border: none;
    border-bottom: yellow;
}
</style>
</head>

<body>
<?php 
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"dbqladmin");
session_start();
$user_name = $_SESSION["user"];
$strQuery = "select * from tbladmin where user = '$user_name'";
$resultSv = mysqli_query($con, $strQuery);
$rowSv = mysqli_fetch_array($resultSv);
?>


<div id="tong">
<div id="main">
    <div id="top"><h1>Sửa thông tin cá nhân</h1></div>
    <form action="updateAdmin_access.php" method="POST">
        <table   >
        <tr>
                <td class="ten"><h3>Mã</h3></td>
                <td><input class="txt" type="text" readonly="readonly"  name="txtma" value="<?php echo $rowSv["ma"] ?>"/></td>
            </tr>
            
            <tr>
                <td class="ten"><h3>User</h3></td>
                <td><input class="txt" type="text" name="txtuser" value="<?php echo $rowSv["user"] ?>" readonly="readonly"/></td>
            </tr>
            <tr>
                <td class="ten"><h3>Pass</h3></td>
                <td><input class="txt" type="password" name="txtpass" value="<?php echo $rowSv["password"] ?>"/></td>
            </tr>
            
            <tr>
                <td class="ten"><h3>Email</h3></td>
                <td><input class="txt" type="text" name="txtmail" value="<?php echo $rowSv["mail"] ?>"/></td>
            </tr>
            
            <tr>
                <td class="ten"><h3>Giới tính</h3></td>
                <td><input type="radio" name="txtgt" value=" " />Nam
                <input type="radio" name="txtgt" value=" " />Nữ</td>
            </tr>
            
               
                

            
        </table>
        <input id="login" type="submit" value="Xác nhận"/>
    </form>
 </div>
</div>
    <?php
mysqli_close($con);
 ?>
</body>
</html>