<?php
include './functionsphp/dbcheck.inc.php';
$fac ="badu";
$q="select name from studlog where name='$fac'";
$s=mysqli_query($conn,$q);
$f=mysqli_fetch_array($s);
echo "$f[0]";
?>