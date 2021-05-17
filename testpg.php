<html>
<script href='test.js'>
<?php 
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
?>
<body><input type="button" value="te" onclick="run()"></body>
</html>