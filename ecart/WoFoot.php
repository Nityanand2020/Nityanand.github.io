<?php


session_start();

$conn=new mysqli('localhost','root','','ecart');
if($conn->connect_error) die($conn->connect_error);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Laptop</title>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			background-color: #00041d;
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
			top: 507px;
			left: 68%;
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
		.img-responsive
		{
			width: 270px;
			height: 250px;
			padding-top: 10px;
			border-radius: 6px;
		}
		
		
		/*.container{
			border:2px solid rgb(0,0,0,0.2);
			height: 400px;
			width: 100%;
			border-radius: 6px;
			background-color: #00041d;
			padding-left: 50px;
			top: 42px;
		}*/
		.one{
			border:0px solid;
			height: 530px;
			width: 280px;
			border-radius: 6px;
			background-color: white;
			margin-left: 25px;
			float: left;
			
			margin-top: 20px;
			padding-left: 25px;
			position: relative;
			
		}
		.text-info , .text-danger{
			color: green;

		}

	</style>
</head>
<body>
	<div class="list">
<ul>
	<li style="font-family: 'Indie Flower', cursive; color: rgb(235, 17, 101); font-size: 40px"><a href="ecart.html">E-cart</a></li>
	<li ><a>Electronics</a>
		<ul>
			<li><a href="Mobiles.php">Mobiles</a></li>
			<li><a href="MobAcc.php">Mobile Accessories</a></li>
			<li><a href="TV.php">Televesions</a></li>
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
			<li><a href="KidAcc.php">Toys</a></li>
		</ul>
	</li>
	<li ><a href="cart.php">Cart</a>
		
	<li ><a>Login &amp; Signup</a>
		<ul>
			<li><a href="htm.html" style="visited: none;">Login &amp; Signup</a></li>
			<li><a href="logout.php">Logout</a></li>
</ul>
</div>
<div class="container">
	<?php 
	$query="SELECT * FROM `product` WHERE `pro_sub_category` LIKE 'wofoot' ORDER BY `pro_id` ASC";
	$result=$conn->query($query);
	if(!$result) die($conn->error);
	$rows=$result->num_rows;
	if($rows > 0)
	{
		
	//while ($row= mysqli_fetch_array($result)) {
		for($j=0;$j < $rows ; ++$j){
			$result->data_seek($j);
			$row=$result->fetch_array(MYSQLI_ASSOC);
			$_SESSION['sub_category']=$row["pro_sub_category"];
			
	 ?>
	 <div >
	 <div class="one">
	 	<form method="post" action="addtocartbutt.php?action=add&pro_id=<?php echo $row["pro_id"] ?>">
	 		<div class="">
	 			<img src="<?php echo $row["pro_img"]; ?>" class="img-responsive">
	 			<h5 class="text-info" ><?php echo $row['pro_name']; ?></h5>
	 			<h5 class="text-danger" ><?php echo "Price: ".$row['pro_price']; ?></h5>
	 			Qty: <input type="number" name="numb" value="1" style="width: 25px;height: 20px">
	 			<input type="submit" name="add" value="Add To Cart" class="btn btn-success">
	 		</div>
	 	</form>
	 </div>
	 </div>
	 <?php 
	 }
	}
	 ?>	 
</div>
</body>
</html>