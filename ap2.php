<!DOCTYPE html>
<html lang="en">
<head><style></style>
<script></script>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="js/jquery-2.1.4.min.js"></script>
	
	<link href="css/fonts/home2.css"  rel="stylesheet" type="text/css">
	<title></title>
</head>
<body>
	<nav class="navma" >
		<div class="navra" id="lol24">
			<div class="imh"><img class ="sgs" id="im"src="image/logo.svg"></div>
			<div class="mainholder" >
				<!-- -->
				
				<div class="tx" onclick="goBack()"><div id="here" class="inner">Back</div></div>
				
				<div class="tx"><div id="her2" id="out" class="inner">Sign out</div></div>
				
				
				
			</div>
		</div>
	</nav>
	<div class="mainbod"></div><center><table border="1"><caption><h1>Parents</h1></caption><tr><th>Name</th><
	<th>Gender</th><th>Child Name</th><th>AddedBY</th><th>Email</th><th>Password</th><th>Pid</th><th>Action</th></tr>
	<?php
	include './functionsphp/dbcheck.inc.php';
	$r="SELECT * FROM `parentlog`";
	$lo=mysqli_query($conn,$r);
	while($row=mysqli_fetch_array($lo)){
		$ns="SELECT * FROM `studlog` WHERE uid=$row[4]";$f1=mysqli_query($conn,$ns);$m=mysqli_fetch_assoc($f1);
		$ns2="SELECT * FROM `faclog` WHERE tid=$row[5]";$f12=mysqli_query($conn,$ns2);$m2=mysqli_fetch_assoc($f12);
		echo"<tr><td>$row[0]</td><td>$row[1]</td><td>$m[name]</td><td>$m2[name]</td><td>$row[2]</td><td>$row[3]</td><td>$row[6]</td>";
		

		echo"<td>";if($row[7]==0){echo"<a>Remove</a>";}elseif($row[7]==1){echo"<a>Approve</a>";}echo"</td><tr>";
	}
	?></center></table>
	</div>
	<script>function goBack() {
  window.history.back();
}</script>