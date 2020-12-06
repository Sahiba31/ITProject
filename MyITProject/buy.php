<?php
	$showalert = false;  //Global Variables
	$showerror = false;
	session_start();   
	$uid = $_SESSION['uid'];
	$q = $_GET['q'];
?>
<html>
	<head>
		<title>Payment Page</title>
		<link rel="stylesheet" href="css/insertData.css">
		<script src="scripts/payment.js"></script>
	</head>
	<body>
	<div id="content">
		<?php
			if($showalert){
			   echo '<div class="success" style=" width: 300px; text-align: center; background-color: #0066FF; margin : 20px auto;">
				<strong>Success! </strong> Success.</br>'.$showalert.'</div>';}
			if($showerror){
			   echo '<div class="success" style=" width: 300px; text-align: center; background-color: rgb(255,0,0); margin : 20px auto;">
				<strong>Error! </strong>'.$showerror.'</div>';}
		?>
	
		<h1> POPUSH.COM </h1>
		<h1>Payment Details</h1>
		<?php
			echo "<form name='myForm' method='POST' action='orderPlace.php' enctype='multipart/form-data' onsubmit = 'return validateForm()'>";
		?>
		<div id="insert_div">
		<p><h2>Please Choose your Payment Method:</h2></p>
			<input type="radio" id="debit" name="payment" value="debit" checked="checked">
			<label for="debit">Debit Card</label>&nbsp;&nbsp;
			<input type="radio" id="credit" name="payment" value="credit">
			<label for="credit">Credit Card</label><br><br>
		
			<label>Cardholder's  Name: </label><input type="text" name="name" placeholder="cardholder"><br><br>
			<label>Card Number: </label><input type="password" name="card" placeholder="Card Number"><br><br>
			<label>Valid Thru: </label><input type="month" name="valid" ><br><br>
			<label>CVV: </label><input type="password" name="cvv" placeholder="3-digit code"><br><br>
			<label><b>Total Amount: </b></label><label class = "label1"><b><?php echo "Rs."."$q";?></b></label><br><br>
			<input type="submit" value="Check Out"> 
		<br/><br/>
		</form>
		
		<?php
				if($uid != 1){    //For admin id will always be 1, so if id not equal to 1 it goes to userHome page otherwise adminHome page.
					echo "<a href='userhome.php'>Return to HomePage</a><br/>";
				}
				else
				{
					echo "<a href='adminhome.php'>Return to HomePage</a><br/>";
				}
		?>
	</body>
</html>