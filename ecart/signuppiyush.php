<?php 
session_start();
//$db="ecart";
//$user="root";
//$pass="";
//$p=mysqli_connect("localhost",$user,$pass,$db);
//mysqli_select_db($p,$db);
$conn=new mysqli('localhost','root','','ecart');
if($conn->connect_error) die($conn->connect_error);

	$name=$_POST['name'];
	$custid= "$name"."1234";
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password1=$_POST['Password1'];
	

    $qu = "INSERT INTO `customer` (`NAME`, `EMAIL`, `MOBILE`, `PASSWORD`, `CUST_ID`) VALUES ('$name', '$email', '$mobile', '$password1', '$custid')" ;//VALUES ('$name','$email','$mobile','$password1','$custid')";
   // $result1 = mysqli_query($p,$qu);

	$result1 = $conn->query($qu);
	if(!$result1) die($conn->error);
	if ($result1== 1) {
		$name=$_POST["name"];
		$username=$_POST["email"];
		$sql="SELECT * FROM `customer` WHERE EMAIL='$username'";
//	$result = mysqli_query($p,$sql);
		$result = $conn->query($sql);
	if(!$result) die($conn->error);
	
	$Sq2= $result->fetch_array(MYSQLI_ASSOC);
	$_SESSION['user']=$name;
	$_SESSION['custid']=$custid;
	$_SESSION['username']=$username;
		header("Location: ecart.php");
		exit();	
	}
	else{
		header("Location: signup.html");
		exit();
	}
	
?>