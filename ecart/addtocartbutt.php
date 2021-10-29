<?php 
session_start();

$conn=new mysqli('localhost','root','','ecart');
if($conn->connect_error) die($conn->connect_error);
$button=$_GET['pro_id'];

if(!isset($_SESSION['user']))
{
	header("Location: htm.html"); 
	exit();
}

if (isset($_SESSION['username'])) {
$sql1="SELECT * FROM `product` WHERE `pro_id`='$button' ";
	$result = $conn->query($sql1);
	if(!$result) die($conn->error);
	$Sq2= $result->fetch_array(MYSQLI_ASSOC);
	$pid=$Sq2['pro_id'];
	echo $pid;
	$pname=$Sq2['pro_name'];
	echo $pname;
	$pprice=$Sq2['pro_price'];
	echo $pprice;
	$pimg=$Sq2['pro_img'];
	$cid=$_SESSION['custid'];
	echo $cid;
	$QTY=$_POST['numb'];
	
$sql2="INSERT INTO `cart`(`pro_id`, `pname`, `price`, `pro_img`, `CUST_ID`, `qty`) VALUES ('$pid','$pname','$pprice','$pimg','$cid','$QTY')";
//mysqli_query($p,$sql2);
	$result = $conn->query($sql2);
	if(!$result) die($conn->error);
	if($_SESSION['sub_category']=="laptop"){
       header("Location: Laptops.php");
		exit(); 
		}
    else if($_SESSION['sub_category']== "Mobiles")
	{
       header("Location:Mobiles.php");
		exit(); 
		}
    else if($_SESSION['sub_category']== "mobile accessories")
	{
       header("Location:MobAcc.php");
		exit(); 
		}
	else if($_SESSION['sub_category']== "camera")
	{
       header("Location:Cameras.php");
		exit(); 
		}
     else if($_SESSION['sub_category']== "telivision")
	{
       header("Location:Televesions.php");
		exit(); 
		}
	 else if($_SESSION['sub_category']== "shirt")
	{
       header("Location:MenTop.php");
		exit(); 
		}	

    else if($_SESSION['sub_category']== "bottom")
	{
       header("Location:MenBot.php");
		exit(); 
		}
     else if($_SESSION['sub_category']== "footwear")
	{
       header("Location:MenFoot.php");
		exit(); 
		}
     else if($_SESSION['sub_category']== "menacc")
	{
       header("Location:MenAcc.php");
		exit(); 
		}	
     else if($_SESSION['sub_category']== "wotop")	{
       header("Location:WoTop.php");
		exit(); 
		}
    else if($_SESSION['sub_category']== "wobottom")
	{
       header("Location:WoBot.php");
		exit(); 
		}
     else if($_SESSION['sub_category']== "wofoot")
	{
       header("Location:WoFoot.php");
		exit(); 
		}
     else if($_SESSION['sub_category']== "woacc")
	{
       header("Location:WoAcc.php");
		exit(); 
		}
     else if($_SESSION['sub_category']== "kidtop")
	{
       header("Location:KidTop.php");
		exit(); 
		}
     else if($_SESSION['sub_category']== "kidbot")
	{
       header("Location:KidBot.php");
		exit(); 
		}
    else if($_SESSION['sub_category']== "kidfoot")
	{
       header("Location:KidFoot.php");
		exit(); 
		}
     else if($_SESSION['sub_category']== "kidacc")
	{
       header("Location:kidAcc.php");
		exit(); 
		}
    else
	{		
      header("Location:ecart.php");
		exit();
	}
}
?>