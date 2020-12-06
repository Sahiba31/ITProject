<?php
	$showalert = false;  //Global variables
	$showerror = false;
	session_start();
	$uid = $_SESSION['uid'];
?>
<html>
	<head>
		<title>Thank You</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/insertData.css">
		<style> 
			#insert_div{
			width: 50%;
		    }
			div.stars {
			  width: 270px;
			  display: inline-block;
			}

			input.star { display: none; }

			label.star {
			  float: right;
			  padding: 10px;
			  font-size: 35px;
			  color: #444;
			  transition: all .2s;
			}

			input.star:checked ~ label.star:before {
			  content: '\f005';
			  color: #FD4;
			  transition: all .25s;
			}

			input.star-5:checked ~ label.star:before {
			  color: #FE7;
			  text-shadow: 0 0 20px #952;
			}

			input.star-1:checked ~ label.star:before { color: #F62; }

			label.star:hover { transform: rotate(-15deg) scale(1.3); }

			label.star:before {
			  content: '\f006';
			  font-family: FontAwesome;
			}
			.label1 {
			font-size: 20px;
			color: white;
			}
		</style>
	</head>
	<body>
	<div id="content">
		<?php
			if($showalert){
			   echo '<div class="success" style=" width: 300px; text-align: center;    background-color: rgb(158, 219, 45);margin : 20px auto;">
				<strong>Success! </strong> Success.</br>'.$showalert.'</div>';}
			if($showerror){
			   echo '<div class="success" style=" width: 300px; text-align: center;    background-color: rgb(255,0,0);margin : 20px auto;">
				<strong>Error! </strong>'.$showerror.'</div>';}
		?>
	
		<h1> POPUSH.COM </h1>
		<h2>Order Confirmed</h2>
		<div id="insert_div">
		<label class="label1"><b>Thank You for Visiting.<br/>Your order has been placed.<br/>It will be delivered soon.</b><br/><br><br><h3>Help us improve by providing your valuable Feedback</h3></label>		<div class="stars">
			  <form action="">
			    <input class="star star-5" id="star-5" type="radio" name="star"/>
				<label class="star star-5" for="star-5"></label>
				<input class="star star-4" id="star-4" type="radio" name="star"/>
				<label class="star star-4" for="star-4"></label>
				<input class="star star-3" id="star-3" type="radio" name="star"/>
				<label class="star star-3" for="star-3"></label>
				<input class="star star-2" id="star-2" type="radio" name="star"/>
				<label class="star star-2" for="star-2"></label>
				<input class="star star-1" id="star-1" type="radio" name="star"/>
				<label class="star star-1" for="star-1"></label>
			  </form>
		</div><br/>
		<?php
				if($uid != 1){
					echo "<a href='userhome.php'>Return to HomePage</a><br/>";
				}
				else
				{
					echo "<a href='adminhome.php'>Return to HomePage</a><br/>";
				}
		?>
	</body>
</html>