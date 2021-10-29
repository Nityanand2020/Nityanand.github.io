<?php 
session_start();
$conn=new mysqli('localhost','root','','ecart');
if($conn->connect_error) die($conn->connect_error);


if (true) {
	$username=$_POST["email"];
	$password=$_POST["Password"];
	$sql="SELECT * FROM `customer` WHERE EMAIL='$username' AND PASSWORD='$password'";
	$result = $conn->query($sql);
	if(!$result) die($conn->error);
//	$Sq2= mysqli_fetch_assoc($result);
    $rows=$result->num_rows;
    
	$Sq2=$result->fetch_array(MYSQLI_ASSOC);
	
	if ($rows == 1) {
	
	$_SESSION['user']=$Sq2['NAME'];
		$_SESSION['custid']=$Sq2['CUST_ID'];
		$_SESSION['username']=$username;
	$admin1="amit@gmail.com";
	$pw1="amit@123";
	$admin2="nitya@gmail.com";
	$pw2="nitya@123";
	
		if(($Sq2['EMAIL']=="$admin1") && ($Sq2['PASSWORD']=="$pw1") || ($Sq2['EMAIL']=="$admin2") && ($Sq2['PASSWORD']=="$pw2"))                   
		{
		   header("Location: uploadimg.php");
		exit();	
		}
		else
		{	
	    	header("Location: ecart.php");
		   exit();
		}
	}
	else{
		header("Location: signup.html");
		exit();
	}
}
?>