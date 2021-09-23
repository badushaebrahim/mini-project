<?php
include 'functionsphp/dbcheck.inc.php';
echo "<script>console.log('ins')</script>;";
if(isset($_POST['sub']))
{
 $Email=$_POST['email'];
 $Password=$_POST['pass'];
 echo "<script>console.log('$Email');</script>";
  echo "<script>console.log('$Password');</script>";
 $q="select count(*) as count from studlog where Email='$Email'";
 $s=mysqli_query($conn,$q);
 $f=mysqli_fetch_array($s);
 if($f['count'] != 0)
 {
 	 $q="select * from studlog where Email='$Email'";
 	 $s=mysqli_query($conn,$q);
 	 $row=mysqli_fetch_array($s);
	 /* echo "<script>console.log('$row[0]');</script>";
	  echo "<script>console.log('$row[1]');</script>";
	  echo "<script>console.log('$row[2]');</script>";
	  echo "<script>console.log('$row[3]');</script>";
	  echo "<script>console.log('$row[4]');</script>";
	  echo "<script>console.log('$row[5]');</script>";*/
 	 	$pwd=$row[4];
 	 if($Password==$pwd)
 	 {$status = 1;
 	 	if($status=='1')
 	 	{
 			$q="select uid from studlog where Email='$Email'";
                            $s=mysqli_query($conn,$q);
                         $row=mysqli_fetch_array($s);
			 echo "<script>console.log('second');</script>";
			 echo "<script>console.log('ids'+'$row[0]');</script>";
				session_start();	
	  
				echo"<h1> user found</h1>";
                            $_SESSION['sid']=$row[0];
			    $_SESSION['t']=2;
	                          //echo "<script>alert('$_SESSION[id]');";
				  header("location: ../wrk/homes.php");
				  echo "<script>console.log('make done');</script>";
				  echo "<script>console.log('sec'+'$_SESSION[id]');</script>";
 	 			
 	 			//echo "<script>location.href='homes.php'</script>";
 	 		}	
 	 	}

 	 
 	 else
 	 {
 	 	echo "PASSWORD IS INCORRECT";
		  header("location: ../wrk/logins.php");
 	 }}	
 else
 {
 	echo "user not exist";
 }}
 else {
	 echo"<script> console.log('not sub');</script>";
 }
?>