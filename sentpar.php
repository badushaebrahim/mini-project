<!DOCTYPE html><!--senting msg from parent to faculty-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>mesage</title>
	<script src="./js/jquery-2.1.4.min.js">
	</script>
    <link href="css/msg.css" rel="stylesheet" type="text/css">
<?php include './functionsphp/dbcheck.inc.php'; ?>
	
</head>
<body>
	<div class="maincontainer">
<div class="msgholder">
<?php
session_start();
$re = $_GET["pid2"];
echo"<script>console.log($re'hai')</script>";

 $l = "SELECT * FROM `msgholder` WHERE `reciverid`='$re' and `sendertype`=6";
 $sop=mysqli_query($conn,$l);
echo "<div class ='ms'> "; 
 while ($row2 =mysqli_fetch_array($sop)) {
echo "<script>console.log('ping')</script>";

    unset($username);echo"<divclass='msgss'>";
    $username = $row2['message'];
    $tid = $row2['uid'];
    echo '<h3>'.$username.'</h3></div><br>';
}

echo"<div>";
?>
</div>

<br>
<form method="POST" >

</div><br><br>
<div class="butsholder">
<?php

$q="select name,tid from faclog";
 $s=mysqli_query($conn,$q);
echo "<select name='faculty' >";
echo"<option  value=''>names of faculty</options>";
 while ($row =mysqli_fetch_array($s)) {
    unset($username);
    $username = $row['name'];
    $tid = $row['tid'];
    echo '<option value="'.$tid.'"  >'.$username.'</option>';
}
echo "</select>";
     ?>
<div><input type="textbox" name="msg" ></div>
</div>
<div><input type="submit"name="submit"></div>
	</div></form>
</body>
</html>

<?php
/*student sent*/

if(isset($_POST['submit'])){
	
$msg2 = $_POST['msg'];
$reciveris = $_POST['faculty'];
//$reciveris2 = $_GET['faculty'];
session_start();
$re = $_GET["pid2"];
$me=$re;
//$me=$_GET['pid2'];
$type=6;
echo "<script>console.log('$me')</script>";
echo "<script>console.log('$msg2')</script>";
echo "<script>console.log('reciver'+'$reciveris')</script>";
$sq="insert into msgholder 	(senterid,reciverid,message,sendertype,status)values('$me','$reciveris','$msg2','$type','0')";
if($s=mysqli_query($conn,$sq)){
	echo"<script>var r = confirm('message sent Would you like to sent more ');if (r == true) {location.href='sentpar.php?pid2=$re';} else{location.href='homep.php?lo=$re';	}</script>";
  

}
else{
	echo"<script>alert('message not sent');</.script>";
}

}

// echo"<script>var r = confirm('message sent Would you like to sent more ');if (r == true) {location.href='senting.php';} else{location.href='homes.php';	}</script>";
 ?>