<?php
	$showerror = false; //Global Varaible
    if($_SERVER["REQUEST_METHOD"] == "POST"){		
		include 'connect.php';						
		
        $email = $_POST["email"];			
        $phone = $_POST["phone"];				
        $newpassword = $_POST["newpass"];						
		
        $sql = "SELECT * from `User_Data` WHERE `Email`='$email' AND  `Phone`='$phone' ";		//Matching correct email and phone number
        $result = mysqli_query($mysqli,$sql);
        $num = mysqli_num_rows($result);			
 
        if($num == 1)
		{								
            $newpass = md5($newpassword);		//Encryping the password	
            $update = "UPDATE `User_Data` SET `Password` = '$newpass' WHERE `User_Data`.`Email` = '$email'";	
            $retval = mysqli_query($mysqli,$update);		
 
            if(!$retval ) {
				echo "Something is Wrong. Try Again.";
            }
            else{
                echo '<script>alert("Password Reset Success.")</script>';		
				
            }
		}
        else{
            $showerror = "Credentials do not match";						
        }
        mysqli_close($mysqli);				
	}
?>

<html>
	<head>
		<script src="scripts/forgotScript.js"></script>
		<link rel="stylesheet" href="css/forgot.css">
	</head>
	<body>
		<?php
		if($showerror){
		   echo '<div class="success" style=" width: 300px; text-align: center;    background-color: rgb(255,0,0);margin : 20px auto;">
			<strong>Error! </strong>'.$showerror.'</div>';}
		?>
		<h1> POPUSH.COM </h1>
		<center>
		<div id = "divForgot">
			<form name="myForm" method="post" action="forgot.php" onsubmit="return validateForm()">
				<h2>Reset Password</h2>
					<label>Email-ID : </label><input type="text" name="email" placeholder="Enter Your Email-ID" /><br/><br/>
					<label>Registered Mobile No. : </label><input type="text" name="phone" placeholder="Enter Your Phone Number" /><br/><br/>
					<label>New Password : </label><input type="password" name="newpass" placeholder="Enter Your New Password" /><br/><br/>
					<input type="submit" value="Reset" />
			</form>
			<br/><br/>
			<a href="login.php">Click here to Login</a>
		</center>
	</body>
</html>