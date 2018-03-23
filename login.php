<?php
	session_start();
	if(isset($_SESSION['uid']))
	{
		header('location:admin/admindash.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
	<body style="background-color:green;">
		<div class="container" style="background-color:black;">
			<div style="background-color:black;">
				<a href="index.php"style="float:left; font-size:20px; color:red;">Back To Dashboard</a>
				<marquee><h1 style="color:red;">Welcome To Admin Dashboard</h1></marquee>	
			</div>
		</div>
		<div class="container" style="background-color:cyan;">
			<div class="row">
				<div class="col-md-12">
					<h1 style="text-align:center;">Admin Login Form</h1></br>
						<form action="login.php" method="post" class="form-horizontal AdminSignIn-Custom-form" data-toggle="validator" style="margin-left:20%;">
							<div class="form-group">
								<label for="email" id="Adminemail" class="control-label col-md-2">Username :</label>
								<div class="col-md-10">
									<input name="username" id="Adminiemail" class="form-control" type="text" placeholder="Email" required style="width:50%;"></br>
								</div>
							</div>
							<div class="form-group">
								<label for="password" id="Adminpassword" class="control-label col-md-2">Password:</label>
								<div class="col-md-10">
									<input name="password" id="Adminipassword" class="form-control" type="password" placeholder="password" required style="width:50%;"></br>
								</div>`
							</div>
							<div class="form-group">
								<div class="col-md-offset-2 col-md-10">
									<input type="submit" name="login" value="Login" class="btn btn-default">
								</div>
							</div>
						<form>
				</div>
			</div>
		</div>
	</body>
</html>
<?php

	include("dbcon.php");
	 
	 if(isset($_POST['login']))
	 {
		 $username = $_POST['username'];
		 $password = $_POST['password'];
		 
		$qry = "SELECT * FROM `adminlogin` WHERE `username`='$username' AND `password`='$password'";
		
		$run = mysqli_query($con,$qry);
	
		$row = mysqli_num_rows($run);
		
		if($row <1)
		{
			?>
			<script>
				alert("username or password not match !!");
				window.open("login.php","_self");
			</script>
			<?php
		}
		else{
			$data = mysqli_fetch_assoc($run);
			
			$id = $data['id'];
		
			$_SESSION['uid'] = $id;
			header('location:admin/admindash.php');
		}
	 }
?>