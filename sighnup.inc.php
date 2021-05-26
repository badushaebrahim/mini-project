<?php
  
$servername = "localhost";
$username = "root";//default xamp user name
$password = "";//
$dbname = "test";
  
// Create connection
$conn = new mysqli($servername, 
    $username, $password, $dbname);
  
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " 
        . $conn->connect_error);
        exit()
}else{
    <
}


mysqli_close($conn);
   ?>