<!DOCTYPE html>
<html>
	<head>
		<title>Student Management system</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
	</head>
	<body style="background-color:blue;">
		<div class="container" style="background-color:black;">
			<h4><a href="login.php" style="float:right; color:red; margin-left:20px;">Admin Login</a></h4>
			<h4><a href="adminsignup.php" style="float:right; color:red;">Admin Sign Up</a></h4>
			<marquee><h1 style="text-align:center; color:blue; ">Welcome To Student Management System</h1></marquee>
		</div>
		<div class="container" style="background-color:cyan;">
			<h1 style="text-align:center; color:white;">Search Student Details</h1>
			<form action="index.php" method="post"style=" margin-left:35%; padding-bottom:20px;">
				<label for="rollno" style="text-align:center; color:white;">Select Standard</label>
					<select class="form-control" name="std" style="width:50%;">
							<option value="1">First</option>
							<option value="2">Second</option>
							<option value="3">Third</option>
							<option value="4">Fourth</option>
							<option value="5">Fifth</option>
							<option value="6">Sixth</option>
							<option value="7">Seventh</option>
							<option value="8">Eight</option>
					</select><br>
				<label for="rollno" style="text-align:center; color:white;">Enter Roll No</label>
				<input type="text" name="rollno" class="form-control" style="width:50%;"></br>
				<button type="submit" name="submit"  class="btn btn-seccess">Show Details</button>				
			</form>
		</div>
	</body>
</html>
<?php
	if(isset($_POST['submit']))
	{
			$standard = $_POST['std'];
			$roll = $_POST['rollno'];
			
			include('dbcon.php');
			
			$sql = "SELECT * FROM `student` WHERE `Standard`='$standard' AND `RollNo`='$roll'";

			$run = mysqli_query($con,$sql);
			
			$row = mysqli_num_rows($run);
			
			if($row>0)
			{
				$data = mysqli_fetch_assoc($run);
				?>
				<div class="container">
					<table align="center" border="1" style="width:100%; color:white; margin-top:20px; ">
						<tr>
							<th colspan="3" style="text-align:center; padding:20px; background-color:black;">Student Information</th>
						</tr>
						<tr style="margin-top:2px;">
							<td rowspan="5" style="color:white; padding:10px; text-align:center;"><img src="dataimages/<?php echo $data['Image']?>" style='width:150px; height:150px;'></td>
							<th style="color:white; text-align:center; background-color:black;">Rollno</th>
							<td style="color:white; padding:10px; text-align:center;"><?php echo $data['RollNo'] ?></td>
						</tr>
						<tr>
							<th style="color:white; text-align:center; background-color:black;">Full Name</th>
							<td style="color:white; padding:10px; text-align:center;"> <?php echo $data['FullName'] ?> </td>
						</tr>
						<tr>
							<th style="color:white; text-align:center; background-color:black;">City</th>
							<td style="color:white; padding:10px; text-align:center;"><?php echo $data['City'] ?></td>
						</tr>
						<tr>
							<th style="color:white; text-align:center; background-color:black;">Parents contact</th>
							<td style="color:white; padding:10px; text-align:center;"><?php echo $data['Pcontact'] ?></td>
						</tr>
						<tr>
							<th style="color:white; text-align:center; background-color:black;">Standard</th>
							<th style="color:white; padding:10px; text-align:center;"><?php echo $data['Standard'] ?></th>
						</tr>
							
					</table>
				</div>
			<?php
			}
			else{
				?> 	<script>
						alert("record not found");
						window.open('index.php','_self');
					</script>
				<?php
			}
			
			
	}
?>