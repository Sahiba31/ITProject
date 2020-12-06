<?php
	$mysql_host = "localhost";
	$mysql_username = "root";
	$mysql_password = "";
	$mysql_database = "MyITProject";

	//Establishing a connection with MYSQL DB
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);

	//Self Checking if our program can't able establish a connection with DB then this if block will execute
	if ($mysqli->connect_error) 
	{
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
?>