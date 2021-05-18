<?php
  
$servername = "lo7pwdcalhost";
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
}

if ($result = $mysqli->query("SHOW TABLES LIKE '".$table."'")) {
    if($result->num_rows == 1) {
        echo "Table exists";
    }
}
else {
    echo "Table does not exist";
    mysql_select_db ($dbname, $con);
    $sqlcr = "CREATE TABLE login Values(email varchar[90] not null ,cource varchar[50] not null,gender varchar[9] not null,pwd varchar[35] not null,uid integer primary key auto_increment); 
    if(mysqli_query($conn, $sqlcr)){
           echo test.js; 
  
        
        } 
        else{
            
        }
}
 $email =  $_REQUEST['email'];
 $pwd =  $_REQUEST['pwd'];
 $course =  $_REQUEST['course'];


mysqli_close($conn);
   ?>