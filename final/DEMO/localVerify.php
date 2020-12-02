<?php

$servername="localhost";
$username="root";
$password='';
$dbname="college";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$title=$_GET['title'];

if(!$conn)
{
     die("Connection failed:".mysqli_connect_error());
}
else
{
    $s1 = " update events set status = 1 where title='$title' ";
    $result = $conn->query($s1);

}

echo "<script>alert('Event Table Updated'); window.location.href='adminPage.php';</script>";


?>