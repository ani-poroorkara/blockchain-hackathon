<?php
	$servername="localhost";
	$username="root";
	$password='';
	$dbname="college";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	session_start();
	if (isset($_POST['btn1'])) {
		$username = $_POST['username'];
		$pass = $_POST['pass'];

		$sql = "SELECT name,level FROM student WHERE Username='$username' AND Password='$pass'";

		$result = $conn->query($sql);

		if($result->num_rows>0){

			while ($row=$result->fetch_assoc()) {
				$_SESSION['status'] = 1;
				$_SESSION['username'] = $username;
				header('location:lhtml.php');
				
			}
		}
		else{
			echo '<script type="text/javascript">alert("Invalid Username or Password (*-*)")</script>';
			echo '<script type="text/javascript"> window.location.assign("login.html")</script>';
		}
	}
?>

