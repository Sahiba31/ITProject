<?php
	$id = $_GET['q']; //Getting id beacuse id will be unique for every product.
	$imgPath = $_GET['p']; //Getting image
	$imgdelete = 'images/'.$imgPath;
	
	include 'connect.php';
	$sql="delete from Products_Data where id = '".$id."'"; //Matching with id and perform deletion
	$result = mysqli_query($mysqli,$sql);
	if($result)
	{
		unlink($imgdelete); //Unlinking the image from its folder
		header("Location: adminhome.php");
	}
?>