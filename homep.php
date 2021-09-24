<?php
session_start();
$t= $_SESSION['pid'];
$u= $_SESSION['t'];?>	

<!DOCTYPE html>
<html lang="en">
 
<head><meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--<script src="js/jquery-2.1.4.min.js"></script>-->
	<script src="js/jquery.js" ></script>
	<link href="css/fonts/home2.css" rel="stylesheet" type="text/css">
	<title>home Students beta</title>
</head>
<body>
	<nav class="navma">
	<div class="navra">
	<div class="imh"><img class ="sgs" id="im"src="image/logo.svg"></div>
	<div class="mainholder" >
		<div class="tx"><div id="here" class="inner">home</div></div>
				<div class="tx"><div id="her2" class="inner"><input type="button" onclick="notf()" class="butss"value="Notifcation"></div></div>
		<div class="tx"><div id="her2"  id="out" class="inner"><input type="button" onclick="ping()" class="butss"value="Sign out "></div></div>
			</div></div></nav>
	<div class="mainbod">
	<div class="sidebars">
	<div class="sidebarchild" id="inits">
	<txt><input type="button" value="Result"  onclick="ping2()" class="butss2"></txt></div>
	<div class="sidewraper">
	<div class="sidebarchild">
	<txt><input type="button" value="Message faculty" onclick="ping4()" class="butss2"></txt></div>
	</div>
	
   

	<div class="statholder">
	
	</div>
	
	</div>


	<script>

 $("#out")  
 function ping4(){
	var r = confirm("Would you like to exit ");
if (r == true) {
	
} else{
	location.href='sentpar.php';	
}}
function ping2(){

	location.href="studresults.php?pid='$t'";		
}
function addparents(){
location.href='regparent.php';
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
</body>
</html> 
