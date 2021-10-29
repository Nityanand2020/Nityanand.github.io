<!-- <?php 
$host="localhost";
$user="root";
$pass="";
$db="ecart";
$p=mysqli_connect($host,$user,$pass);
mysqli_select_db($p,$db);
if (isset($_POST["email"])) {
	$username=$_POST["email"];
	$password=$_POST["Password"];
	$sql="select * from login_form where EMAIL='".$username."'AND PASSWORD='".$password."' limit 1";
	$result = mysqli_query($p,$sql);
	
	echo "string";
}
?> -->
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<style type="text/css">
		body{
			margin: 0px;
			padding: 0px;
			background-color: #00041d;
			
		}
		.border{
			border-style: solid;
			border-radius: 6px;
			border-width: 3px;
			width: 450px;
			height: 250px;
			position: absolute;
			top: 200px;
			left: 450px;
			border-color: rgb(235, 17, 101);
			padding-top: 30px;
			
		}
		.heading{
			font-family: Courier;
			font-family: 'Lato', sans-serif;
			font-size: 30px;
			color: rgb(235, 17, 101);
			position: absolute;
			top: 120px;
			left: 450px;
		}
		.logo{
			font-family: 'Indie Flower', cursive;
			color: rgb(235, 17, 101); 
			font-size: 60px; 
			font-weight: bold;
			position: absolute;
			left: 570px;
			top: -10px;
			text-decoration: none;
		}
		h2 a:link {
   			 text-decoration: none;
			color: rgb(235, 17, 101);
		}

		h2 a:visited {
			text-decoration: none;
			color: rgb(235, 17, 101);
		}
		h2 a:hover {
			text-decoration: none;
			color: rgb(235, 17, 101);
		}
		
		h2 a:active {
			text-decoration: none;
			color: rgb(235, 17, 101);
		}
		.textbox{
			font-family: Courier;
			font-family: 'Lato', sans-serif;
			width: 250px;
			overflow: hidden;
			border-bottom: 1px solid;
			color: rgb(235, 17, 101);

		}
		.textbox input{
			border: none;
			outline: none;
			background: none; 
			color: rgb(210, 255, 77);
		}
		.textbox i{
			width: 26px;
			float: left;
			text-align: center;
			font-family: 'Lato', sans-serif; 
			font-size: 22px;
			
		}
		.textbox [placeholder]{
			text-align: center;
		}
		.btn{
			position: absolute;
			transform: translate(-50%,-50%);
			width: 160px;
			height: 40px;
			background-color: #00072f;
			text-align: center;
			line-height: 40px;
			border-radius: 40px;
			color: #555;
			text-transform: uppercase;
			text-decoration:none;
			font-family: sans-serif;
			transition: 1s;
			cursor: pointer;
			top: 230px;
			left: 100px;
			border-width: 0;
			overflow: hidden;
		}
		.btn:hover{
			color: #fff;
			box-shadow: -15px 0 50px rgba(255,20,152,1), 15px 0 50px rgba(122,0,255,1);
			text-shadow: 0 0 10px rgba(255,255,255,0.5), 0 0 25px rgba(255,255,255,0.50), 0 0 35px rgba(255,255,255,0.5);
		}
		.btn:before{
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			width: 40px;
			height: 40px;
			border-radius: 50px;
			background-color: rgba(255,20,152,0);
			filter: blur(4px);
			transition: 1s;
			z-index: -1;
		}
		.btn:hover:before
		{
			background-color: rgba(255,20,152,1);
			transform: scaleX(5);
		}
		.btn:after{
			content: '';
			position: absolute;
			top: 0;
			right: 0;
			width: 40px;
			height: 40px;
			border-radius: 50%;
			background-color: rgba(122,0,255,0);
			filter: blur(4px);
			transition: 1s;
			z-index: -1;
			mix-blend-mode: lighten;
		}
		.btn:hover:after{
			background-color: rgba(122,0,255,1);
			transform: scaleX(5);
		}
		.pi{
			position: absolute;
			transform: translate(-50%,-50%);
			width: 160px;
			height: 40px;
			background-color: #00072f;
			text-align: center;
			line-height: 40px;
			border-radius: 40px;
			color: #555;
			text-transform: uppercase;
			text-decoration:none;
			font-family: sans-serif;
			transition: 1s;
			cursor: pointer;
			top: 230px;
			left: 340px;
			border-width: 0;
			overflow: hidden;
		}
		.pi:hover{
			color: #fff;
			box-shadow: -15px 0 50px rgba(255,20,152,1), 15px 0 50px rgba(122,0,255,1);
			text-shadow: 0 0 10px rgba(255,255,255,0.5), 0 0 25px rgba(255,255,255,0.50), 0 0 35px rgba(255,255,255,0.5);
		}
		.pi:before{
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			width: 40px;
			height: 40px;
			border-radius: 50px;
			background-color: rgba(255,20,152,0);
			filter: blur(4px);
			transition: 1s;
			z-index: -1;
		}
		.pi:hover:before
		{
			background-color: rgba(255,20,152,1);
			transform: scaleX(5);
		}
		.pi:after{
			content: '';
			position: absolute;
			top: 0;
			right: 0;
			width: 40px;
			height: 40px;
			border-radius: 50%;
			background-color: rgba(122,0,255,0);
			filter: blur(4px);
			transition: 1s;
			z-index: -1;
			mix-blend-mode: lighten;
		}
		.pi:hover:after{
			background-color: rgba(122,0,255,1);
			transform: scaleX(5);
		}
	</style>
</head>
<body>
	<img src="logo.png" style="height: 620px; width: 100%;">
	<h2 class="logo"><a href="ecart.html">E-cart</a></h2>
	<p class="heading">LOGIN</p>
	<div class="border" align="center">
<form action="piyush.php" method="post">
	<div class="textbox">
	EMAIL<br><br> <input type="email" name="email" placeholder="Enter your email..." required="Enter Email"></div><br><br>
	<div class="textbox">
	PASSWORD<br><br> <input type="Password" name="Password" placeholder="Enter your Password..." required="Enter Password">
	</div>
	<input class="btn" type="submit" name="submit" value="SIGN IN"><br><br>
	<a href="signup.html"><input class="pi" type="button" name="button" value="SIGN UP"></a>
</form></div>
</body>
</html>

