<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="js/jquery-2.1.4.min.js"></script>
	
	<link href="css/fonts/home2.css"  rel="stylesheet" type="text/css">
	<title>home Students beta</title>
</head>
<body>
	<nav class="navma">
		<div class="navra">
			<div class="imh"><img class ="sgs" id="im"src="image/logo.svg"></div>
			<div class="mainholder" >
				<!-- -->
				
				<div class="tx"><div id="here" class="inner">home</div></div>
				<div class="tx"><div id="her2" class="inner">Notification</div></div>
				<div class="tx"><div id="her2" id="out" class="inner">Sign out</div></div>
				
				
				
			</div>
		</div>
	</nav>
	<div class="mainbod">
	
	<div class="sidebars">
	
	<div class="sidebarchild" id="inits">
	<txt>hello</txt></div>
	<div class="sidewraper">
	<div class="sidebarchild">
	hello</div>
	</div>
	
	
	<div class="sidebarchild">
	hello</div><div class="sidewraper">
	<div class="sidebarchild">
	hello</div>
	</div>
	<div class="sidewraper" id="closer">
	<div class="sidebarchild" >
	<input type="button" value="close" onclick="ping()" class="butss"></div>
	</div>
	</div>



    <script>
    
	    $(".slidebarchild").hover(function(){
		    alert("jqwrks");
	    })
 $("#out").on("click",function(){
	 location.href='index.php';
 })   
 function ping(){
	 alert("wrks");
	 $(".sidebar").slideToggle(5000);
 }
    </script>

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
</body>

</html>   