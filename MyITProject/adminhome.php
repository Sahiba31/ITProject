<?php
	include 'connect.php';
	$result = mysqli_query($mysqli, "SELECT * FROM Products_Data"); //Making connection and fetching details of products_data table.
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Home Page</title>
		<link rel="stylesheet" href="css/print.css">
	</head>
	<body>
		<h1><center>Products</center></h1><br/>
		<?php
			include 'print.php';  //Show all the products with details.
		?>
		<div id="topright">
			<a href="insertData.php" id="H_topRight">Upload Products  <i class="fa fa-upload" style="font-size:24px"></i></a><br/> 
			<a href="login.php" id="H_topRight">LogOut <i class="fa fa-sign-out" style="font-size:24px"></i></a><br/> 
		</div>
	</body>
</html>