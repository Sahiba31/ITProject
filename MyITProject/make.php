<?php
	$mysql_host = "localhost";
	$mysql_username = "root";
	$mysql_password = "";
	$mysql_database = "MyITProject";
	
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password);
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	
	$sql = "CREATE DATABASE IF NOT EXISTS MyITProject"; //Creaing database named MyITProject
	if($mysqli->query($sql) == TRUE)
	{
		$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
		if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
		}
		
		//Creating table for users
		$table = 
		"CREATE TABLE IF NOT EXISTS User_Data (id int(11) AUTO_INCREMENT,  
														Name varchar(100) NOT NULL,
														Email varchar(100) NOT NULL,
														Phone varchar(10) NOT NULL,
														Password varchar(100) NOT NULL,
														Admin_Access varchar(40) NOT NULL,
														KEY (id),
														PRIMARY KEY (Email))";
						 
		$mysqli->query($table);
		
		//Creating table for products
		$table2 = 
		"CREATE TABLE IF NOT EXISTS Products_Data (id int(11) AUTO_INCREMENT,  
														Title varchar(100) NOT NULL,
														Category varchar(100) NOT NULL,
														Purchased_Year varchar(100) NOT NULL,
														Price varchar(100) NOT NULL,
														Contact varchar(100) NOT NULL,
														Image varchar(100) NOT NULL,
														Uploaded_Date date NOT NULL,
														Additional_Information varchar(200) NOT NULL,
														PRIMARY KEY (id))";
		
		$mysqli->query($table2);
	}
	else
	{
		$showerror = "Error Creating DB";
	}
	
	//Creating admin. You just have to login now, no need to register for admin
	$query = "SELECT * from `User_Data` WHERE `Email`='admin@gmail.com'";
	$result = mysqli_query($mysqli, $query);
	$num = mysqli_num_rows($result);
	$pass = "123456789";
	$psw = md5($pass);
	if($num == 0)
	{
		$statement = "INSERT INTO User_Data (Name, Email, Phone, Password, Admin_Access) 
						VALUES('Admin', 'admin@gmail.com', '8288945344', '$psw', 'Yes')";
		
		$mysqli->query($statement);
	}
?>