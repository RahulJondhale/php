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
	include("../dbcon.php");
	$sid = $_GET['sid'];
	
	
	$sql = "SELECT * FROM `student` WHERE `id`='$sid'";
	
	$run = mysqli_query($con,$sql);
	
	$data = mysqli_fetch_assoc($run);
	
	
?>
	<div class="container">
		<div style="background-color:black;">
			<a href="../index.php"style="float:left; font-size:20px; color:red;">Back To Dashboard</a>
			<a href="Adminlogout.php"style="float:right; font-size:20px; color:red;">Logout</a>
			<marquee><h1 style="color:red;">Welcome To Admin Dashboard</h1></marquee>	
		</div>	
		<div style="background-color:cyan; padding-top:20px; padding-left: 50px; padding-bottom:20px; ">
			<h1 style="text-align:center;">Update Student Details</h1>
			<form class="form-horizontal" action="updatedata.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="rollno">Roll No</label>
					<input  name="roll" class="form-control" type="text" value="<?php echo $data['RollNo'] ;?>"  style="width:50%;"><span id="fmesssage" style="color:blue;"><span>
				</div>
				<div class="form-group">
					<label for="fullname" >Full Name</label>
					<input  class="form-control" name="fullname" type="text" value="<?php echo $data['FullName'] ;?>"  style="width:50%;"><span id="lmesssage" style="color:blue;"><span>
				</div>
				<div class="form-group">
					<label for="city" >City</label>
						<input  class="form-control" name="city" type="text" value="<?php echo $data['City'] ;?>"  style="width:50%;"> <span id="Emesssage" style="color:blue;"><span>
				</div>
				<div class="form-group">
					<label for="pcontact" >Parents Contact No.</label>
						<input  class="form-control" name="pcontact" type="text" value="<?php echo $data['Pcontact'] ;?>"  style="width:50%;"> <span id="Emesssage" style="color:blue;"><span>
				</div>
				<div class="form-group">
					<label for="standard" >Standard</label>
						<input  class="form-control" name="standard" type="number" value="<?php echo $data['Standard'] ;?>"  style="width:50%;"> <span id="Emesssage" style="color:blue;"><span>
				</div>
				<div class="form-group">
					<label for="image">Image</label>
						<input  class="form-control" name="image" type="file" value="Upload Image" style="width:50%;"> <span id="Emesssage" style="color:blue;"><span>
				</div>
				<input type="hidden" name="sid" value="<?php echo $data['id'] ; ?>">
				<button name="submit" type="submit" class="btn btn-success">Add Details</button>			
			<form>
		</div>
	</div>