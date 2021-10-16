<!DOCTYPE html>
<html lang="en">
<head><style></style>
<script></script>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="js/jquery-2.1.4.min.js"></script>
	
	<link href="css/fonts/home2.css"  rel="stylesheet" type="text/css">
	<title>home Admin beta</title>
</head>
<body>
	<nav class="navma" >
		<div class="navra" id="lol24">
			<div class="imh"><img class ="sgs" id="im"src="image/logo.svg"></div>
			<div class="mainholder" >
				<!-- -->
				
				<div class="tx"><div id="here" class="inner">home</div></div>
				
				<div class="tx"><div id="her2" id="out" class="inner">Sign out</div></div>
				
				
				
			</div>
		</div>
	</nav>
	<div class="mainbod"><!--
		<div class="imgho"> <img class="imgssml" src="image/cls1.jpg" > </div>
	
	<div class="txts">
		<div class="btnholder"><div class="btns"><center><a href="index.php"><input value="Login"  src="index.php" type="button" class="btun" ></a></center></div> <p class="hideen">...</p>
		<div class="btns"><center><input value="Our Faculty" id="faq" type="button" class="btun" ></center></div>
	</div> 
	</div>-->
	
    <script>
	    $("#here").click(function(){
		    
	    })
 $("#out").click(function(){
	 location.href='index.php';
 })   
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

	<div class="sidebars">
	<div class="sidebarchild" id="inits">
	<txt><input type="button" value="Faculty" onclick="ping()" class="butss2"></txt></div>
	<div class="sidewraper">
	<div class="sidebarchild">
	<txt><input type="button" value="Student" onclick="ex()" class="butss2"></txt></div>
	</div>
	<div class="sidebarchild">
	<txt><input type="button" value="Parents" onclick="tomsg()" class="butss2"></txt></div><div class="sidewraper">
	<div class="sidebarchild">
	<txt onclick="cls()"><input type="button" value="ClassReport"  class="butss2"></txt></div>
	</div>
	<div class="sidewraper">
	<div class="sidebarchild">
	<txt><input type="button" value="Results" onclick="addparents()" class="butss2"></txt></div>
	</div>
	<div class="sidewraper" id="closer">
	
	</div></div>
    <script>
	var div = document.getElementsById("lol24");
  div.style.Color= "pink";


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
	
	</div><div id="lo"><br><br><iframe src="tests.php" width="300%" height=100% style="border:none	solid black;"></div>
</iframe>

<style> </style>




</body>

</html>   