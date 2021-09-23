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
		

</div>
<div class="statholder">

<?php
   include './functionsphp/dbcheck.inc.php';

   
?>
<br>
<br>

<center>
	
<?php
//for attend exam studnet part
 $q="select tlbexam.*,tblsubject.subjectname from tlbexam,tblsubject where tlbexam.subjectid=tblsubject.sid2";
 $result=mysqli_query($conn,$q);
 echo "<table border=1><th>Exam name</th><th>Subject</th><th colspan='2'>Duration</th></tr>";
 while($row=mysqli_fetch_row($result))
 {  
  echo "<tr>";
  echo "<td>"."$row[0]"."</td>";
  echo "<td>"."$row[4]"."</td>";
  echo "<td>"."$row[2]"."</td>";
  echo "<td><a href='attend.php?eid=".$row[3]."'>Attend exam</a></td>";
  echo "</tr>";
 }
echo "</table><br><br>";//upto here
?>

<style>
    td,th{
        padding:10px 10px 10px 10px;
    }
</style>