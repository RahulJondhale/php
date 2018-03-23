<?php
	session_start();
			
			if(isset($_SESSION['uid']))
			{
				echo "";
			}
			else{
				header("location:../login.php");
			}
?>
		
		
<?php
	include("header.php");
?>
	<div class="container">
		<div style="background-color:black;">
			<a href="../index.php"style="float:left; font-size:20px; color:red;">Back To Dashboard</a>
			<a href="Adminlogout.php"style="float:right; font-size:20px; color:red;">Logout</a>
			<marquee><h1 style="color:red;">Welcome To Admin Dashboard</h1></marquee>	
		</div>	
		<div align="center" style=" padding:30px; background-color:cyan;">
			<a href="addstudent.php" style="font-size:20px; style-type:none; color:red;">1. Insert Student details</a><br><br>
			<a href="updatestudent.php" style="font-size:20px; style-type:none; color:red;">2. Update Student details</a><br><br>
			<a href="deletestudent.php" style="font-size:20px; style-type:none; color:red;">3. Delete Student details</a><br><br>
		</div>
	</div>
	