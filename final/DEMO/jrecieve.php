<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blockchain";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connectio
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

if(isset($_POST)){
    if(isset($_POST['data'])){
    $songData = $_POST['data'];
}}


$sql = "SELECT * FROM eventchain";
$result = $conn->query($sql);




if ($result->num_rows > 0){
	$sql = "UPDATE eventchain SET event ='$songData' WHERE id=1";

    
} else {
    	$sql = "INSERT INTO eventchain VALUES (1, '$songData')";
}


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


