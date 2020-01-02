<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="index.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
#top {
    text-align: center;
    color: white;
}

#main {
   
    margin-left: 475px;
    margin-top: 80px;
    width: 350px;
    height: 500px;
    border: white solid 1px;
    position: relative;
    background-color: black;
    opacity: 0.7;
}

#user {
    border: none;
    height: 40px;
    width: 340px;
    position: absolute;
    outline: none;
    font-size: 20px;
    top: 100px;
    border-bottom: 1px solid white;
    left: 0px;
    background-color: black;
    text-indent: 20px;
    opacity: 0.7;
    color: white;
}

#pass {
    border: none;
    height: 40px;
    width: 320px;
    padding-top: 0px;
    outline: none;
    padding-left: 20px;
    font-size: 20px;
    position: absolute;
    top: 200px;
    border-bottom: 1px solid white;
    color: white;
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
    bottom: 100px;
    color: white;
    border: red solid 1px; border-top:50px;
}

#tong {
    height: 100%;
    width: 100%;
    background-image:url(oto.png);
    background-size: 100% 100%;
    position: absolute;
    top: 0px;
}
</style>
<body>
<div id="tong">
<div id="main">
   <div id=top> <h1>Login</h1></div><br>
<form action="loginxuly.php" method="post">
 <div class="dangnhap"><input id="user" type="text" name="txtuser" placeholder=" Username..." /></div>
<br />
 <div class="pass"><input id="pass" type="password" name="txtpass" placeholder="Nhập pass ..."  /></div>
<br />

 <input id="login" type="submit" value="Login" /><br />
 
</form>
</div>
</div>
</body>
</html>