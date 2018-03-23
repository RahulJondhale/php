<?php
	include('../dbcon.php');
			$Rollno = $_POST['roll'];
			$full_name = $_POST['fullname'];
			$city = $_POST['city'];
			$pcontact = $_POST['pcontact'];
			$standard = $_POST['standard'];
			$id = $_POST['sid'];
			$Original_image_name = $_FILES['image']['name'];
			$temp_image_name = $_FILES['image']['tmp_name'];
			
			include("../dbcon.php");
			move_uploaded_file($temp_image_name, "../dataimages/$Original_image_name");
			$qry = "UPDATE `student` SET `RollNo`='$Rollno',`FullName`='$full_name',`City`='$city',`Pcontact`='$pcontact',`Standard`='$standard',`Image`='$Original_image_name' WHERE `id`='$id'";
			
			$run = mysqli_query($con,$qry);
			
			 if($run == true)
			 {
				 ?>
				<script>
					alert("data Updated Successfully");
					window.open('updateform.php?sid=<?php echo $id; ?>','_self');
				 </script>
				 <?php
			 }
			 else
				 echo "Error! ";
?>