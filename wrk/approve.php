<?php

  include'./functionsphp/dbcheck.inc.php';
$id=$_GET['id'];
echo "$id";
$ty=$_GET['ty'];
echo "$ty";
switch($ty){
case 1:
$qry="update `faclog` set status='0' where tid='$id'";

if(mysqli_query($conn,$qry))
    echo '<script>location.href="ap.php"</script>';
echo $qry;
break;//faculty
case 2:
$qry1="update `studlog` set status='0' where uid='$id'";
$s12=mysqli_query($conn,$qry1);
if($s)
    echo '<script>location.href="ap3.php"</script>';
echo $qry;
break;//student
case 3:
$qry3 ="update `parentlog`set status='0' where pid='$id'";
$s3=mysqli_query($conn,$qry3);
if($s)
    echo '<script>location.href="ap2.php"</script>';
echo $qry;
break;//parent


}
?>