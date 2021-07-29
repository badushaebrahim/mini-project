<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>mesage</title>
	<script src="./js/jquery-2.1.4.min.js">
	</script>
    <link href="css/msg.css" rel="stylesheet" type="text/css">
	
</head>
<body>
	<div class="maincontainer">
<div class="msgholder">
<div>hello test</div><form method="POST" action="sent.inc.php">

</div><br><br>
<div class="butsholder">
<?php
include './functionsphp/dbcheck.inc.php';
$q="select name,tid from faclog";
 $s=mysqli_query($conn,$q);
echo "<select name='faculty' >";
echo"<option  value=''>names of faculty</options>";
 while ($row =mysqli_fetch_array($s)) {
    unset($username);
    $username = $row['name'];
    $tid = $row['tid'];
    echo '<option value="'.$tid.'"  >'.$username.'</option>';
}
echo "</select>";
     ?>
<div><input type="textbox"name="msg" ></div>
</div>
<div><input type="submit"name="submit"></div>
	</div></form>
</body>
</html>