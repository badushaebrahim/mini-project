
<?php
require_once './functionsphp/dbcheck.inc.php';
function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}
  /*
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
    
}*/

if (isset($_POST['submit'])) {
if(isset($_POST['name']))
{
echo "You have selected :".$_POST['name'];  //  Displaying Selected Value
debug_to_console($_POST['name']);
}    
if(isset($_POST['cource']))
{
echo "You have selected :".$_POST['cource'];  //  Displaying Selected Value
debug_to_console($_POST['cource']);
}
if(isset($_POST['gender']))
{
echo "You have selected :".$_POST['gender'];  //  Displaying Selected Value
debug_to_console($_POST['gender']);
}

if(isset($_POST['email']))
{
echo "You have selected :".$_POST['email'];  //  Displaying Selected Value
debug_to_console($_POST['email']);
}
if(isset($_POST['pass']))
{
echo "You have selected :".$_POST['pass'];  //  Displaying Selected Value
debug_to_console($_POST['pass']);
}
    }


   ?>