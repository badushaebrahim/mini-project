<?php

$pid = $_SESSION['pid'];
$r="select sid   from parentlog where pid='$pid'";

$cid;
$r2= "select * from tblresult where ";

?>