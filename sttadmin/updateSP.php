
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
#chu {
    text-align: center;
    color: white;
    position: absolute;
    top: 0px;
    left: 70px;


}

#main {
    margin-left: 350px;

    width: 350px;
    height: 400px;
    border: white solid 1px;
    position: relative;
    background-color: black;
    opacity: 0.7;
    font-family: Time New Roman;
}



#login {
    background-color: rgb(255, 0, 0);
    width: 350px;
    height: 50px;
    border-radius: 3px;
    outline: none;
    font-size: 20px;
    position: absolute;
    bottom: 30px;
    color: white;
    border: red solid 1px;
    left: 0px;
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
table{
    position: absolute;
    top: 60px;
}
</style>
<body>
<?php 
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"dbqladmin");
$ma = $_GET["ma"];


$strQuery = "select * from qlsp where ma='$ma'";
$resultSv= mysqli_query($con,$strQuery);
$rowSv = mysqli_fetch_array($resultSv);

?>

 <div id="main" align="center">   
    <div id="chu"><h2>UPDATE Sản phẩm</h2></div>
    <form action="updateSP_access.php" method="POST">
        <table  >
        <tr>
                <td class="ten"><h3>Mã</h3></td>
                <td><input class="txt" type="text" name="txtma" value="<?php echo $rowSv["ma"] ?>" readonly="readonly" /></td>
            </tr>
        
            <tr>
                <td class="ten"><h3>Tên </h3></td>
                <td><input class="txt" type="text" name="txtten" value="<?php echo $rowSv["tensp"] ?>" /></td>
            </tr>
            <tr>
                <td class="ten"><h3>giá</h3></td>
                <td><input class="txt" type="text" name="txtgia" value="<?php echo $rowSv["gia"] ?>"/></td>
            </tr>
            
            <tr>
                <td class="ten"><h3>Hãng</h3></td>
                <td><input class="txt" type="text" name="txthang" value="<?php echo $rowSv["nsx"] ?>"/></td>
            </tr>
            
           
            
        </table>
        <input id="login" type="submit" value="update"/>
    </form>
	</div>
</body>
</html>
