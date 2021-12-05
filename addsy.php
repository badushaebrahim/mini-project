<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" >
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
	location.href='addcls.php';
}function ex(){
	location.href='atenreport.php';
}
function ex2(){
	location.href='addsy.php';
}

function oops(){alert("Scession has ended");}function oops0(){alert("Scession has not started yet");}
function bck(){location.href='addsub.php';}</script>
<style>.done{background-color: lightblue;} .not{background-color: orange;} </style>
</head>
<body>
	
	<nav class="navma">
	<div class="navra">
	<div class="imh"><img class ="sgs" id="im"src="image/logo.svg"></div>
	<div class="mainholder" >
	<a href="homef.php"><div class="tx"><div id="here" class="inner">Back </a></div></div></a>
				<div class="tx"><div id="her2"onclick="notf()" class="inner"><input type="button"  class="butss"value="Home"></div></div>
		<div class="tx"><div id="her2"  id="out" class="inner"onclick="ping()"><input type="button"  class="butss"value="Sign out "></div></div>
		</div></div><div><br><br>
		<center><form method="POST">
		<h2>Enter new Syllabus	</h2><br><br>
		Select subject
                        <select name="subject">
                    <?php
		    include "./functionsphp/dbcheck.inc.php";
                    $q="select * from tblsubject";
                    $s=  mysqli_query($conn, $q);
                    while($r=  mysqli_fetch_array($s))
                    {
			    
                        echo '<option value="'.$r[0].'">'.$r[0].'</option>';
                    }
                    ?>
                    </select><br><br>
		    Enter Heading -:<input type="test" name="heading"><br><br>
		    <table><tr><td>Enter content :-</td><td><textarea name ="content"></textarea> </td></tr></table>
		    <input type="submit" name="sub" value="Submit"> <a href="homef.php"><input type="button" name="go Back" value="go Back"></a>
		    </form>
		</center></div>
		<?php
		if(isset(($_POST['sub']))){
			$sub=$_POST['subject'];
			$content=$_POST['content'];
			$heading=$_POST['subject'];
			//$q="insert into tlbexam(Examname,subjectid,duration) values('$name','$subject','$duration')";
  
			//echo"console.log($sub+$content+$heading)";
		$new="INSERT INTO `syllabus` (`subject`, `heading`, `content`) VALUES ('$sub', '$heading', '$content');";
		if($push=mysqli_query($conn,$new)){
          echo "<script>alert('syllabus insertion successful')</script>";}
        else
        {
          echo "<script>alert('sorry error122');
	  
	  </script>";
        }
}


		
		?>

		<style>
		button{
			margin:15px;
		}
		</style>