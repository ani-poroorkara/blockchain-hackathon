<?php
            
			$servername="localhost";
			$username="root";
			$password='';
			$dbname="college";
            
                        
            
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			

            if(!$conn)
            {
                 die("Connection failed:".mysqli_connect_error());
            }
            else
            {
             //echo "connection estblished to database";

            }
             
            $aadhar=mysqli_real_escape_string($conn,$_POST["aadhar"] ); 
             $s = "SELECT * FROM aadhar_db WHERE number = '$aadhar'";
             $result = $conn->query($s);
            if ($result) 
            {
                header ("location:adhar_Check.html" );
            }
            else
            {
                echo '<script type="text/javascript">alert("Invalid Aadhar Number (*-*)")</script>';
                echo '<script type="text/javascript"> window.location.assign("login.php")</script>';
            }

?>