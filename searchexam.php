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
<center>

			<h1>Exams</h1>
			<form method="POST">
	Search Subject Name
	<input type="text" name="txtsubname" placeholder="Enter Subject Name"><br><br>
        <a href="subject.php"><input type="submit" name="btnsubmit" placeholder="Search"></a><br><br>
        <a href="examholder.php">View all exams</a>
</form>

<?php
include './functionsphp/dbcheck.inc.php';
$q="delete from temp";
$result=mysqli_query($conn,$q);
if(isset($_REQUEST['btnsubmit']))
{
$Subject_Name=$_REQUEST['txtsubname'];
$q="select count(*) from tlbexam where subjectid in(select sid2 from tblsubject where subjectname like '%$Subject_Name%')";
$s=mysqli_query($conn,$q);
$f=mysqli_fetch_array($s);
if($f[0]>0)
{
	$q="select * from tlbexam where subjectid in(select sid2 from tblsubject where subjectname like '%$Subject_Name%')";
	$s=mysqli_query($conn,$q);
	echo "<table border='1'><tr><th>Exam Name</th><th colspan='2'>Duration</th></tr>";
	while($row=mysqli_fetch_array($s))
	{
            echo "<tr>";
            echo '<td>'.$row[1].'</td>';
            echo '<td>'.$row[3].'</td>';
            echo '<td><a href="attend.php?eid='.$row[0].'">Attend exam</a></td>';
            echo "</tr>";
	}
	echo "</table>";
}
else
{
 echo "Search could't found";
 echo $q;
}
}
?>
<br>
<br>


</center>
<style>
    td,th{
        padding:10px 10px 10px 10px;
    }
</style>