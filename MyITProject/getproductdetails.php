<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/get.css">
	</head>
	<body>
		<?php
			$q = $_GET['q'];
			$con = mysqli_connect('localhost','root','','MyITProject');
			if (!$con) {
			die('Could not connect: ' . mysqli_error($con));
			}
			$sql="";
			if($q == '*')
			{
				$sql = "SELECT * FROM Products_Data";
			}
			else
			{	
				$sql="SELECT * FROM Products_Data WHERE Category = '".$q."'";
			}
			$result = mysqli_query($con,$sql);
			while($row = mysqli_fetch_array($result)) {
				//For Users
				echo "<div id='img_div'>"; //Displaying the product details
				echo "<img src='images/".$row['Image']."'>";
				echo "<p><b><label>&nbsp;Title: </b></label><label>".$row['Title']."</label></p>";
				echo "<p><b><label>&nbsp;Category: </b></label><label>".$row['Category']."</label></p>";
				echo "<p><b><label>&nbsp;Purchased Year: </b></label><label>".$row['Purchased_Year']."</label></p>";
				echo "<p><b><label>&nbsp;Price: </b></label><label>".$row['Price']."</label></p>";
				echo "<p><b><label>&nbsp;Contact: </b></label><label>".$row['Contact']."</label></p>";
				echo "<p><b><label>&nbsp;Additional Information: </b></label><label>".$row['Additional_Information']."</label></p>";
				echo "<p><b><label>&nbsp;Uploaded Date: </b></label><label>".$row['Uploaded_Date']."</label></p>";
				echo "<a href='buy.php?q=".$row['Price']."' class='button' style='float: right; margin-right:20px; margin-top:-35px; font-size: 25px;'>&nbsp;Buy Now&nbsp;</a>&nbsp;&nbsp;";
				echo "</div>";
			}
			if(mysqli_num_rows($result) == 0)
				echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><center><h1>No Result Found</h1></center>";
			mysqli_close($con);
		?>
</body>
</html>