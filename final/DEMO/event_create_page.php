<?php
        session_start();

    if(!(isset($_SESSION['email']) && $_SESSION['email'] != ''))
	{
		echo "<script>alert('Login Required'); window.location.href='login.php';</script>";
		
	}
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register Now</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" id="sign-in-img">
					<span class="login100-form-title-1">
						Create Event Now
					</span>
				</div>

				<form class="login100-form validate-form" method="post" action="event_create.php" >
					<div class="wrap-input100 validate-input m-b-26" data-validate="Title is required">
						<span class="label-input100">Title</span>
						<input class="input100" type="text" name="Title" placeholder="Enter Title">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Content is required">
						<span class="label-input100">Content</span>
						<input class="input100" type="text" name="Content" placeholder="Enter Content">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Subtitle1 is required">
						<span class="label-input100">SubTitle1</span>
						<input class="input100" type="text" name="Subtitle1" placeholder="Enter SubTitle1 no">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Subcontent1 is required">
						<span class="label-input100">Subcontent1</span>
						<input class="input100" type="text" name="Subcontent1" placeholder="Enter Subcontent1">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "SubTitle2 is required">
						<span class="label-input100">Subtitle2</span>
						<input class="input100" type="text" name="Subtitle2" placeholder="Enter SubTitle2">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Subcontent2 is required">
						<span class="label-input100">Subcontent2</span>
						<input class="input100" type="text" name="Subcontent2" placeholder="Enter Subcontent2">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "AAdhar number is required">
						<span class="label-input100">Select a file to upload</span>
						<input class="input100" type="file" name="Image" placeholder="select a file ">
						<span class="focus-input100"></span>
					</div>

					<br><br><br>

					<div class="container-login100-form-btn" >
						<input type="submit" value="Proceed" class="login100-form-btn" name="btn2">
					</div>
                    
                    
				</form>
             <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Step 1</div>
</div>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>