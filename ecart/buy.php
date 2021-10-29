<?php 
session_start();
$customer =$_SESSION['user'];
//$CUSTID =$_SESSION['custid'];
$conn=new mysqli('localhost','root','','ecart');
if($conn->connect_error) die($conn->connect_error);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	body{
			margin: 0;
			padding: 0;
			background-image: url("trianglify1.png");
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
<h3 class="title2"> <?php echo "$customer"; ?> </h3>
 <h3 class="title2"> Shopping Cart Details</h3>
	 <div class="table-responsive">
	 	<table class="table table-bordered">
	 	<tr>
	 		<th width="30%"> Product Name</th>
	 		<th width="10%">Quantity</th>
	 		<th width="13%"> Price Details</th>
	 		<th width="10%">Total Price</th>
	 	</tr>
<?php 
$vari=$_SESSION['custid'];
$query="SELECT * FROM cart WHERE CUST_ID='$vari' ORDER BY pro_id ASC";
$result=$conn->query($query);
if(!$result) die($conn->error);
	
	//echo "$result";
$row=$result->num_rows;	
	 		$total=0;
	 		for ($x = 0; $x <= $row; $x++) {
				$result->data_seek($x);
				$Sq2=$result->fetch_array(MYSQLI_ASSOC);
?>
	 	 <tr>
	 	 	<td><?php echo $Sq2["pname"]; ?></td>
	 	 	<td><?php echo $Sq2["qty"]; ?></td>
	 	 	<td><?php echo $Sq2["price"]; ?></td>
	 	 	<td><?php echo number_format( $Sq2["qty"] * $Sq2["price"], 2); ?></td>
	 	 	
	 	 </tr><br/><br/>
	 	 <?php
	 	 $total=$total+($Sq2["qty"]*$Sq2["price"]);
	 	}
	 	 ?>
	 	 <tr>
	 	 	<td colspan="3" align="right">
	 	 		Total
	 	 	</td>
	 	 	<th align="right">$ <?php echo number_format($total, 2); ?></th>
	 	 	<td></td>
	 	 </tr>
	 	 
	 	 </table>
	 	</div>
</body>
</html>
