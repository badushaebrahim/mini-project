<?php
include './functionsphp/dbcheck.inc.php';

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