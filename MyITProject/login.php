<?php
	$showerror = false;
	include 'make.php';
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		include 'connect.php';	
		
		$u_mail = $_POST["email"];     //Storing in some variables
		$u_pass = $_POST["password"];
		$psw = md5($u_pass);  //Encrypting the password
		
		$query = "SELECT * from `User_Data` WHERE `Email`='$u_mail' AND  `Password`='$psw' "; //Matching with actual email and password
		$result = mysqli_query($mysqli, $query);
		$num = mysqli_num_rows($result);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		session_start();
		$_SESSION['uname']=$row['Title'];
		$_SESSION['uid']=$row['id'];
		
		if($num == 1 && $row['Admin_Access'] == "Yes")
		{
			header("Location: adminhome.php");
		}
		else if($num == 1 && $row['Admin_Access'] == "No")
		{
			header("Location: userhome.php");
		}
		else
		{
			$showerror = "Invalid Login Credentials.";
		}
		$mysqli->close();
	}
?>

<html>
	<head>
		<script src="scripts/loginScript.js"></script>
		<link rel="stylesheet" href="css/login.css">
	</head>
	<body>
	<?php
		if($showerror){
		   echo '<div class="success" style=" width: 300px; text-align: center;    background-color: rgb(255,0,0) ;margin : 20px auto;">
			<strong>Error! </strong>'.$showerror.'</div>';}
	?>
		<h1> POPUSH.COM </h1>
		<center>
		<fieldset>
			<form name="myForm" method="post" action="login.php" onsubmit="return validateForm()">
			<h2>Login</h2>
				<label> Email-ID : </label><input type="text" name="email" placeholder="Enter your Email" /><br/><br/>
				<label> Password : </label><input type="password" name="password" placeholder="Enter your password" /><br/><br/>
				<input type="submit" value="Login" />
				<br/><br/>
				<a href="register.php">New User? Register Here!</a><br/>
				<a href="forgot.php">Forgot Password? Click Here!</a><br/>
			</form>
		</fieldset>	
		</center>
	</body>
</html>