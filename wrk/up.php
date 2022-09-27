<?php
include './functionsphp/dbcheck.inc.php';
$q="SELECT * FROM `classpool`";
date_default_timezone_set("Asia/Calcutta");
echo"<script>console.log('run')</script>";

$da= date('Y-m-d H:i:s');
$s=  mysqli_query($conn, $q);
while($r=  mysqli_fetch_array($s))
{echo"<script>console.log('f1'+'$r[3]')</script>";echo"<script>console.log('f2'+'$r[4]')</script>";echo"<script>console.log('da2'+'$da')</script>";
	if((($r[3]==$da)||($r[3]<$da))&&(($r[4]>$da)||($r[4]==$da))){
		$run="UPDATE `classpool` SET `statusofcls`=0 WHERE `crid`=$r[6]";
		if($su1=  mysqli_query($conn, $run)){
			echo"<script>console.log('done1')</script>";
		}

		else{
			echo"<script>console.log('up failed1')</script>";

		}
	}
	elseif(($r[3]<$da)&&($r[4]<$da)){//sec finished
		$run2="UPDATE `classpool` SET `statusofcls`=2 WHERE `crid`=$r[6]";
		if($su12=  mysqli_query($conn, $run2)){
			echo"<script>console.log('done2')</script>";
		}

		else{
			echo"<script>console.log('up failed2')</script>";

		}
	}
	elseif(($r[3]>$da)&&($r[4]>$da)){//not started
		$run2="UPDATE `classpool` SET `statusofcls`=1 WHERE `crid`=$r[6]";
		if($su12=  mysqli_query($conn, $run2)){
			echo"<script>console.log('done3')</script>";
		}

		else{
			echo"<script>console.log('up failed3')</script>";

		}
	}
    
}



?>