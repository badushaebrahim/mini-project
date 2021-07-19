<?php
include './functionsphp/dbcheck.inc.php';
$msg = $_POST['msg'];
$reciveris = $_POST['faculty'];
session_start();
$me=$_SESSION["id"];
echo "<script>console.log('$me')</script>";
echo "<script>console.log('$msg')</script>";
$c="select name from faclog where name='$reciveris'";
if($e = mysqli_query($conn,$c)){
$ro=mysqli_fetch_array($e);
echo "<script>console.log('$ro[0]')</script>";
echo "<script>console.log('in')</script>";}
echo "<script>console.log('$reciveris')</script>";
/*if(isset($_POST['submit'])){
$sq="insert into msgholder (senterid,reciverid,message,status)values('$me','$reciveris','$msg','0')";
if($s=mysqli_query($conn,$sq)){
	echo"<script>alert('message sent');</.script>";
	echo "<script>location.href='homes.php'</script>";


}
else{
	echo"<script>alert('message not sent');</.script>";
}

}*/
?>
