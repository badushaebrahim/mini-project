<!DOCTYPE html><!--faculty msg parents-->
<?php include './functionsphp/dbcheck.inc.php'; ?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>faculty to parent </title>
	<script src="./js/jquery-2.1.4.min.js">
	</script>
   <!-- <link href="css/msg.css" rel="stylesheet" type="text/css">-->
	
</head>
<body><a href="homef.php"><h1  >x</h1></a>
	<div class="maincontainer"><center><h1>Messages</h1></center>
<div class="msgholder">
<?php
session_start();
$re=$_SESSION['tid'];
 $l = "SELECT * FROM `msgholder` WHERE `reciverid`='$re' and `sendertype`=2";
 $sop=mysqli_query($conn,$l);
//echo "<div class ='ms'> "; 
 while ($row2 =mysqli_fetch_array($sop)) {

    echo "<div class='container'> "; 
   $mr= "SELECT `name` FROM `parentlog` WHERE `pid`=$row2[senterid]";
   //unset($bro);
   $bro= mysqli_query($conn,$mr);
   $mrr=mysqli_fetch_array($bro);
   echo "From:-$mrr[0]<center>";
   
   echo "<script>console.log('$mr')</script>";
    unset($username);echo"<divclass='msgss'>";
    $username = $row2['message'];
    $tid = $row2['uid'];
    echo '<h3>'.$username.'</h3></center></div><br>';
}

echo"<div>";
?>
</div>

<br>
<form method="POST" action="sentfactostud.php">

</div><br><br>
<div class="butsholder"><center>
<?php
include './functionsphp/dbcheck.inc.php';
$q="select name,pid from parentlog";
 $s=mysqli_query($conn,$q);
echo "<select name='faculty' >";
echo"<option  value=''>names of parent</options>";
 while ($row =mysqli_fetch_array($s)) {
    unset($username);
    $username = $row['name'];
    $tid = $row['pid'];
    echo '<option value="'.$tid.'"  >'.$username.'</option>';
}
echo "</select>";
     ?>
<input type="textbox"name="msg" >

<input type="submit"name="submit">
</center>
	</div></form>
</body>
</html>



<style>
/* Chat containers */
.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

/* Darker chat container */
.darker {
  border-color: #ccc;
  background-color: #ddd;
}

/* Clear floats */
.container::after {
  content: "";
  clear: both;
  display: table;
}

/* Style images */
.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

/* Style the right image */
.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

/* Style time text */
.time-right {
  float: right;
  color: #aaa;
}

/* Style time text */
.time-left {
  float: left;
  color: #999;
}

</style>