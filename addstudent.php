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
			<marquee><h1 style="color:red;">Welcome To Admin Dashboard</h1></marquee>	
		</div>
		
		<div style="background-color:cyan; padding-top:20px; padding-left: 50px; padding-bottom:20px; ">
			<h1 style="text-align:center;">Insert Student Details</h1>
			<form class="form-horizontal" action="addstudent.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="rollno">Roll No</label>
					<input  name="roll" class="form-control" type="text" placeholder="Roll Number" style="width:50%;"><span id="fmesssage" style="color:blue;"><span>
				</div>
				<div class="form-group">
					<label for="fullname" >Full Name</label>
					<input  class="form-control" name="fullname" type="text" placeholder="fullname" style="width:50%;"><span id="lmesssage" style="color:blue;"><span>
				</div>
				<div class="form-group">
					<label for="city" >City</label>
						<input  class="form-control" name="city" type="text" placeholder="city" style="width:50%;"> <span id="Emesssage" style="color:blue;"><span>
				</div>
				<div class="form-group">
					<label for="pcontact" >Parents Contact No.</label>
						<input  class="form-control" name="pcontact" type="text" placeholder="Parents contact" style="width:50%;"> <span id="Emesssage" style="color:blue;"><span>
				</div>
				<div class="form-group">
					<label for="standard" >Standard</label>
						<input  class="form-control" name="standard" type="number" placeholder="standard" style="width:50%;"> <span id="Emesssage" style="color:blue;"><span>
				</div>
				<div class="form-group">
					<label for="image">Image</label>
						<input  class="form-control" name="image" type="file" value="Upload Image" style="width:50%;"> <span id="Emesssage" style="color:blue;"><span>
				</div>
				<button name="submit" type="submit" class="btn btn-success">Add Details</button>			
			<form>
		</div>
	</div>
	<?php include("showdata.php") ;?>
	
	<?php
	
		if(isset($_POST['submit']))
		{
			$Rollno = $_POST['roll'];
			$full_name = $_POST['fullname'];
			$city = $_POST['city'];
			$pcontact = $_POST['pcontact'];
			$standard = $_POST['standard'];
			$Original_image_name = $_FILES['image']['name'];
			$temp_image_name = $_FILES['image']['tmp_name'];
			
			include("../dbcon.php");
			move_uploaded_file($temp_image_name, "../dataimages/$Original_image_name");
			$qry = "INSERT INTO `student`(`RollNo`, `FullName`, `City`, `Pcontact`, `Standard`, `Image`) VALUES ('$Rollno','$full_name','$city','$pcontact','$standard','$Original_image_name')";
			
			$run = mysqli_query($con,$qry);
			
			 if($run == true)
			 {
				 ?>
					<script>
						alert("Data Added Successfully");
						header('location:addstudent.php');
					</script>
					
					
				 <?php
				
			 }
				 
			 else
				 echo "Error! ";
		}
	?>