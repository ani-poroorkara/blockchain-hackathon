<?php
    session_start();
	$servername="localhost";
	$username="root";
	$password='';
	$dbname="college";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	$email =mysqli_real_escape_string($conn,$_POST["email"] ); 
    $pass =mysqli_real_escape_string($conn,$_POST["pass"] );

		$s = "SELECT * FROM users WHERE email='$email' AND password='$pass'";

		$result = $conn->query($s);
            
            $row = mysqli_fetch_row($result);
            $_SESSION['email']=$row[3];
            if ($row[9]==0)
            {
                header ("location:index.php" );
                
            }
        else if ($row[9]==1)
        {
             header ("location:adminPage.php" );
        }
		else
        {
			echo '<script type="text/javascript">alert("Invalid Username or Password (*-*)")</script>';
			echo '<script type="text/javascript"> window.location.assign("login.php")</script>';
		}
	
?>

