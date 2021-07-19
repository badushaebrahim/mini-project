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
<body><?php
session_start();
$t= $_SESSION['id'];
echo"<script>console.log('$t');</script>";
?>
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
	<txt><input type="button" value="Account Settings" onclick="ping()" class="butss"></txt></div>
	<div class="sidewraper">
	<div class="sidebarchild">
	<txt><input type="button" value="Examination" onclick="ping()" class="butss"></txt></div>
	</div>
	<div class="sidebarchild">
	<txt><input type="button" value="Message Faculty" onclick="tomsg()" class="butss"></txt></div><div class="sidewraper">
	<div class="sidebarchild">
	<txt><input type="button" value="Sylabus" onclick="ping()" class="butss"></txt></div>
	</div>
	<div class="sidewraper" id="closer">
	<div class="sidebarchild" >
	<txt><input type="button" value="Xclose" onclick="showhide()" class="butss"></txt></div>
	</div>
	</div>
    <script>
	
 $("#out")  
 function ping(){
	var r = confirm("Would you like to exit ");
if (r == true) {
	
} else{
	location.href='index.php';	
}
	 
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
    function tomsg(){
	    location.href='senting.php';
    }
</script>
=======
	<div class="statholder">
	
	</div>
	
	</div>



</body>
</html> 
<!--<script>
$(".hid").hide(600); 
$(".linka").hide(600);  
$(".inner").hover(function(){
$("inner.hid").show(600);
$(".btun").css("background-color","pink");
$(".linka").show(600);
});
/*$("p").hide(500);
$("p").show(500);*/</script>-->