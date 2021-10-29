<?php
$hn="localhost";
$db="ecart";
$user="root";
$pass="";
$conn=new mysqli($hn,$user,$pass,$db);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	
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
	
</style>
</head>
<body>
 <h3 class="title2"> ADMIN PAGE</h3>



<?php
if($_FILES)
{

if(isset($_POST['pro_id']) && isset($_POST['pro_name']) && isset($_POST['pro_category']) && isset($_POST['pro_sub_category']) && isset($_POST['pro_price']) && isset($_POST['pro_brand']) )

{   
	$pro_id=$_POST['pro_id'];
    $pro_name=$_POST['pro_name'];
    $pro_category=$_POST['pro_category'];
    $pro_sub_category=$_POST['pro_sub_category'];
    $pro_price=$_POST['pro_price'];
    $pro_brand=$_POST['pro_brand'];
	//$pro_path=echo"project_image\".$_POST['pro_img'];
	 $name   = $_FILES['filename']['name'];
	
    move_uploaded_file($_FILES['filename']['tmp_name'], $name);
	    echo "Uploaded image '$name'<br><img src='$name'>";
	


$query="INSERT INTO product(pro_id,pro_name,pro_category,pro_sub_category,pro_price,pro_brand,pro_img) VALUES('$pro_id','$pro_name','$pro_category','$pro_sub_category','$pro_price','$pro_brand','$name')";
$result=$conn->query($query);
if(!$result)die($conn->error);

}
}
if(isset($_POST['delete']) && isset($_POST['erase']))
{
$x=$_POST['erase'];
 $query="delete from product where pro_id=$x";
 $result=$conn->query($query);
	if(!$result) die($conn->error);
	
}




 echo <<<_END
 <form method='post' action='#' enctype='multipart/form-data'>
<label><h3>enter product id</h3><input type="text" name="pro_id"> </label><br>
<label><h3>enter product name</h3><input type="text" name="pro_name"> </label><br>
<label><h3>enter product category</h3><input type="text" name="pro_category"> </label><br>
<label><h3>enter product subcategory </h3><input type="text" name="pro_sub_category"> </label><br>
<label><h3>enter product price</h3><input type="text" name="pro_price"> </label><br>
<label><h3>enter product brand</h3><input type="text" name="pro_brand"> </label><br>
   
    Select File: <input type='file' name='filename' size='10'>
    <input type='submit' value='insert into database'>
</form>
_END;
 //echo "</body></html>";

	$query="select * from product";
	$result=$conn->query($query);
	if(!$result) die($conn->error);
	$rows=$result->num_rows;
	for($i=0;$i<$rows;$i++)
{
  $row=$result->fetch_array(MYSQLI_ASSOC);
   echo "<img  style='float:right;' width='300px' height='300px' src=".$row['pro_img'].">"."<br>";

  echo "<h3>product id:".$row['pro_id']."</h3>";
  echo "<h3>product name:".$row['pro_name']."</h3>";
  echo "<h3>product category:".$row['pro_category']."</h3>";
  echo "<h3>product sub category:".$row['pro_sub_category']."</h3>";
  echo "<h3>product price:".$row['pro_price']."</h3>";
  echo "<h3>product brand:".$row['pro_brand']."</h3>";
echo "<form method='post' action='#'>"."<input type='hidden' name='delete' value='yes'>"."<input type='hidden' name='erase' value=".$row['pro_id']."><br>";
echo <<<_END
<input type="submit" value="delete record">
</form>
_END;
}
?>
<br/><br/>
 <button class="btn btnbuy"><a  href="ecart.php">SEE ITEMS ON YOUR HOME PAGE</a></button>
</body>
</html>