<?php

session_start();

?>	

<!DOCTYPE html>
<html lang="en">
 
<head><meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--<script src="js/jquery-2.1.4.min.js"></script>-->
	<script src="js/jquery.js" ></script>
	<link href="css/fonts/home2.css" rel="stylesheet" type="text/css">
	<title>home Students beta</title>
</head>
<body>
	<nav class="navma">
	<div class="navra">
	<div class="imh"><img class ="sgs" id="im"src="image/logo.svg"></div></div>
	<div class="mainholder" >
	</div><div>
		
		<center><div>
		<table><caption><h1>Details</h1></caption>
		<form method='POST'>
		<?php 
		$id=$_GET['id'];
		$ty=$_GET['ty'];
		//$ty=1;
		//$id=1;
		include './functionsphp/dbcheck.inc.php';
		switch($ty){
			case 1:
		$fc="SELECT * FROM  `studlog` WHERE uid=$id";
		$l=mysqli_query($conn,$fc);
		$row=mysqli_fetch_assoc($l);
				echo"<tr><td>Name:</td><td><textarea name='name'>$row[name]</textarea></td></tr>";
				echo"<tr><td>DOB:</td><td><input type='date' value='$row[dob]'name='dob'></td></tr>";
				echo"<tr><td>Gender:</td><td><textarea name='gen'>$row[gender]</textarea></td></tr>";
				echo"<tr><td>Email:</td><td><textarea name='email'>$row[email]</textarea></td></tr>";
				echo"<tr><td>Password:</td><td><textarea name='pwd'>$row[pwd]</textarea></td></tr>";
				echo"<tr><td></td><td><input  name='but' type='submit'>      	<input type='button' onclick='goBack()' value='back'></td></tr>";
				echo"</form></table>";
				if(isset($_POST['but'])){
					$name=$_POST['name'];
					$dob=$_POST['dob'];
					$gen=$_POST['gen'];
					$em=$_POST['email'];
					$pwd=$_POST['pwd'];
					echo"<script>console.log('inpost') </script>";
					$lol2="UPDATE `studlog` SET `name`=$name,`dob`=$dob,`gender`=$gen,`email`=$em,`pwd`=$pwd WHERE `uid`=$id";
					if($wrk=mysqli_query($conn,$lol2)){echo"<script>console.log('oks') goBack()</script>";}else{echo"<script>console.log('fail') </script>";}
					
				}

				break;
				case 2:
					$fc="SELECT * FROM  `faclog` WHERE tid=$id";
					$l=mysqli_query($conn,$fc);
					$row=mysqli_fetch_assoc($l);
							echo"<tr><td>Name:</td><td><textarea name='name'>$row[name]</textarea></td></tr>";
							echo"<tr><td>DOB:</td><td><input type='date' value='$row[dob]'name='dob'></td></tr>";
							echo"<tr><td>Gender:</td><td><textarea name='gen'>$row[gender]</textarea></td></tr>";
							echo"<tr><td>Email:</td><td><textarea name='email'>$row[email]</textarea></td></tr>";
							echo"<tr><td>Password:</td><td><textarea name='pwd'>$row[pwd]</textarea></td></tr>";
							echo"<tr><td></td><td><input name='but' type='submit'>      	<input type='button'onclick='goBack()' value='back'></td></tr>";
							echo"</form></table>";
							if(isset($_POST['but'])){
								$name=$_POST['name'];
								$dob=$_POST['dob'];
								$gen=$_POST['gen'];
								$em=$_POST['email'];
								$pwd=$_POST['pwd'];
								echo"<script>console.log('inpost') </script>";
								$lol2="UPDATE `faclog` SET `name`=$name,`dob`=$dob,`gender`=$gen,`email`=$em,`pwd`=$pwd WHERE `uid`=$id";
								if($wrk=mysqli_query($conn,$lol2)){echo"<script>console.log('oks') goBack()</script>";}else{echo"<script>console.log('fail') </script>";}
								
							}
							break;
				case 3:
					$fc="SELECT * FROM  `parentlog` WHERE uid=$id";
					$l=mysqli_query($conn,$fc);
					$row=mysqli_fetch_assoc($l);
					echo"<tr><td>Name:</td><td><textarea name='name'>$row[name]</textarea></td></tr>";
					echo"<tr><td>DOB:</td><td><input type='date' value='$row[dob]'name='dob'></td></tr>";
					echo"<tr><td>Gender:</td><td><textarea name='gen'>$row[gender]</textarea></td></tr>";
					echo"<tr><td>Email:</td><td><textarea name='email'>$row[email]</textarea></td></tr>";
					echo"<tr><td>Password:</td><td><textarea name='pwd'>$row[pwd]</textarea></td></tr>";
					echo"<tr><td></td><td><input name='but' type='submit'>      	<input type='button' onclick='goBack()' value='back'></td></tr>";
					echo"</form></table>";
					if(isset($_POST['but'])){
						$name=$_POST['name'];
						$dob=$_POST['dob'];
						$gen=$_POST['gen'];
						$em=$_POST['email'];
						$pwd=$_POST['pwd'];
						echo"<script>console.log('inpost') </script>";
						$lol2="UPDATE `parentlog` SET `name`=$name,`dob`=$dob,`gender`=$gen,`email`=$em,`pwd`=$pwd WHERE `uid`=$id";
						if($wrk=mysqli_query($conn,$lol2)){echo"<script>console.log('oks') goBack()</script>";}else{echo"<script>console.log('fail') </script>";}
						
					}
					break;}
		?>
		</div>
		</center>		
		</div>
		<script>function goBack() {
  window.history.back();
}</script><?php


?>