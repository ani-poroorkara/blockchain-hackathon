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


if (isset($_POST['verify'])) {
				$aadhar =( $_POST['aadhar']);
				
				$sql1 = "SELECT * FROM aadhar_db WHERE aadhar = '$aadhar'";
				$result =  mysqli_query($conn,$sql1);
				if (mysqli_num_rows($result)>0) {
					echo '<script type="text/javascript">alert("Aadhar number not verified ! ")</script> ';
				}

?>