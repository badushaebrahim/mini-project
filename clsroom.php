<!DOCTYPE html>
<html lang="en">
<head>
<?php

?>	
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
	location.href='addsub.php';
}
function bck(){location.href='addsub.php';}</script>
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
$sql = "SELECT count(*) FROM `classpool`";
$result=mysqli_query($conn,$sql);
$s=  mysqli_fetch_array($result);
if($s[0]==0){
	echo"<h1>no thing found</h1>";
}
else{
	$sl = "SELECT * FROM `classpool`";
 $result2=mysqli_query($conn,$sl);
 echo "<table border=1><th>Subject Name</th><th>Teacher </th><th> time of class</th><th>time of class end  3</th><th >Answer</th></tr>";
 echo'<h1>Questions uploaded</h1>';
 echo'<br>';
 while($row=mysqli_fetch_row($result2))
 {  
	//echo"<script>console.log('$row[0]'+'$row[1]'+'$row[2]'+'$row[3]'+'$row[4]'+'$row[6]'+'$row[7]'+'$row[8]');</script>";
  echo "<tr>";
  echo "<td>"."$row[0]"."</td>";
 $p = "SELECT * FROM faclog where tid='$row[2]'";$result3=mysqli_query($conn,$p);
 $s2=  mysqli_fetch_array($result3);echo"<script>console.log('$s2[0]');</script>";
 //echo "<td>"."$s2[0]"."</td>";
  echo "<td>"."$row[3]"."</td>";
  echo "<td>"."$row[4]"."</td>";
 // echo "<td>"."$row[5]"."</td>";
  if($row[6]==1){echo "<td>"."Class started"."</td>";}elseif($row[6]==0){{echo "<td>"."Class Not Started"."</td>";}}else{{echo "<td>"."Class Over"."</td>";}
 //echo "<td><a class='high'href='update.php?id="."$row[0]"."'> Update</a></td>";
 if($row[3]>$row[4]){echo"<td><h1>error in start and end</h1></td> ";}else{echo"<td><h1>fine</h1></td>";}
 echo "</tr>";
 
echo "</table><br><br>";
 }}
}

?>
</center>
</div></div></body></html>