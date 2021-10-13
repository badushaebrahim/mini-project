<?php 	
include './functionsphp/dbcheck.inc.php';
session_start();	
$cl=$_SESSION['clid'];
$link=$_SESSION['link'];
  $studidfs=$_SESSION['sid'];
  echo"$cl  $link  $studidfs";
	//echo"<script>console.log($cl+$link+$studidfs)</script>";
	date_default_timezone_set("Asia/Calcutta");
	$da= date('Y-m-d H:i:s');
	$check="select count(*) from `studattends` where	`clsid`=$cl, `studentid`=$studidfs ";
	$ch2=mysqli_query($conn,$check);
	$loki=mysqli_fetch_array($ch2);
	if($loki[0]!=0){
	 $in="INSERT INTO `studattends`(`clsid`, `studentid`, `time`) VALUES ($cl,$studidfs,'$da')"; 
	 echo"$da<br>$in";
	if($rumba=mysqli_query($conn,$in)){
		echo"<h1>in</h1>";
		
		echo"<script>window.open('$link')</script>";
		header("location: ../wrk/studcls.php");
	}	}
	else{$check2="select * from `studattends` where	`clsid`=$cl, `studentid`=$studidfs ";
		$ch22=mysqli_query($conn,$check2);
		$loki2=mysqli_fetch_row($ch22);

		$mok2="UPDATE `studattends` SET `time`=$da WHERE `gid`= '$loki2[gid]'";
		if($ch24=mysqli_query($conn,$mok2)){
			echo"<script>console.log('done')</script>";
		}else{echo"<script>console.log('fail')</script>";}
	}
	echo"<button onclick='loaction.href='studcls.php''>ok</button>";

	?>