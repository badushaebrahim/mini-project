<!DOCTYPE html>
<html lang="en">
<head>
	<title>questions</title>
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
	location.href='homes.php';	
}}
function ads(){
	location.href='addsub.php';
}
function bck(){location.href='searchexam.php';}


</script>
</head>
<body>
	
	<nav class="navma" style="background-color:aqua ;">

	<div class="mainholder" >
		<div class="tx" onclick="bck()"><div id="here" class="inner">Back⬅️</div></div>
				<div class="tx"><div id="her2"onclick="notf()" class="inner"><input type="button"  class="butss"value="Home"></div></div>
		<div class="tx"><div id="her2"  id="out" class="inner"onclick="ping()"><input type="button"  class="butss"value="Sign out "></div></div>
			</div></div></nav>
			<div class="mainbod">
	


</div>
<div class="statholder">
<center>

<?php

include './functionsphp/dbcheck.inc.php';
$q="delete from tbltime";
$ups="SELECT count(*) FROM `nokeper` where totalqs= 1";
   $re=mysqli_query($conn,$ups);
   $cou=mysqli_fetch_array($re);
        $result=mysqli_query($conn,$q);
	$qq="delete from nokeper";
        $result=mysqli_query($conn,$qq);z	
$rid=$_GET['rid2'];

//echo"<script>console.log('.$rid.');</script>";
$q="select * from tblresult where resultid='$rid'";
if($s=  mysqli_query($conn, $q)){
$r=  mysqli_fetch_array($s);

echo '<br><br><br><center><h3 id="da">You Got: '.$r[4].'/'.$cou[0].'</h3></center><br><br><br><br><br><br><br>';}
else{
        echo"<h3>No go</h3>";
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
<foot>
<script>var valu= document.getElementById("da").innerHTML;
var valu2= document.getElementById("da");
if(valu>10){
        valu2.style.color="red";
}
if(valu<4){
        valu2.style.color="red";
}
if((valu>4)&&(valu<11)){
        valu2.style.color="greeen";
}</script>
</foot>