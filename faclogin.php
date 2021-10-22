<?php 
include './functionsphp/dbcheck.inc.php';
if(isset(($_POST['submit']))){
	

	$Email=$_POST['email'];
	$Password=$_POST['pass'];
	//echo"<script>console.log('$Email'+'$Password');</script>";
	$q="select count(*) as count from faclog where Email='$Email'";
 $s=mysqli_query($conn,$q);
 $f=mysqli_fetch_array($s);
 
 if($f['count'] != 0)
 {
	

 	 $q="select * from faclog where Email='$Email'";
	  $s=mysqli_query($conn,$q);
 	 $row=mysqli_fetch_array($s);
	 //echo"<script>console.log('$Email'+'$Password');</script>";
	  echo"<script>console.log('$row[5]'+'$row[6]');</script>";
	  $pwd = $row[4];
	  if($Password == $pwd){if($row[7]==0){
		session_start();
		$_SESSION['tid']=$row[6];
		$_SESSION['t']=3;

		echo"<script>console.log('$_SESSION[name]');</script>";
		//echo "$_SESSION";
		echo"<script>console.log('login ok');</script>";
		
		//echo"<script>console.log('$_SESSION[name]');</script>";
		header("location: ../wrk/homef.php");}
		else{
			echo "<script>alert('Contact Admin & Wait Please <br> if need use <a>click</a>');</.script>";
		}
	  }
	  else{echo "<script>alert('Contact Admin & Wait Please <br> if need use <a>click</a>');</.script>";
			//echo "<script>alert('invalid password');</.script>";
	  }

	}
	else{echo "<script>alert('Contact Admin & Wait Please <br> if need use <a>click</a>');</.script>";
		echo"<script>alert('user not found');</script>";
		
	}
}
 else{echo "<script>alert('Contact Admin & Wait Please <br> if need use <a>click</a>');</.script>";
	echo "<script>alert('invalid entry methood');</.script>";
	
 }
?>