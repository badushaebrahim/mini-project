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
	

 	 $q="select * from parentlog where email='$Email'";
	  $s=mysqli_query($conn,$q);
 	 $row=mysqli_fetch_array($s);
	  echo"<script>console.log('$Email'+'$Password');</script>";
	  echo"<script>console.log('ids+$row[6]');</script>";
	  $pwd = $row[3];
	  if($Password == $pwd){
     
	$_SESSION['usr']=$row[6];
	$_SESSION['badu']="Badusha";
    $invar=$_SESSION["usr"];
		echo "<script>console.log('shit$_SESSION[usr]')</script>";
		echo "<script>console.log('shit2$invar')</script>";
		echo"<script>console.log('login ok..');</script>";
		//echo"<script>console.log('$_SESSION[pid2]');</script>";
		if (isset($_SESSION['usr'])){
		//header("location: ../wrk/homep.php");
	 echo"<script>location.href='homep.php?lo=$_SESSION[usr]'</script>";
	}
		else{
		echo"<script>console.log('sec fail');</script>";
		echo $_SESSION['usr'];

		}
  
	  }
	  else{
			echo "<script>alert('invalid password');</script>";
	  }

	}
	else{
		echo"<script>console.log('not exec');</script>";
		
	}
}
 else{
	echo "<script>alert('invalid entry methood');</script>";
 }


?>  