<!DOCTYPE html><!--fac msg student-->
<?php include './functionsphp/dbcheck.inc.php'; ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>faculty  to Stuent</title>
	<script src="./js/jquery-2.1.4.min.js">
	</script>
    <link href="css/msg.css" rel="stylesheet" type="text/css">
	
</head>
<body>
	<div class="maincontainer">
<div class="msgholder">
<?php
$re=1;
 $l = "SELECT * FROM `msgholder` WHERE `reciverid`='$re' and `sendertype`=2";
 $sop=mysqli_query($conn,$l);
echo "<div class ='ms'> "; 
 while ($row2 =mysqli_fetch_array($sop)) {
    unset($username);echo"<divclass='msgss'>";
    $username = $row2['message'];
    $tid = $row2['uid'];
    echo '<h3>'.$username.'</h3></div><br>';
}

echo"<div>";
?>
</div>

<br>
<form method="POST" action="sentfactopar.php">

</div><br><br>
<div class="butsholder">
<?php

$q="select name,uid from studlog";
 $s=mysqli_query($conn,$q);
echo "<select name='faculty' >"; 
echo"<option  value=''>names of Student</options>";
 while ($row =mysqli_fetch_array($s)) {
    unset($username);
    $username = $row['name'];
    $tid = $row['uid'];
    echo '<option value="'.$tid.'"  >'.$username.'</option>';
}
echo "</select>";
     ?>
<div><input type="textbox"name="msg" ></div>
</div>
<div><input type="submit"name="submit"></div>
	</div></form>
</body>
</html>