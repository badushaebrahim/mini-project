<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body><form method="POST" >
<?php
include './functionsphp/dbcheck.inc.php';
$q="select name,tid from faclog";
 $s=mysqli_query($conn,$q);
echo "<select name='faculty' >";
echo"<option  value=''>names of faculty</options>";
 while ($row =mysqli_fetch_array($s)) {
    unset($username);
    unset($tid);
    $username = $row['name'];
    $username = $row['tid'];
    echo '<option value=" '.$tid.'"  >'.$username.'</option>';
}
echo "</select>";
     ?>	<input type="submit" >
</body>
</html>
<?php
include './functionsphp/dbcheck.inc.php';
$va= $_POST['faculty'];
echo"<script>console.log('test '+'$va');</script>";
$x="select tid from faclog where name='$va'";
if($re=mysqli_query($conn,$x)){
  echo"in";
//$ro=mysqli_fetch_array($re, MYSQLI_BOTH);
$ro=mysqli_fetch_array($re);
echo"<table>test";
echo "<tr>";
echo"<script>console.log('$ro[0]');</script>";
  //echo "<td>"."$ro[0]"."</td>";
  //echo "<td>"."$ro[1]"."</td>";
  //echo "<td>"."$ro[2]"."</td>";
  echo "<td>"."$row[3]"."</td>";
   
  echo "<td>"."$row[4]"."</td>";
  echo "<td>"."$row[5]"."</td>";
  echo"</table>";}
  else{echo"sh";}
/*
$q="select * from faclog";
$result=mysqli_query($conn,$q);
echo "<br>";
echo "<table border=1><tr><th>Name</th><th>DOB</th><th>Gender</th><th>Email</th><th>Address</th><th>Phone Number</th><th>Password</th>";
while($row=mysqli_fetch_row($result))
{ 
  echo "<tr>";
  echo "<td>"."$row[0]"."</td>";
  echo "<td>"."$row[1]"."</td>";
  echo "<td>"."$row[2]"."</td>";
  echo "<td>"."$row[3]"."</td>";
   
  echo "<td>"."$row[4]"."</td>";
  echo "<td>"."$row[5]"."</td>";
  echo "<td>"."$row[6]"."</td>";

 
 
  echo "</tr>";
}
echo "</table>";
*/?>