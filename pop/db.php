<?php
$servername = "localhost";
$username = "root";
$password = "";


// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connectio
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>


<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>
var user = {
    'name': 'Wayne',
    'country': 'Ireland',
    'selected': new Array(1, 5, 9)
};
var userStr = JSON.stringify(user);
$.ajax({
    url: 'json-receive.php',
    type: 'post',
    data: {user: userStr},
    success: function(response){
        //do whatever.
    }
});
</script>