<?php
include './functionsphp/dbcheck.inc.php';

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
		<div class="tx"><div id="here" class="inner">Subject Addition</div></div>
				<div class="tx"><div id="her2"onclick="notf()" class="inner"><input type="button"  class="butss"value="Home"></div></div>
		<div class="tx"><div id="her2"  id="out" class="inner"onclick="ping()"><input type="button"  class="butss"value="Sign out "></div></div>
			</div></div></nav>
<br>
<br>
<center>
	<h1><u>Subject Details</u></h1>
	<br>
</center>
<br>
<center>
<form  method="POST">
<table>
	<tr>
		<td>Subject Name</td>
		<td><input type="Subject Name" id="Subject Name" name="txtsname"></td>
	</tr>
<!--	<tr>
		<th>Upload file</th>
		<th><input type="file" name="img"></th>
	</tr>-->
	<tr>
		<td></td>
		<td><input type="submit" name="btnsubmit" value="Add Subject"></td>
	</tr>
</table>
</form>
</center>
<br>
<br>
<center>
	
<?php
 if(isset($_REQUEST['btnsubmit']))
{
	session_start();
$t= $_SESSION['tid'];
 $Subject_Name=$_REQUEST['txtsname'];
//  $folder='img/';
//        $file=$folder.basename($_FILES['img']['name']);
//        move_uploaded_file($_FILES['img']['tmp_name'],$file);
//       
  $q="select count(*) from tblsubject where lower(subjectname)=lower('$Subject_Name')";
 $result=mysqli_query($conn,$q); 
 $r=  mysqli_fetch_array($result);
 if($r[0]>0)
     {
          echo "<script>alert('Subject already added')</script>";
        }
        else
        {
 $q="insert into tblsubject(subjectname,addedby) values('$Subject_Name','$t')";
  
  $s=mysqli_query($conn,$q);
    if($s)
        {
          echo "<script>alert('subject insertion successful')</script>";
        }
        else
        {
          echo "<script>alert('sorry erro1r')</script>";
        }
}
}
 $q="select * from tblsubject";
 $result=mysqli_query($conn,$q);
 echo "<table border=1><th>Subject_Id</th><th>Subject_Name</th>";
 while($row=mysqli_fetch_row($result))
 {  
  echo "<tr>";
  echo "<td>"."$row[2]"."</td>";
  echo "<td>"."$row[0]"."</td>";

 
  echo "</tr>";
 }
echo "</table><br><br>";
?>

<style>
    td,th{
        padding:10px 10px 10px 10px;
    }
</style>