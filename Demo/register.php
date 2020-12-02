<?php
			$servername="localhost";
			$username="root";
			$password='';
			$dbname="college";

			$conn = mysqli_connect($servername, $username, $password, $dbname);
			if (isset($_POST['btn2'])) {
				$name =( $_POST['name']);
				$pno =($_POST['pno']);
				$username =($_POST['username']);
				$pass =($_POST['pass']);
				$cpass =($_POST['cpass']);
				$score = null;
				$sql1 = "SELECT * FROM student WHERE Username = '$username'";
				$result =  mysqli_query($conn,$sql1);
				if (mysqli_num_rows($result)>0) {
					echo '<script type="text/javascript">alert("Username already exists!!!")</script> ';
				}
				else{
					if ($pass==$cpass) {
						if (strlen((string)$pno)==10){
							$sql="INSERT INTO student VALUES('$name','$username','$pass',' ','$pno','1',' ',' ',' ')";
							$res = mysqli_query($conn,$sql);
							if($res) {
								echo '<script type="text/javascript">alert("You are now able to login!! Go back For Login")</script>';
                                header("location:login.html");
							}
							else{
								echo '<script type="text/javascript">alert("Some Problem while updating")</script> ';
							}
						}
						else{
							echo '<script type="text/javascript">alert("Enter Valid phone number")</script> ';
						}
					}
					else{
						echo '<script type="text/javascript">alert("Password and Confirm password does not match")</script>';
					}
				}
			}
		?>