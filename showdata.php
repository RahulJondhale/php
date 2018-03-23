<?php	 
	 $con = mysqli_connect("localhost", "root" , "" ,"schooldata");
	 
	 function showdata()
	 {
		 global $con;
		 $Query = "SELECT * FROM `student`";
		 
		$run = mysqli_query($con,$Query);
		
		if($run==true){
			?>
				<table border="1" width=50% align="center" style="margin-top:50px;">
				<tr >
					<th style="margin:200px; text-align:center; font-family:Courier">Id</th>
					<th style="margin:200px; text-align:center; font-family:Courier">Roll no</th>
					<th style="margin:200px; text-align:center; font-family:Courier">Full Name</th>
					<th style="margin:200px; text-align:center; font-family:Courier">City</th>
					<th style="margin:200px; text-align:center; font-family:Courier">Parents Contact</th>
					<th style="margin:200px; text-align:center; font-family:Courier">Standard</th>
					<th style="margin:200px; text-align:center; font-family:Courier">Image</th>
				</tr>
			<?php
			while($data = mysqli_fetch_assoc($run))
			{
				?>
				<tr>
					<td style="margin:200px; text-align:center; font-family:Courier"><?php echo $data['id'] ?></td>
					<td style="margin:200px; text-align:center; font-family:Courier"><?php echo $data['RollNo'] ?></td>
					<td style="margin:200px; text-align:center; font-family:Courier"><?php echo $data['FullName'] ?></td>
					<td style="margin:200px; text-align:center; font-family:Courier"><?php echo $data['City'] ?></td>
					<td style="margin:200px; text-align:center; font-family:Courier"><?php echo $data['Pcontact'] ?></td>
					<td style="margin:200px; text-align:center; font-family:Courier"><?php echo $data['Standard'] ?></td>
				</tr>
				<?php
				
			}
		
			?></table><?php
		}
		
		else
			echo "error!";
	}
	
?>

<html>
<head>
</head>
<body>
	<?php showdata() ;?>
</body>
</html>