<?php
  
$servername = "localhost";
$username = "root";//default xamp user name
$password = "";//default pwd need to change if need in a configs conection
$dbname = "test";
  
// Create connection
$conn = new mysqli($servername, 
    $username, $password, $dbname);
  
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " 
        . $conn->connect_error);
}

if ($result = $mysqli->query("SHOW TABLES LIKE '".$table."'")) {
    if($result->num_rows == 1) {
        echo "Table exists";
    }

}
else{

   echo"<script>console.log("table not set need config");</script>";
}
?>