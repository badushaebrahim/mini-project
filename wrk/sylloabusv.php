
<html lang="en">
<head><meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--<script src="js/jquery-2.1.4.min.js"></script>-->
	<script src="js/jquery.js" ></script>
	<link href="css/fonts/home2.css" rel="stylesheet" type="text/css">
	<title>home Students beta</title>	<script src="./js/jquery2.js"></script>
	<script>
		$(document).ready(function(){
			$(".profile .icon_wrap").click(function(){
			  $(this).parent().toggleClass("active");
			  $(".notifications").removeClass("active");
			});

			$(".notifications .icon_wrap").click(function(){
			  $(this).parent().toggleClass("active");
			   $(".profile").removeClass("active");
			});

			$(".show_all .link").click(function(){
			  $(".notifications").removeClass("active");
			  $(".popup").show();
			});

			$(".close").click(function(){
			  $(".popup").hide();
			});
		});
		function notf(){
	 location.href="notif.php";
 }
	</script>
</head>
<body><?php
session_start();
$t= $_SESSION['sid'];
echo"<script>console.log('$t');</script>";
?>
	<nav class="navma">
	<div class="navra">
	<div class="imh"><img class ="sgs" id="im"src="image/logo.svg"></div>
	<div class="mainholder" >
		<div onclick="Window.history.back()" class="tx"><div id="here"   class="inner">home</div></div>
				<div class="tx"><div id="her2" class="inner"><input type="button" onclick="notf()" class="butss"value="Notifcation"></div></div>
		<div class="tx"><div id="her2"  id="out" class="inner"><input type="button" onclick="ping()" class="butss"value="Sign out "></div></div>
			</div></div></nav>
	
	

<center>

<br>
<divclass name="parent">
<?php
include './functionsphp/dbcheck.inc.php';
$sql  = "SELECT * FROM `syllabus` ORDER BY uid DESC";
$r =mysqli_query($conn,$sql);
if(mysqli_num_rows($r)>0){
	//$res = mysqli_fetch_assoc($r);
	while($re=  mysqli_fetch_array($r))
	{
	echo"<a href='upsyl.php?uid=$re[uid]'><div class='cont'><center><h2><b>$re[subject]</b>:-</h2> <h3>$re[heading]</h3><br></center> Show more-></div></a>	";	
		
	    
	}
}
else {echo"<center><br><br><h1>NO CONTENT </h1>🤷‍♂️🤷‍♂️🤷‍♂️<?h1><center>";}


?></div>
<style>
.cont{
	background-color:lightgray;
	margin:.5rem;
	padding:.3rem;
	max-width:50%;
	border-radius:3vh;
  box-sizing: border-box;
  filter: drop-shadow(0px 30px 4px gray);
}
.parent{
  display: flex;
  flex-direction:row;
  flex-wrap: wrap;
}
</style>
