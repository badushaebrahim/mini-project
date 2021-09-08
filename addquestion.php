<!DOCTYPE html>
<html lang="en">
<head>
	<title>questions</title>
	<link href="css/home2.1.css" rel="stylesheet" type="text/css">
	<script>
			function ping(){
	var r = confirm("Would you like to exit ");
if (r != true) {
	
} else{
	location.href='index.php';	
}}
function notf(){
	var r2 = confirm("Would you like to go home ");
if (r2 != true) {
	
} else{
	location.href='homef.php';	
}}
function ads(){
	location.href='addsub.php';
}
function bck(){location.href='newexam.php';}</script>
</head>
<body>
	
	<nav class="navma" style="background-color:aqua ;">

	<div class="mainholder" >
		<div class="tx" onclick="bck()"><div id="here" class="inner">Back⬅️</div></div>
				<div class="tx"><div id="her2"onclick="notf()" class="inner"><input type="button"  class="butss"value="Home"></div></div>
		<div class="tx"><div id="her2"  id="out" class="inner"onclick="ping()"><input type="button"  class="butss"value="Sign out "></div></div>
			</div></div></nav>
			<div class="mainbod">
	

<?php
include './functionsphp/dbcheck.inc.php';
$id=$_GET['eid'];

echo"<script>alert('$id);</script>";
?>
<center>
	<h1><u>Question Details</u></h1>
	<br>
</center>
<br>
<center>
<form  method="POST">
<table>
	<tr>
		<td>Question</td>
                <td><textarea name="question"></textarea></td>
	</tr>
	<tr>
		<td>Option 1</td>
                <td><textarea name="op1"></textarea></td>
	</tr>
        <tr>
		<td>Option 2</td>
                <td><textarea name="op2"></textarea></td>
	</tr>
        <tr>
		<td>Option 3</td>
                <td><textarea name="op3"></textarea></td>
	</tr>
        <tr>
		<td>Option 4</td>
                <td><textarea name="op4"></textarea></td>
	</tr>
        <tr>
		<td>Answer</td>
                <td><textarea name="answer"></textarea></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="btnsubmit" value="Submit"></td>
	</tr>
</table>
</form>
</center>
<br>
<br>
<center>
	
<?php
 if(isset($_REQUEST['btnsubmit']))
{
	
    $question=$_REQUEST['question'];
    $op1=$_REQUEST['op1'];
    $op2=$_REQUEST['op2'];
    $op3=$_REQUEST['op3'];
    $op4=$_REQUEST['op4'];
    $answer=$_REQUEST['answer'];
   
    echo"<script>console.log('$question);</script>";
    echo"<script>console.log('$id);</script>";
 $q="insert into tbquestion(examid, question, op1, op2, op3, op4, answer) values('$id','$question','$op1','$op2','$op3','$op4','$answer')";
 $s=mysqli_query($conn,$q);
    if($s)
        {
          echo "<script>alert('Question insertion successful.$id.')</script>";
        }
        else
        {
          echo "<script>alert('sorry error')</script>";
        }
}

 $q="select * from tbquestion where examid='$id'";
 $result=mysqli_query($conn,$q);
 echo "<table border=1><th>Question</th><th>Option 1</th><th>Option 2</th><th>Option 3</th><th>Option 4</th><th >Answer</th></tr>";
 echo'<h1>Questions uploaded</h1>';
 echo'<br>';
 while($row=mysqli_fetch_row($result))
 {  
	//echo"<script>console.log('$row[0]'+'$row[1]'+'$row[2]'+'$row[3]'+'$row[4]'+'$row[6]'+'$row[7]'+'$row[8]');</script>";
  echo "<tr>";
  echo "<td>"."$row[1]"."</td>";
  echo "<td>"."$row[2]"."</td>";
  echo "<td>"."$row[3]"."</td>";
  echo "<td>"."$row[4]"."</td>";
  echo "<td>"."$row[5]"."</td>";
  echo "<td>"."$row[6]"."</td>";
    echo "<td><a class='high'href='update.php?id="."$row[0]"."'>Update</a></td>";
  echo "</tr>";
 }
echo "</table><br><br>";
?>
</div>
<style>
    td,th{
        padding:10px 10px 10px 10px;
    }
</style>
