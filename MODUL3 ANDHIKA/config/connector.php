<?php
$servername = "localhost:3308";
$dbname = "showroom_andhika_table";
$username = "root";
$password = "123";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if($conn){
    echo "Connected successfully";
}
?>
