<?php 
session_start();
echo $_SESSION['username'];
echo $_SESSION['custid'];
//$database_name="ecart";
$conn=new mysqli('localhost','root','','ecart');
if($conn->connect_error) die($conn->connect_error);
if (isset($_SESSION['username'])) {
if (isset($_POST['add'])) {
	if (isset($_SESSION['cart'])) {
		$item_array_id=array_column($_SESSION['cart'], "product_id");
		if (!in_array($_GET['id'], $item_array_id)) {
			$count=count($_SESSION['cart']);
			$item_array =array(
				'product_id'=> $_GET['id'],
				'item_name'=>$_POST['hidden_name'],
				'product_price'=>$_POST['hidden_price'],
				'item_quantity'=>$_POST['quantity'],
			);
			$_SESSION['cart'][$count]=$item_array;
			echo'<script>window.location="Cart.php"</script>';
		}else{
			echo '<script>alert("Product is already added to cart")</script>';
			echo'<script>window.location="Cart.php"</script>';
		}
		}else{
			$item_array=array(
				'product_id'=> $_GET['id'],
				'item_name'=>$_POST['hidden_name'],
				'product_price'=>$_POST['hidden_price'],
				'item_quantity'=>$_POST['quantity'],
			);
			$_SESSION['cart'][0]=$item_array;
		}
		
}

if (isset($_GET['action'])) {
	if ($_GET['action']=='delete') {
		foreach ($_SESSION['cart'] as $key => $value) {
			if ($value['product_id']==$_GET['id']) {
				unset($_SESSION['cart'][keys]);
				echo '<script>alert("Product is already added to cart")</script>';
				echo'<script>window.location="Cart.php"</script>';
			}
		}
	}
}
	 if (isset($_POST['add12'])) {
	 $vari1=$_POST['remove2'];
	 $vari2=$_SESSION['custid'];
	$qy="DELETE FROM `cart` WHERE `id` = '$vari1' AND `custid` = '$vari2'";
	$result1=$conn->query($qy);
	if(!$result1) die($conn->error);}
}
else
{
	header("Location: htm.html");
		exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Shoping cart</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

<style type="text/css">
	body{
			margin: 0;
			padding: 0;
			background-color: white;
		}
		.btn{
			position: absolute;
			transform: translate(-50%,-50%);
			width: 160px;
			height: 37px;
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
			left: 525px;
			border-width: 0;
			overflow: hidden;
			padding: 0;
		}
		.btn:hover{
			color: white;
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
		
		.head{
			border-radius: 10px;
			border-color: white;
			border-style: solid;
			text-align: center;
			width: auto;
			height: auto;
			background-color:  #00041d;
			color: rgb(235, 17, 101);
			border-width: 2px;
			
			font-family: 'Lato', sans-serif;
			font-size: 30px;
			padding: 5px;
		}
	.product
	{
		border: 1px solid #eaeaec;
		margin: -1px 19px 3px -1px;
		padding: 10px;
		text-align: center;;
		background-color: #efefef;
	}
	table,th,tr{
		text-align: center;
	}
	.title2{
		border-radius: 10px;
			border-color: white;
			border-style: solid;
			text-align: center;
			width: auto;
			height: auto;
			background-color:  #00041d;
			color: rgb(235, 17, 101);
			border-width: 2px;
			font-family: 'Lato', sans-serif;
			font-size: 30px;
			padding: 5px;
	}
	h2{
		text-align: center;
		color: #66afe9;
		background-color: #efefef;
		padding: 2%;
	}
	table,th{
		background-color: #efefef;
	}
	.img-responsive{
		width: 200px;
		height: 250px;
		float: left;
		border-radius: 5px;
	}
	.product{
			width: 820px;
			border-radius: 10px;
			border-color: rgba(235, 17, 101,0.7);;
			background-color:  rgba(255,255,255,0.8);
			border-style: solid;
			border-width: 2px;
			height: 265px;
			padding: 6px;

	}
	.form-control{
		width: 150px;
		background-color: #00072f;
		color: rgb(235, 17, 101);
		text-align: center;
		position: relative;
		top: 145px;
		left: 50px;
	}
	.btnbuy{
		position: relative;
		bottom: 10px;
		left: 48%;
		width: 170px;
		height: 50px;
	}
</style>
</head>
<body>
<div class="container" style="width: 65%">
	<h2 class="head">Shopping cart</h2>
	<?php 
	$vari=$_SESSION['custid'];
	$query="SELECT * FROM cart WHERE custid= $vari ORDER BY id ASC";
	$result=$conn->query($query);
	if(!$result) die($conn->error);
	
	echo "$result";
	$rows=$result->num_rows;
	echo $rows;
	
	
	if($rows>= 0)
	{
		
	while ($row= $result->fetch_array(MYSQLI_ASSOC)) {
		
	echo "hello india";
	
	
	 ?>

	 <button class="btn btnbuy"><a  href="buy.php">BUY  ITEMS</a></button>
</div>
</body>
</html>
