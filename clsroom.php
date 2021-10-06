<!DOCTYPE html>
<html lang="en">
<head>
<?php

?>	
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" http-equiv="refresh" content="30">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>exam control</title>
	<link href="css/home2.1.css" rel="stylesheet" type="text/css">
	<script>
			function ping(){
	var r = confirm("Would you like to exit ");
if (r != true) {
	
} else{
	location.href='index.php';	
}}
function notf(){
	var r2 = confirm("Would you like to go home ");
if (r2 != true) {
	
} else{
	location.href='homef.php';	
}}
function ads(){
	location.href='addcls.php';
}
setTimeout(function() {
location. reload();
}, 30000);
function oops(){alert("Scession has ended");}function oops0(){alert("Scession has not started yet");}
function bck(){location.href='addsub.php';}</script>
<style>.done{background-color: lightblue;} .not{background-color: orange;} </style>
</head>
<body>
	
	<nav class="navma">
	<div class="navra">
	<div class="imh"><img class ="sgs" id="im"src="image/logo.svg"></div>
	<div class="mainholder" >
		<div class="tx"onclick="bck()" ><div id="here" class="inner">Back </a></div></div>
				<div class="tx"><div id="her2"onclick="notf()" class="inner"><input type="button"  class="butss"value="Home"></div></div>
		<div class="tx"><div id="her2"  id="out" class="inner"onclick="ping()"><input type="button"  class="butss"value="Sign out "></div></div>
			</div></div></nav>
			<div class="mainbod">
	<div class="sidebars">
	<div class="sidebarchild" id="inits">
	<txt><input type="button" value="Add New Classroom" onclick="ads()" class="butss"></txt></div>
	<div class="sidewraper">
	<div class="sidebarchild">
	<txt><input type="button" value="Detailed report" onclick="ex()" class="butss"></txt></div>
	</div>

</div>
<div class="statholder">
<center>
<?php
include './functionsphp/dbcheck.inc.php';
include './up.php';
$sql = "SELECT count(*) FROM `classpool`";
$result=mysqli_query($conn,$sql);
$s=  mysqli_fetch_array($result);
if($s[0]==0){
	echo"<h1>no thing found</h1>";
}
else{
	$sl = "SELECT * FROM `classpool`";
 $result2=mysqli_query($conn,$sl);
 echo "<table border=1><th>Scession Name</th><th>Teacher </th><th >Subject name</th><th> time of class</th><th>time of class end  3</th><th >Status</th><th >Action</th></tr>";
 echo'<h1>Questions uploaded</h1>';
 echo'<br>';
 while($row=mysqli_fetch_row($result2))
 {  
	echo"<script>console.log('$row[0]'+'$row[1]'+'$row[2]'+'$row[3]'+'ststu'+'$row[5]'+'crid'+'$row[6]'+'$row[7]');</script>";
  echo "<tr>";
  echo "<td>"."$row[0]"."</td>";
 $p = "SELECT * FROM faclog where tid='$row[2]'";$result3=mysqli_query($conn,$p);
 $s2=  mysqli_fetch_array($result3);echo"<script>console.log('$s2[0]');</script>";
 echo "<td>"."$s2[0]"."</td>";
 $p4 = "SELECT * FROM `tblsubject` where sid2='$row[1]'";$result34=mysqli_query($conn,$p4);
 $s24=  mysqli_fetch_array($result34);echo"<script>console.log('$s24[0]');</script>";

 echo "<td>"."$s24[0]"."</td>";
  echo "<td>"."$row[3]"."</td>";
  echo "<td>"."$row[4]"."</td>";
 // echo "<td>"."$row[5]"."</td>";
  if($row[5]==0){echo "<td>"."Class started"."</td>";}elseif($row[5]==1){echo "<td>"."Class has Not Started Wait"."</td>";}else{echo "<td>"."Class Over"."</td>";}
 //echo "<td><a class='high'href='update.php?id="."$row[0]"."'> Update</a></td>";
 if($row[3]>$row[4]){echo"<td>error in start and end</td> ";}else{/*echo"<td>fineshed</td>";*/}
if($row[5]==0){echo"<td><a href='$row[7]'><button class='done' value='Attend'>Attend</a></td>";}elseif($row[5]==1){echo"<td><button class='not' onclick='oops0()'  value='Attend'>Attend</td>";}	else{echo"<td><button onclick='oops()'  value='Attend'>Attend</td>";}
 echo "</tr>";
 //echo"<td><a href='$row[7]'><button class='done' value='Attend'>Attend</a></td>";

 }}echo "</table><br><br>";


?>
</center>
</div></div></body></html>

<!-- sttus code for cls 1:going to start /0:ongoing /2:finished updated--> 