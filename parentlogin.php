<?php
include './functionsphp/dbcheck.inc.php';
if(isset(($_POST['submit']))){
	

	$Email=$_POST['email'];
	$Password=$_POST['pass'];
	$q="select count(*) as count from parentlog where email='$Email'";
 $s=mysqli_query($conn,$q);
 $f=mysqli_fetch_array($s);
 
 if($f['count'] != 0)
 {
	

 	 $q="select * from parentlog where Email='$Email'";
	  $s=mysqli_query($conn,$q);
 	 $row=mysqli_fetch_array($s);
	  echo"<script>console.log('$Email'+'$Password');</script>";
	  echo"<script>console.log('$row[2]'+'$row[3]');</script>";
	  $pwd = $row[1];
	  if($Password == $pwd){
		$_SESSION['pid']=$row[6];
		//echo "$_SESSION";
		echo"<script>console.log('login ok');</script>";
		header("location: ../wrk/homep.php");
	  }
	  else{
			echo "<script>alert('invalid password');</.script>";
	  }

	}
	else{
		echo"<script>console.log('not exec');</script>";
		
	}
}
 else{
	echo "<script>alert('invalid entry methood');</.script>";
 }


?>