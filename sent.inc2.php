

<?php
/*student sent*/
include './functionsphp/dbcheck.inc.php';
$msg = $_POST['msg'];
$reciveris = $_POST['faculty'];
//$reciveris2 = $_GET['faculty'];
session_start();
$me=$_SESSION['pid'];
$type=6;
echo "<script>console.log('$me')</script>";
echo "<script>console.log('$msg')</script>";
echo "<script>console.log('reciver'+'$reciveris')</script>";
if(isset($_POST['submit'])){
$sq="insert into msgholder 	(senterid,reciverid,message,sendertype,status)values('$me','$reciveris','$msg','$type','0')";
if($s=mysqli_query($conn,$sq)){
	echo"<script>var r = confirm('message sent Would you like to sent more ');if (r == true) {location.href='senting.php';} else{location.href='homes.php';	}</script>";


}
else{
	echo"<script>alert('message not sent');</.script>";
}

}

echo"<script>var r = confirm('message sent Would you like to sent more ');if (r == true) {location.href='senting.php';} else{location.href='homes.php';	}</script>";
 ?>