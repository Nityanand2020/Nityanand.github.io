 <?php 
// require_once 'setup.php ';
session_start();
error_reporting(0);
$_SESSION['username'];
$_SESSION['custid'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<title>Ecart</title>
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
		}
	
		ul{
			list-style-type: none;
			margin: 0;
			padding: 0;
		}

		ul li{
			
			width: 14.286%;
			height: 40px;
			float: left;
			text-align: center;
			background-color: rgb(174, 39, 95);
			color: white;
			line-height: 40px;
			font-family: arial;
			cursor: pointer;
		}
		li ul li
		{
			float: none;
			width: 100%;
			font-size: 15px;
			font-family: arial;
			cursor: pointer;
		}
		ul li a:link {
		
			font-size: 18px;
			text-decoration: none;
		}
		ul li:hover {
			background-color: rgb(255, 179, 203);
			font-size: 18px;
		}
		ul li a:visited {
			background-color: rgb(255, 179, 203);
			font-size: 18px;
			color: white;
			text-decoration: none;
		}
		ul li a:active {
			background-color: rgb(255, 179, 203);
			font-size: 18px;
			color: white;
			text-decoration: none;
		}
		ul li ul li{
			display: none;
		}
		ul li:hover ul li{
			display: block;
		}
		.list{
			z-index: 1;
			position: relative;
		}
		img{
			position: relative;
			width: 100%;
			height: 400px;
			margin: 0;
			padding: 0;
		}
		.slidshow-container
		{
			
			width: 100%;
			margin: auto;
			
		}
		.slides{

			display: none;
		}
		.number{
			position: absolute;
			padding: 8px 10px;
			color: white;

		}
		
		.prev,.next{
			position: absolute;
			top: 200px;
			color: white;
			padding: 10px 10px;
			border-radius: 0 6px 6px 0;
		}
		.next{
			right: 0%;
			border-radius: 6px 0 0 6px;
		}
		.next:hover,.prev:hover{
			background: rgba(0,0,0,0.8);
			cursor: pointer;

		}

		.fade{
			animation-name: fade;
			animation-duration: 0.7s;
		}
		@keyframes fade{
			from{opacity: 0.4}
			to{opacity: 1}
		}
		.bottom_style{
			background-color: rgba(0, 77, 102,0.9);
			height: 200px;
			font-family: Verdana;

		}
		hr{
			position: relative;
			top: 8%;
			color: black;
			border-width: 0.6px;
			border-color: gray;
		}
		.para{
			position: relative;
			top: 53px;
			padding-left: 8px;
			bottom: 6px;
			font-size: 12px;

		}
		.about{
			padding: 8px 0 0 13px;
		}
		.about a{
			text-decoration: none;
			color: white;
		}
		.help{
			position: absolute;
			top: 452px;
			left: 20%;

		}
		.help a{
			text-decoration: none;
			color: white;
		}
		.map{
			position: absolute;
			top: 443px;
			left: 40%;
		}
		.details{
			position: absolute;
			top: 452px;
			right: 10%;
			font-size: 13px;
		}
		.pi{
			 font-size: 10em;
		}
		
	</style>
</head>
<body>

<div class="list">
<ul>
	<li style="font-family: 'Indie Flower', cursive; color: rgb(235, 17, 101); font-size: 40px"><a href="ecart.php">E-cart</a></li>
	<li ><a>Electronics</a>
		<ul>
			<li><a href="Mobiles.php">Mobiles</a></li>
			<li><a href="MobAcc.php">Mobile Accessories</a></li>
			<li><a href="Televesions.php">Televesions</a></li>
			<li><a href="Laptops.php">Laptops</a></li>
			<li><a href="Cameras.php">Cameras</a></li>
		</ul>
	</li>
	<li ><a>Men</a>
		<ul>
			<li><a href="MenTop.php">Top wears</a></li>
			<li><a href="MenBot.php">Bottom wears</a></li>
			<li><a href="MenFoot.php">Footwears</a></li>
			<li><a href="MenAcc.php">Accessories</a></li>
		</ul>
	</li>
	<li ><a>Women</a>
		<ul>
			<li><a href="WoTop.php">Top wears</a></li>
			<li><a href="WoBot.php">Bottom wears</a></li>
			<li><a href="WoFoot.php">Footwears</a></li>
			<li><a href="WoAcc.php">Accessories</a></li>
		</ul>
	</li>
	<li ><a>Kids</a>
		<ul>
			<li><a href="KidTop.php">Top wears</a></li>
			<li><a href="KidBot.php">Bottom wears</a></li>
			<li><a href="KidFoot.php">Footwears</a></li>
			<li><a href="KidAcc.php">Accessories</a></li>
		</ul>
	</li>
	<li ><a href="cart.php">Cart</a>
		
	</li>
	<li ><a>Login &amp; Signup</a>
		<ul>
			<li><a href="htm.html" style="visited: none;">Login &amp; Signup</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</li>
</ul>
</div>
<div class="slidshow-container">
	<div class="slides fade">
		<div class="number">1/4</div>
		<div><img src="1.jpg"></div>
	</div>
<div class="slides fade">
		<div class="number">2/4</div>
		<div><img src="2.jpg"></div>
	</div>
<div class="slides fade">
		<div class="number">3/4</div>
		<div><img src="3.jpg"></div>
	</div>
<div class="slides fade">
		<div class="number">4/4</div>
		<div><img src="4.jpg"></div>
	</div>
</div>
	<a class="prev" onclick="plusIndex(-1)">&#10094</a>
	<a class="next" onclick="plusIndex(1)">&#10095</a>
</div>
<div class="bottom_style">
	<div class="about">
			<p style="color: gray;">ABOUT</p>
			<a href="">About Us</a><br>
			<a href="">Contact Us</a><br>
			<a href="">Return Centre</a><br>
	</div>
	<div class="help">
			<p style="color: gray;">HELP</p>
			<a href="">Payments</a><br>
			<a href="">Shipping</a><br>
			<a href="">Cancellation &<br> Returns</a><br>
			<a href="">FAQ</a><br>
	</div>
	<div class="details">
		<p style="color: gray;">Registered Office Address:</p>
	</div>
	<p class="para"> &copy; 2018-19 Ecart.com</p>
	<hr>
</div>
<div class="map" style="width:300px;height:200px;background:yellow"></div>
<script>
function myMap() {
var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.12),
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.HYBRID
}
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>

<script type="text/javascript">
 var slideIndex=1;
 showImage(1);
 function plusIndex(n){
	showImage(slideIndex+=n);
 }
 function showImage(n){
 	var i;
 	var slide= document.getElementsByClassName("slides");
 	if(n > slide.length) { slideIndex = 1};
	if(n < 1) { slideIndex = slide.length};
	for (i = 0; i < slide.length; i++) {
 		slide[i].style.display = "none";
 	};
 	slide[slideIndex-1].style.display = "block";
 }	
 autoslide();
 function autoslide()
 {
 	var i;
 	var slide= document.getElementsByClassName("slides");
 	for (i = 0; i < slide.length; i++) {
 		slide[i].style.display = "none";
 	};
 	if (slideIndex >  slide.length) { slideIndex = 1}
 	slide[slideIndex-1].style.display = "block";
 	slideIndex++;
 	setTimeout(autoslide,4000);
 }
</script>
</body>
</html>