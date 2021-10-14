
<?php
include './functionsphp/dbcheck.inc.php'

?>
<head>
<?php

?>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Subjects</title>
	<link href="css/fonts/home2.css" rel="stylesheet" type="text/css">
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
}</script>
</head>
<body>
	
	<nav class="navma">
	<div class="navra">
	<div class="imh"><img class ="sgs" id="im"src="image/logo.svg"></div>
	<div class="mainholder" >
		<div class="tx"><div id="here" class="inner">Consolidated Result</div></div>
				<div class="tx"><div id="her2"onclick="goBack()" class="inner"><input type="button"  class="butss"value="Back"></div></div>
		<div class="tx"><div id="her2"  id="out" class="inner"onclick="ping()"><input type="button"  class="butss"value="Sign out "></div></div>
			</div></div></nav>
<br></body><footer>
<center>
<h1 class="hyo">Consolidated Result</h1>
<table border='solid' ><caption><h1>Results</h1></caption>
<tr><th>Exam Name</th><th>Subject</th><th>Student  name</th><th>time of exam</th><th>marks</th><th>Total</th></tr>
<?php
include	'./functionsphp/dbcheck.inc.php';
$l="SELECT * FROM tblresult ORDER BY examdate DESC";
$co=mysqli_query($conn,$l);
	
while ($row =mysqli_fetch_array($co)) {
	$sl = "SELECT * FROM `tlbexam` WHERE examid= '$row[2]'";//select exam name
	$sl2=mysqli_query($conn,$sl);
	$sl3 =mysqli_fetch_array($sl2);
	$sq = "SELECT * FROM `tblsubject` WHERE sid2='$sl3[1]'";//subject name
	$sq1=mysqli_query($conn,$sq);
	$sq21 =mysqli_fetch_array($sq1);
	$l = "SELECT name FROM `studlog` WHERE uid ='$row[1]'";//Student n name
	$l1=mysqli_query($conn,$l);
	$l2 =mysqli_fetch_array($l1);
	echo"<tr><td>$sl3[0]</td><td>$sq21[0]</td> <td>$l2[0]</td><td>$row[3]</td> <td>$row[4]</td> <td>$row[5]</td></tr>";
	
    }
?>
</table><br>
<input type="button" class="button" value="generate Report" onclick="print()" >

</center></footer>
<style>.hyo{
	visibility: hidden;

}
@media print {
.button{
	display: none;
}
/* visible when printed */
.print {
  display: block;
}
nav{
	visibility: hidden;
}
.hyo{visibility:visible;}
}</style>
<script>
function goBack() {
  window.history.back();
}
</script>