<?php
include 'dbcheck.inc.php';
echo "<script>console.log('ins');";
if(isset($_POST['sub']))
{
 $Email=$_POST['email'];
 $Password=$_POST['pass'];
 echo "<script>console.log('$Email');";
 $q="select count(*) as count from studlog where Email='$Email'";
 $s=mysqli_query($conn,$q);
 $f=mysqli_fetch_array($s);
 if($f['count'] != 0)
 {
 	 $q="select * from studlog where Email='$Email'";
 	 $s=mysqli_query($conn,$q);
 	 $row=mysqli_fetch_array($s);
 	 	$pwd=$row[4];
 	 if($Password==$pwd)
 	 {
 	 	if($status=='1')
 	 	{
 			$q="select uid from studlog where Email='$Email'";
                            $s=mysqli_query($conn,$q);
                            $row=mysqli_fetch_array($s);
				echo"<h1> uer found</h1>";
                            $_SESSION['id']=$row[0];
	                          echo "$_SESSION";
				  header("location: ../wrk/home.php");
				  echo "<script>console.log('make done');</script>";
 	 			
 	 			echo "<script>location.href='homes.php'</script>";
 	 		}	
 	 	}

 	 
 	 else
 	 {
 	 	echo "PASSWORD IS INCORRECT";
 	 }}
	
 else
 {
 	echo "user not exist";
 }}
 else {
	 echo"<script> console.log('not sub');</script>";
 }
?>