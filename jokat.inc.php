<?php 	
include './functionsphp/dbcheck.inc.php';
session_start();	
$cl=$_SESSION['clid'];
$link=$_SESSION['link'];
  $studidfs=$_SESSION['sid'];
  echo"$cl  $link ";
	//echo"<script>console.log($cl+$link+$studidfs)</script>";
	date_default_timezone_set("Asia/Calcutta");
	$da= date('Y-m-d H:i:s');
	$check="SELECT COUNT(*) FROM `studattends` WHERE (`clsid`=$cl AND`studentid`=$studidfs) ";
	$ch2=mysqli_query($conn,$check);
	$loki=mysqli_fetch_array($ch2);
	//echo"$ch2";
	if($loki[0]==0){
	 $in="INSERT INTO `studattends`(`clsid`, `studentid`, `time`) VALUES ($cl,$studidfs,'$da')"; 
	 echo"$da <script>in</script>in<br>$in";
	if($rumba=mysqli_query($conn,$in)){
		echo"<h1>in</h1>";
		
		echo"<script>function window.open($link)</script>";
		//header("location: ../wrk/studcls.php");
	}	}
	else{$check2="SELECT * from `studattends` WHERE(`clsid`=$cl AND `studentid`=$studidfs )";
		$ch22=mysqli_query($conn,$check2);
		$loki2=mysqli_fetch_assoc($ch22);

		$mok2="UPDATE `studattends` SET `time`='$da' WHERE `gid`= '$loki2[gid]'";
		if($ch24=mysqli_query($conn,$mok2)){
			echo"<script>console.log('done')</script>";
		}else{echo"<script>console.log('fail')</script>";}
	}
	echo"<a hre='studcls.php'><button class='btn' onclick='mm()'>go</button></a>";
	echo"<script>
	
		
		window.open('$link');
		location.href='studcls.php'
	
	</script>";
	?>
	