<!DOCTYPE html>
<html lang="en">
<head>
	<title>Hacks</title>
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
    <link type="text/css" rel="stylesheet" href="css/libs/adp.css">
</head>
<body>
	<div id = "Start">
        <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" id="sign-in-img">
					<span class="login100-form-title-1">
						<h2>FinTech</h2>
					</span>
				</div>
                    <form class="login100-form validate-form" method="post" action= "login.php">
                        <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                            <a href = "#" class="login100-form-btn" id = "signIn">Sign In</a>
                        </div>
                        <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                            <a href = "#" class="login100-form-btn" id = "signUp">Sign Up</a>
                        </div>
                        
                </form>
            </div>
            </div>
        </div>
        
    </div>
    
    
    
    
  <div id = "SignInBlock">  
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" id="sign-in-img">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>

				<form class="login100-form validate-form" method="post" action= "loginCheck.php">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Email ID</span>
						<input class="input100" type="text" name="email" placeholder="Enter email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
						</div>

						
					</div>

					<div class="container-login100-form-btn" >
						<input type="submit" value="Login" class="login100-form-btn" name="btn1">
                        <a href = "#" class = "login100-form-btn" id = "backButton">Back</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
    
<div id = "SignUpBlock">
    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" id="sign-in-img">
					<span class="login100-form-title-1">
						Verify Aadhar number
					</span>
				</div>
                 <form class="login100-form validate-form" method="post" action="adhar_Check.php" >
					<div class="wrap-input100 validate-input m-b-26" data-validate="aadhar is required">
						<span class="label-input100">Aadhar</span>
						<input class="input100" type="text" name="aadhar" placeholder="Enter aadhar no.">
						<span class="focus-input100"></span>
					</div>
					

					<div class="container-login100-form-btn" >
						<input type="submit" value="Proceed" class="login100-form-btn" name="btn2">
					</div>
				</form>
				
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
    
     <script type= "text/javascript" src="js/signInUp.js"></script>
    <script type="text/javascript" src="js/adp.js"></script>

</body>
</html>