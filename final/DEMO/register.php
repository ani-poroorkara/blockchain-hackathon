<?php
			$servername="localhost";
			$username="root";
			$password='';
			$dbname="college";

			$conn = mysqli_connect($servername, $username, $password, $dbname);
            
            
			if (isset($_POST['btn2'])) 
            {
				$name =( $_POST['name']);
                $orgname =( $_POST['orgname']);
				$pno =($_POST['pno']);
                $email = ($_POST['email']);
				$pass =($_POST['pass']);
				$cpass =($_POST['cpass']);
                $aadhar = ($_POST['aadhar']);
                $debitcard = ($_POST['card']);
                $expirydate = ($_POST['expiry-date']);
                $cvv = ($_POST['cvv']);
				
				$sql1 = "SELECT * FROM users WHERE email = '$email'";
				$result =  mysqli_query($conn,$sql1);
				if (mysqli_num_rows($result)>0) {
					echo '<script type="text/javascript">alert("Email already exists!!!")</script> ';
				}
				else
                {
                    //if($x ==1)
      // {
                        $s="INSERT INTO users 
                       (name,organisationName,number,email,password,aadharNumber,cardNumber,cardDate,cvv) VALUES('$name','$orgname','$pno','$email','$pass','$aadhar','$debitcard','$expirydate','$cvv')";
    				    $result = $conn->query($s);

                        if ($result== TRUE)
                        {

                            header ("location:login.php" );
                        }
                        else
                        {
                            echo "<script>alert('Sign Up Failed'); window.location.href='login.php';</script>";
                        }
                   // }
                    
    		  }
            }
            
				

		?>