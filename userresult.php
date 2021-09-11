<?php

include './functionsphp/dbcheck.inc.php';
$q="delete from tbltime";
        $result=mysqli_query($conn,$q);
$rid=$_GET['rid'];
$q="select * from tblresult where resultid='$rid'";
$s=  mysqli_query($conn, $q);
$r=  mysqli_fetch_array($s);
echo '<br><br><br><center><h3>You won: '.$r[4].'/10</h3></center><br><br><br><br><br><br><br>';

?>