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
		
		<h1 style="text-align:center;">Update Student Details</h1>
		<form action="updatestudent.php" method="post" >
			<div class="form-group" style="margin-top:20px; margin-left:10%;">
				<input type="number" name="standard" placeholder="Enter standard" class="form-control" style="width:40%; float:left;">
				<input type="text" name="name" placeholder="Enter Student name" class="form-control" style="width:40%; float:left;">
				<button type="submit" name="search" class="btn btn-primary">Search</button>
			</div>
		</form>


<table align="center" border="2" style="width:100%;">
	<tr style="background-color:black; color:white;">
		<th style="text-align:center;">No</th>
		<th style="text-align:center;"> Image </th>
		<th style="text-align:center;">Name</th>
		<th style="text-align:center;">Roll No</th>
		<th style="text-align:center;">Edit</th>
	</tr>
	
	<?php
	
	
	if(isset($_POST['search']))
	{
		include("../dbcon.php");
		
		$standard = $_POST['standard'];
		$name = $_POST['name'];
		
		$sql = "SELECT * FROM `student` WHERE `Standard`='$standard' AND `FullName` LIKE '%$name%'";
		
		$run = mysqli_query($con,$sql);
		
		$row = mysqli_num_rows($run);
	
		if($row<1)
		{
			echo "<tr><td colspan=5>No record found</td></tr>";
		}
		
		else{
			
			$count=0;
			while($data = mysqli_fetch_assoc($run))
			{
				$count++;
				?>
				<tr>
					<td style="text-align:center;"><?php $count ?></td>
					<td style="text-align:center;"><img src="../dataimages/<?php echo $data['Image']; ?>" style="max-width:100px;"/> </td>
					<td style="text-align:center;"><?php echo $data['FullName']?></td>
					<td style="text-align:center;"> <?php echo $data['RollNo']?></td>
					<td style="text-align:center;"><a href="updateform.php?sid=<?php echo $data['id']; ?>">Edit</a></td>
				</tr>
				<?php
			}
			
		}
		
	}
	
	
?>


</table>
</div>