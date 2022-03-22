<?php

  include'./functionsphp/dbcheck.inc.php';
$id=$_GET['id'];
$ty=$_GET['ty'];
switch($ty){
case 1:
$qry="update `faclog` set status='1' where tid='$id'";

if(mysqli_query($conn,$qry))
    echo '<script>location.href="ap.php"</script>';
echo $qry;
break;//faculty
case 2:
$qry1="update `studlog` set status='1' where uid='$id'";
;
if(mysqli_query($conn,$qry1))
    echo '<script>location.href="ap3.php"</script>';
echo $qry;
break;//student
case 3:
$qry3 ="update `parentlog`set status='1' where pid='$id'";
$s3=mysqli_query($conn,$qry3);
if($s)
    echo '<script>location.href="ap2.php"</script>';
echo $qry;
break;//parent


}
?>