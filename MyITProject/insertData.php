<?php
	$showalert = false;
	$showerror = false;
	session_start();
	$uid = $_SESSION['uid'];
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		include 'connect.php';
		
		$title = $_POST["title"]; //Store the data in some variables.
		$category = $_POST["category"];
		$pur_year = $_POST["pur_year"];
		$price = $_POST["price"];
		$add_info = $_POST["add_info"];
		$contact = $_POST["contact"];
		$datee = date('Y-m-d',time());
		
		$image =  $_FILES["image"]["name"];  //Storing the image
		$tempname = $_FILES["image"]["tmp_name"];	//tempname is variable given by $_FILES
		$target = "images/".basename($image); //Specify the destination folder

		$fileType1 = strtoupper(pathinfo($target,PATHINFO_EXTENSION)); //For Validation purpose
		
		$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
		if ($mysqli->connect_error) {
			die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	
	if(!empty($_FILES["image"]["name"])){   
		// Allow certain file formats
		$allowTypes1 = array('JPG','JPEG','PNG','TIF');
		if(in_array($fileType1, $allowTypes1)){
			// Upload file to server
			if(move_uploaded_file($tempname, $target)){
				// Insert image file name into database
				$statement = "INSERT INTO Products_Data(Title, Category, Purchased_Year, Price, Contact,  Additional_Information, Image, Uploaded_Date) 
					VALUES('$title', '$category', '$pur_year', '$price', '$contact', '$add_info', '$image', '$datee')"; 
				$insert = $mysqli->query($statement);
				if($insert){
					$showalert = "The file ".$title. " has been uploaded successfully.";
				}else{
					$showerror = "File upload failed, please try again.";
					$showerror = $insert;
				} 
			}
			else{
				$showerror = "Sorry, there was an error uploading your file.";
				
			}
		}
		else{
			$showerror = 'Sorry, only Image(JPG,JPEG,PNG,&TIF) are allowed to upload.';
			
		}
	}
	else{
		$showerror = 'Please select a file to upload.';
	}
	
	$mysqli->close();
}
?>

<html>
	<head>
		<title>Upload Page</title>
		<link rel="stylesheet" href="css/insertData.css">
		<script src="scripts/insertData.js"></script>
	</head>
	<body>
	<div id="content">
		<?php
			if($showalert){
			   echo '<div class="success" style=" width: 300px; text-align: center;    background-color: #0066FF ;margin : 20px auto;">
				<strong>Success! </strong> Success.</br>'.$showalert.'</div>';}
			if($showerror){
			   echo '<div class="success" style=" width: 300px; text-align: center;    background-color: rgb(255,0,0);margin : 20px auto;">
				<strong>Error! </strong>'.$showerror.'</div>';}
		?>
	
		<h1> POPUSH.COM </h1>
		<h1>Upload Product Details</h1>
		<form name="myForm" method="POST" action="insertData.php" enctype="multipart/form-data" onsubmit="return validateForm()">
			<div id="insert_div">
			<label>Title: </label><input type="text" name="title" placeholder="ABC For Sale"><br><br>
			<label>Category: </label>
			<select name = "category">
				<option value='Appliances' selected>Appliances</option>
				<option value='Furniture'>Furniture</option>
				<option value='Vehicles'>Vehicles</option>
				<option value='Fashion'>Fashion</option>
			</select><br><br>
			<label>Purchased Year: </label><input type="number" name="pur_year" placeholder="Purchased Year"><br><br>
			<label>Price: </label><input type="number" name="price" placeholder="At what price to sell"><br><br>
			<label>Contact: </label><input type="number" name="contact" placeholder="Mobile Number"><br><br>
			<p class = "formfield">
			<label for = "textarea">Additional Information: </label>
			<textarea id = "textarea" rows = "5" cols = "25" name="add_info" placeholder="Includes Condition, Features and Reason for selling"></textarea><br><br></p>
			<input type="hidden" name="size" value="1000000">
			<div>
			<label>	Upload Image: </label><input type="file" name="image">
			</div>
			<br/>
			<input type="submit" value="Submit">&nbsp;&nbsp;
			<input type="reset">
			<br/><br/>
		</form>
		<?php
				if($uid != 1){  //For redirecting to proper pages
					echo "<a href='userhome.php'>Return to HomePage</a><br/>";
				}
				else
				{
					echo "<a href='adminhome.php'>Return to HomePage</a><br/>";
				}
		?>
	</body>
</html>