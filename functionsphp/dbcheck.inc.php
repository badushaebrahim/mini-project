<?php
  
$servername = "localhost";
$username = "root";//default xamp user name
$password = "";//default pwd need to change if need in a configs conection
$dbname = "test";
$table="studlog";
  
// Create connection
$conn = mysqli_connect($servername, 
    $username, $password, $dbname);
  
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    //echo"<script>console.log('okok conect');</script>";
}
$result = mysqli_query($conn,"SHOW TABLES LIKE'.$table.'");
//echo "$result";
$row =mysqli_fetch_array($result);



if (!$row) {
    
    if($result->num_rows == 1) {
       // echo "Table exists";
        echo"<script>console.log('table exists');</script>";
            }

        }
    else{ echo"<script>console.log('table not set need config');</script>";
     // echo"<script>console.log('$result');</script>";
    // header("location: ../wrk/index.php");
      exit();
      mysqli_close($conn);
        }
  



?>