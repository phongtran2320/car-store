<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
    <style>
	    #all{background-color:#FFFFFF}
	    #header{position:fixed; background-color:#FFFFFF;top:0px}
        #div1{background-color:black; width:100%; height:100px }
		#content{background-color:#009999; width:100%; height:900px}
		#footer{background:url(diachi.jpg); width:100%; height:300px}
        ul {
            list-style-type: none;
            padding: 0px;
            height: 100%;
            margin: 0px;
            width: 100%
        }
        
        li {
            float: left;
            width: 220px;
            height: 100%;
            border: #CCCCCC solid 1.2px;
            background-color:#000000;
            font-size: 19px;
        }
        
        a {
            display: block;
            height: 100%;
            text-decoration: none;
            color: #FFFFFF;
            text-align: center; 
			
        }
        
        #menu ul li a:hover {
            color: red;
        }
        
        li ul {
            display: none;
			background-color:#000000; 
        }
        
        a:hover li ul {
            display: block;
        }
        
        li:hover ul {
            display:block;
        }
        
        #menu {
            background: #000000;
            height: 55px;
            width: 100%;
        }
        
        #top {
            
            height: 60px;
            width: 100%;
            margin: 0px;
			position:relative;
			
			
			
			
        }
        
        #bot {
            padding-top: 1px;
            background-image:url(hinhnen.jpeg);
			background-size:1200px 400px;
            width: 100%;
            height: 450px;
        }
		#timkiem{
			width: 400px;
    		height: 30px;
    		position: absolute;
    		border-radius: 20px;
    		left: 250px;
    		top: 10px;
            border:black solid 1px;
            outline: none;
            text-indent: 20px;
            font-size: 20px;
			}
		#submit{
			background: url(timkiem.png);
    		width: 30px;
    		height: 30px;
    		position: absolute;
    		left: 655px;
    		top: 10px;
    		background-size: 30px 30px;
    		border: none;
			}
			#giohang{
				position: absolute;
				top: 10px;
				right:20px;
			}
			#dangnhap{
				position: absolute;
				top: 0px;
				right:70px;
			}
			#dangky{
				position: absolute;
				top: 0x;
				right:200px;
            }
            #logo{
                position: absolute;
                left: 0px;
            }
	
		
    </style>
</head>

<body>
<div id="all">

    <div id="header">
        <div id="top">
        <a id="logo" href="#"><img src="logo.jpg" width="230px" height="60px"/></a>
		<form>
		 <input id="timkiem" type="text" placeholder="Tìm Kiếm...." />
	      <input id="submit" type="submit" value="" />
		  </form>
		  <a id="dangky" href="#"><img src="dangky.jpg"; width="120px" height="60px"  /></a>
		  <a id="dangnhap" href="#"><img src="dangnhap.jpg"; width="120px" height="60px"  /></a>
		  <a id="giohang" href="#"><img src="giohang.png" width="35px" height="35px" /></a>
		</div>
        <div id="menu">
            <ul>
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Giới thiệu </a></li>
                <li><a href="#">Dòng xe</a>
	                  <ul>
                        <li><a href="#">Xedan </a></li>
                        <li><a href="#">SUV </a></li>
						<li><a href="#">Siêu Xe</a></li>
                    </ul>			
				</li>
                <li><a href="#">Hãng xe</a>
                    <ul>
                        <li ><a href="#">Toyota<br /><img src="logoxe3.jpg" width="33px" height="33px" /></a></li>
                        <li><a href="#">Mercedes<br /><img src="logoxe4.jpg" width="33px" height="33px" /></a></li>
						<li><a href="#">Ford<br /><img src="logoxe2.jpg" width="33px" height="33px" /></a></li>
						<li><a href="#">BMW<br /><img src="logoxe1.jpg" width="33px" height="33px" /></a></li>
						
                    </ul>
                </li>
				<li><a href="#">Tin tức-Khuyến mãi</a></li>
                <li><a href="#">Bảng giá</a></li>
              
            </ul>
        </div>

    </div>
    <div id="div1"></div>
    <div id="bot"></div>
	<div id="content"></div>
	<div id="footer"></div>
	 
    	 
</div>	
	
</body>

</html>