<!--<html>
<script href='test.js'>
</*?php 
$servername="localhost";
$username="root";
$password="";
$dbname="test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    log("fail");

} 

//$sql = "INSERT INTO software (soft_id, soft_name, installed_date, expiry_date, product_key) 
//VALUES ('2', 'Dhurga', '2016-01-01', '2016-04-30', 'stevenreega@gmail.com')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


//<input type="button"value="Finish"onclick="history.go(-2);return true;">

//</table>
mysqli_close($conn);
?>*/

-->
<?php
function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}
include './functionsphp/dbcheck.inc.php';
$sub=2;
$sql = "SELECT * FROM `tblsubject` WHERE `sid2`=$sub";
  $s5=mysqli_query($conn,$sql);
  $r9=  mysqli_fetch_array($s5);
  if (!$r9) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
  Debug_to_console($r9[0]);
  Debug_to_console($r9[1]);
  Debug_to_console($r9[2]);
?>
