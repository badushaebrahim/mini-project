<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--<script src="js/jquery-2.1.4.min.js"></script>-->
	<script src="js/jquery.js" ></script>
	<link href="css/fonts/home2.css" rel="stylesheet" type="text/css">
	<title>home Faculty beta</title><script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>
</head>
<body>
<?php
session_start();
$t= $_SESSION['tid'];
?>
	<nav class="navma">
	<div class="navra">
	<div class="imh"><img class ="sgs" id="im"src="image/logo.svg"></div>
	<div class="mainholder" >
		<div class="tx"><div id="here" class="inner">home</div></div>
				<!--<div class="tx"><div id="her2" class="inner"><input type="button" onclick="notf()" class="butss"value="Notifcation"></div></div>-->
		<div class="tx"><div id="her2"  id="out" class="inner"><input type="button" onclick="ping()" class="butss"value="Sign out "></div></div>
			</div></div></nav>
	<div class="mainbod">
	<div class="sidebars">
	<div class="sidebarchild" id="inits">
	<a href="editdet.php?id='<?php echo"$t"; ?>'&ty=2"><txt><input type="button" value="Account Settings"  class="butss2"></txt></div></a>
	<div class="sidewraper">
	<div class="sidebarchild">
	<txt><input type="button" value="Examination" onclick="ex()" class="butss2"></txt></div>
	</div>
	<div class="sidebarchild">
	<txt><input type="button" value="Message Center" onclick="tomsg()" class="butss2"></txt></div><div class="sidewraper">
	<div class="sidebarchild">
	<txt onclick="cls()"><input type="button" value="classRoom"  class="butss2"></txt></div>
	</div>
	<div class="sidewraper">
	<div class="sidebarchild">
	<txt><input type="button" value="Add Parents" onclick="addparents()" class="butss2"></txt></div>
	</div>
	<div class="sidewraper" id="closer">
	
	</div></div>
    <script>
	
 $("#out")  
 function ping(){
	var r = confirm("Would you like to exit ");
if (r != true) {
	
} else{
	location.href='index.php';	
}}
function addparents(){
location.href='regparent.php';
}
function cls(){
location.href='clsroom.php';
}
function tomsg(){
		   location.href='split.php';
	   }
	   function ex(){
		   location.href='newexam.php';
	   }
 function notf(){
	 alert("notification");
 }
 function showhide()
    {  
         var div = document.getElementById("sidebars");  
         if (div.style.visibility !== "none") 
         {  
		 console.log("ping");
             div.style.visibility = "none";  
         }  
         else
         {  
             div.style.visibility = "visible";  
         }  
    }
    
</script>

	<div class="statholder">
	
	</div><div><br><br><iframe src="tests.php" width="300%" height=100% style="border:none	solid black;"></div>
</iframe>

</body>
</html> 
