<!DOCTYPE html>
<html lang="en">
<head>
<?php

?>	
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>exam control</title>
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
}</script>
</head>
<body>
	
	<nav class="navma">
	<div class="navra">
	<div class="imh"><img class ="sgs" id="im"src="image/logo.svg"></div>
	<div class="mainholder" >
		<div class="tx"><div id="here" class="inner">Exam Center</div></div>
				<div class="tx"><div id="her2"onclick="notf()" class="inner"><input type="button"  class="butss"value="Home"></div></div>
		<div class="tx"><div id="her2"  id="out" class="inner"onclick="ping()"><input type="button"  class="butss"value="Sign out "></div></div>
			</div></div></nav>
			<div class="mainbod">
	<div class="sidebars">
	<div class="sidebarchild" id="inits">
	<txt><input type="button" value="Add New Subjects" onclick="ads()" class="butss"></txt></div>
	<div class="sidewraper">
	<div class="sidebarchild">
	<txt><input type="button" value="Examination" onclick="ex()" class="butss"></txt></div>
	</div>

</div>
<div class="statholder">
<?php
include './functionsphp/dbcheck.inc.php';?>
<center>
<br>
<br><h1>Add Exams</h1>
<p class="hideen">........................................................................................................................................................................................</p>
<form  method="POST">
<table>
	<tr>
		<td>Name of exam</td>
                <td><input type="text" id="name" name="name"></td>
	</tr>
	<tr>
		<td>Select subject</td>
                        <td><select name="subject">
                    <?php
                    $q="select * from tblsubject";
                    $s=  mysqli_query($conn, $q);
                    while($r=  mysqli_fetch_array($s))
                    {
			    
                        echo '<option value="'.$r[2].'">'.$r[0].'</option>';
                    }
                    ?>
                    </select></td>
	</tr>
        <tr>
		<td>Duration in minutes</td>
                <td><input type="number" id="duration" name="duration"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="btnsubmit" value="Upload"></td>
	</tr>
</table>
</form>

<?php
 if(isset($_REQUEST['btnsubmit']))
{
 $name=$_REQUEST['name'];
  $subject=$_REQUEST['subject'];
   $duration=$_REQUEST['duration'];
   
  $q="select count(*) from tlbexam where lower(Examname)=lower('$name') and subjectid='$subject'";
 $result=mysqli_query($conn,$q); 
 $r=  mysqli_fetch_array($result);
 if($r[0]>0)
     {
          echo "<script>alert('Exam already added')</script>";
        }
        else
        {
 $q="insert into tlbexam(Examname,subjectid,duration) values('$name','$subject','$duration')";
  
  $s=mysqli_query($conn,$q);
    if($s)
        {
          echo "<script>alert('Exam insertion successful')</script>";
        }
        else
        {
          echo "<script>alert('sorry error122')</script>";
        }
}
}
//SELECT tlbexam.*, tblsubject.subjectname FROM tlbexam , tblsubject WHERE tlbexam.* = tblsubject.sid2 AND tblsubject.subjectname = tlbexam`.`subjectid`;

 $q="select tlbexam.*,tblsubject.subjectname from tlbexam,tblsubject where tlbexam.subjectid=tblsubject.sid2";
 $result=mysqli_query($conn,$q);
 echo "<table border=1><th>Exam name</th><th>Subject</th><th colspan='2'>Duration</th></tr>";
 while($row=mysqli_fetch_row($result))
 {  
  echo "<tr>";
  
  echo "<td>"."$row[0]"."</td>";
  echo "<td>"."$row[4]"."</td>";
  echo "<td>"."$row[3]"."</td>";
  echo "<td><a class='high' href='addquestion.php?eid="."$row[0]"."'>Add Questions</a></td>";
  echo "</tr>";
 }
echo "</table><br><br>";
?>


	</div>
	</center>
</div>


</body>
</html>