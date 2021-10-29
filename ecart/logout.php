<?php 
session_start();
session_unset();
header("Location: ecart.php");
		exit();
?>