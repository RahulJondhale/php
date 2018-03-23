<!DOCTYPE html>
</html>
	<head>
		<title>Sign Up</title>
		 <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		  <link rel="stylesheet" href="style.css">
		  <script src="script.js"></script>
	</head>
<body style="background-color:green">
		<div class="row">
			<div class="col-md-12">
				<h1 style="text-align:center; color:red;">Sign Up Form</h1></br>
				<form class="form-horizontal Custom-form" id="SignUpForm" name="SignUpForm" onsubmit="validateform()" style="margin-left:30%;">
				<div class="form-group">
					<label for="firstname" id="Afirstname" class="control-label col-md-2">Firstname</label>
					<div class="col-md-10">
						<input id="Aifirstname" name="firstname" minlength=3 class="form-control" type="text" placeholder="firstname" required style="width:50%;"></br>
					</div>
				</div>
				<div class="form-group">
					<label for="lastname" id="Alastname" minlength=3 class="control-label col-md-2">Lastname</label>
					<div class="col-md-10">
						<input id="Ailastname" class="form-control" type="text" placeholder="lastname" required style="width:50%;"></br>
					</div>
				</div>
				<div class="form-group">
					<label for="email" id="Aemail" class="control-label col-md-2" >Email</label>
					<div class="col-md-10">
						<input id="Aiemail" class="form-control" type="email" placeholder="Email" required style="width:50%;"></br>
					</div>
				</div>
				<div class="form-group">
					<label for="password" id="Apassword" class="control-label col-md-2" >Password</label>
					<div class="col-md-10">
						<input id="Aipassword" class="form-control" minlength=8  type="password" placeholder="password" required style="width:50%;"></br>
					</div>
				</div>
				<div class="form-group">
					<label for="comfirm password" id="Acomfirmpassword" minlength=8 class="control-label col-md-2" >Comfirm Password</label>
					<div class="col-md-10">
						<input id="Aicomfirm-password" class="form-control" type="password" placeholder="confirm password" required style="width:50%;">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-offset-2 col-md-10">
						<input type="checkbox">
						<button id="Airemember" class="btn btn-default">Remember me</button>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-offset-2 col-md-10">
						<button id="Aisignup" class="btn btn-default">Sign Up</button>
					</div>
				</div>
				<form>
			</div>
		</div>	
	</body>
</html>