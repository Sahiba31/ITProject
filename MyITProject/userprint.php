<?php
	include 'connect.php';
	
	echo "<script>
				function showData(str) {
				if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
				} else {
				// code for IE6, IE5
				xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
				}
				xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
				document.getElementById('abc').innerHTML = '';
				document.getElementById('abc').innerHTML =
				this.responseText;
				}
				};
				xmlhttp.open('GET','getproductdetails.php?q='+str,true);
				xmlhttp.send();
				}
				
				function search()
				{
					var x = document.getElementById('search').value;
					if(x == '')
						return;
					if (window.XMLHttpRequest) {
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp = new XMLHttpRequest();
						} else {
						// code for IE6, IE5
						xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
						}
						xmlhttp.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
						document.getElementById('abc').innerHTML = '';
						document.getElementById('abc').innerHTML =
						this.responseText;
						}
						};
						xmlhttp.open('GET','usersearch.php?q='+x,true);
						xmlhttp.send();
				}
				window.onload=showData('*');
		</script>";
	echo "<center><br><Label id='dropDown'>Browse Category:&nbsp;</Label><select name='users' onchange='showData(this.value)'>
				<option value='*' selected>ALL</option>
				<option value='Appliances'>Appliances</option>
				<option value='Furniture'>Furniture</option>
				<option value='Vehicles'>Vehicles</option>
				<option value='Fashion'>Fashion</option>
			</select>&emsp;&emsp;&emsp;&emsp;
			<input type='text' name='t1' id='search' placeholder='Search Anything' />&nbsp;<input type='submit' value='Search' id='submitt' onclick='search()'/>
			</center>";
			
	echo "<center></center>";
	
	echo "<div id='abc'></div>";
?>