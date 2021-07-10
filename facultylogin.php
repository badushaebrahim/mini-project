<?php
include './functionsphp/dbcheck.inc.php';
if(isset(($_POST['submit']))){
	$Email=$_POST['email'];
	$Password=$_POST['pass'];
	$q="select count(*) as count from faclog where Email='$Email'";    
 $s=mysqli_query($conn,$q);
 $f=mysqli_fetch_array($s);
 if($f['count'] != 0)
 {
 	 $q="select email,paswd from faclog where Email='$Email'";
	  $s=mysqli_query($conn,$q);
 	 $row=mysqli_fetch_array($s);
	  echo"<script>console.log('$Email'+'$Password');</script>";
	  echo"<script>console.log('$row[0]'+'$row[1]');</script>";
	  $pwd = $row[1];
	  if($Password == $pwd){
		$_SESSION['name']=$row[0];
		//echo "$_SESSION";
		echo"<script>console.log('login ok');</script>";
		echo "<script>location.href='homea.php'</script>";
	  }
	  else{
			echo "<script>alert('invalid password');</.script>";
	  }

	}
	else{
		echo"<script>console.log('user not found');</script>";
		
	}
}
 else{
	echo "<script>alert('invalid entry methood');</.script>";
 }


?>