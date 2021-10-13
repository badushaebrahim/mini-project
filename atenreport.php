
<?php
include './functionsphp/dbcheck.inc.php'

?>
<head>
<?php

?>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Report</title>
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
	location.href='homes.php';	
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
		<div class="tx"><div id="here" class="inner">Consolidated Attendece</div></div>
				<div class="tx"><div id="her2"onclick="goBack()" class="inner"><input type="button"  class="butss"value="Back"></div></div>
		<div class="tx"><div id="her2"  id="out" class="inner"onclick="ping()"><input type="button"  class="butss"value="Sign out "></div></div>
			</div></div></nav>
<br>
<center>
<h1 class="hyo">Consolidated Attendece</h1>



	<div><form method="POST">
	<table>	
	<th>Select class:-</th><th>	<?php
	$q="SELECT * from classpool";
	

include './functionsphp/dbcheck.inc.php';

 $s=mysqli_query($conn,$q);
 
echo "<select name='clsid' >";
echo"<option  value=''>names of scession</options>";
 while ($row =mysqli_fetch_array($s)) {
    unset($username);
    unset($uid);
    $username = $row[0];
    $uid = $row[6];
    echo '<option value=" '.$uid.'"  >'.$username.'</option>';
}
echo "</select>";
     ?>
	</th>
	<th><input value="fech" type="submit" name="bt"></th>
	</table></form>
	</div></body><footer>
	<?php
if(isset($_POST['bt'])){$co=1;
	$lo=$_POST['clsid'];
	echo"<script>console.log('$lo')</script>";
	 /*$q="select count(*) from tlbexam where lower(Examname)=lower('$name') and subjectid='$subject'";
 $result=mysqli_query($conn,$q); 
 $r=  mysqli_fetch_array($result);
 if($r[0]>0)*/



	$fe="SELECT * FROM studattends WHERE clsid=$lo";
	$s1=mysqli_query($conn,$fe);
	echo"<table border='solid'><tr><th>No</th><th>Student name</th><th>time of entry to class</th></tr>";
	while ($ro =mysqli_fetch_array($s1)) {
		$na="SELECT * FROM `studlog` where uid=$ro[1]";//get student name
		$na1=mysqli_query($conn,$na);
		$ff =mysqli_fetch_array($na1);

		echo"<tr><td>$co</td><td>$ff[0]</td><td>$ro[2]</td><tr>";
		$co++;
	    }
	    $nu="SELECT COUNT(*) FROM studlog";
	    $na12=mysqli_query($conn,$nu);
	    $ff2 =mysqli_fetch_array($na12);
	    echo"<tr><th>number of Student attended:$co/$ff2[0]</th></tr>";
	    echo"</table>";
	    echo"<center><input type='button' class='button' value='generate Report' onclick='print()' ></center>";
}

?></footer>


</html>
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