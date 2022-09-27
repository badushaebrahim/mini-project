<!DOCTYPE html><!--seenting msg from student to faculty-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>mesage</title>
	<script src="./js/jquery-2.1.4.min.js">
	</script>
    
	
</head>
<body>
	<div class="maincontainer">
<div class="msgholder">
<?php
include './functionsphp/dbcheck.inc.php';
session_start();
$re=$_SESSION['sid'];
echo"<script>console.log($re'hai')</script>";

 $l = "SELECT * FROM `msgholder` WHERE `reciverid`='$re' and `sendertype`=3";
 $sop=mysqli_query($conn,$l);
echo "<div class ='ms'> "; 
 while ($row2 =mysqli_fetch_array($sop)) {
echo "<script>console.log('ping')</script><div class='container'>";
$mr= "SELECT `name` FROM `faclog` WHERE `tid`=$row2[senterid]";
//unset($bro);
$bro= mysqli_query($conn,$mr);
$mrr=mysqli_fetch_array($bro);
echo "From:-$mrr[0]<center>";
    unset($username);echo"<divclass='msgss'>";
    $username = $row2['message'];
    $tid = $row2['uid'];
    echo '<h3>'.$username.'</h3></div><br>';
}

echo"<div>";
?>
</div>

<br>
<form method="POST" action="sent.inc.php">

</div><br><br> <center>
<div class="butsholder">
<?php
include './functionsphp/dbcheck.inc.php';
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
         <input type="textbox"name="msg" >
<input type="submit"name="submit">    <input type="button"value="back" onclick="goBack()"></div>
	</div></center></form>
</body>
</html>
<!--<style>
body{
    background-color: wheat;
    display: flex;
}
.maincontainer{
    flex-direction: row;
    background-color: blue;
}
.msgholder{
    flex-direction: column;
    background-color: pink;
}
.butsholder{
    padding-left: 5vh;
    padding-right: 5vh;
    padding-top: 1vh;
    flex-direction: column;
}
button{
    padding: 6vh;
}
</style>--><script>
function goBack() {
  window.history.back();
}
</script>


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