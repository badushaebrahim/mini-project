<!DOCTYPE html>
<html lang="en">
<head><style></style>
<meta charset="UTF-8">
	<title>Profile and Notifications Dropdowns</title>
	
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
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
	</script>
</head>
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
				<div class="navbar">
				<?php	echo"
<!--base-->
   
      <div class='notifications'>
        <div class='icon_wrap'><i id='bella' class='far fa-bell'></i></div>
        
        <div class='notification_dd'><ul class='notification_ul'>";include './functionsphp/dbcheck.inc.php';
	$sql = "SELECT * FROM `feadlog`";
	$ge=mysqli_query($conn,$sql);$co=1;
	while($row=mysqli_fetch_assoc($ge)){
	echo"
            
               <a href = 'mailto: $row[email]'> <li class='starbucks success'>
                    <div class='notify_icon'>
                         
                    </div>
                    <div class='notify_data'>
                        <div class='title'>
                            NO:$co
                        </div>
                        <div id='col' class='sub_title'>
                         $row[fed]
                      </div>
                    </div>
                    ->
                </li> </a> <!--test to complnent-->";$co++;}
                /*<li class='show_all'>
                    <p class='link'>Show All Activities</p>*/
            echo"    
                </li> 
            </ul>
        </div>
        
      ";
			?>	
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
	<a href="ap.php";><txt><input type="button" value="Faculty"  class="butss2"></txt></div></a>
	<div class="sidewraper">
	<div class="sidebarchild">
	<a href="ap3.php";><txt><input type="button" value="Student"class="butss2"></txt></div></a>
	</div>
	<div class="sidebarchild">
	<a href="ap2.php";><txt><input type="button" value="Parents"  class="butss2"></txt></div></a><div class="sidewraper">
	<div class="sidebarchild">
	<a href="atenreport.php"><txt ><input type="button" value="ClassReport"  class="butss2"></txt></div></a>
	</div>
	<div class="sidewraper">
	<div class="sidebarchild">
	<a href="viewres.php"><txt><input type="button" value="Results"  class="butss2"></txt></div></a>
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
	
	</div><div id="lo"></div><div><br><br><iframe src="tests.php" width="300%" height=100% style="border:none	solid black;"></div>
</iframe>

<style> #lo{padding-left:4vh;}</style>




</body>

</html> <style>
	#bella{background-color: rgba(255, 255, 255,4);}
#col{color: blue;}  
body{
  background: white;
  color: black;
}
#here{color:#000;}
#her2{color:#000;}

a{
   color: #7f8db0;
}

.wrapper{
  width: 100%;
  height: 100%;
}

.navbar{
  background-color: rgba(0, 255, 255, 0.808);
  width: 1%;
  height: 60px;
  padding: 0 25px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  box-shadow: 0 1px 2px rgba(0,0,0,0.1);
}

.navbar .navbar_left .logo a{
   font-family: 'Trade Winds';
   font-size: 20px;
}

.navbar .navbar_right{
   display: flex;
}

.navbar .navbar_right img{
  width: 35px;
}

.navbar .navbar_right .icon_wrap{
	background-color: white;
  cursor: pointer;
}

.navbar .navbar_right .notifications{
	background-color: white;
  margin-right: 25px;
}

.navbar .navbar_right .notifications .icon_wrap{
	background-color: white;
  font-size: 28px;
}

.navbar .navbar_right .profile,
.navbar .navbar_right .notifications{
	background-color: white;
  position: relative;
}

.navbar .profile .profile_dd,
.notification_dd{
  position: absolute;
  top: 48px;
  right: -15px;
  user-select: none;
  background: #fff;
  border: 1px solid #c7d8e2;
  width: 350px;
  height: auto;
  display: none;
  border-radius: 3px;
  box-shadow: 10px 10px 35px rgba(0,0,0,0.125),
              -10px -10px 35px rgba(0,0,0,0.125);
}

.navbar .profile .profile_dd:before,
.notification_dd:before{
    content: "";
    position: absolute;
    top: -20px;
    right: 15px;
    border: 10px solid;
    border-color: transparent transparent #fff transparent;
}

.notification_dd li {
    border-bottom: 1px solid #f1f2f4;
    padding: 10px 20px;
    display: flex;
    align-items: center;
}

.notification_dd li .notify_icon{
  display: flex;
}

.notification_dd li .notify_icon .icon{
  display: inline-block;
  background: url('https://i.imgur.com/MVJNkqW.png') no-repeat 0 0;
	width: 40px;
	height: 42px;
}

.notification_dd li.baskin_robbins .notify_icon .icon{
  background-position: 0 -43px;
}

.notification_dd li.mcd .notify_icon .icon{
  background-position: 0 -86px;
}

.notification_dd li.pizzahut .notify_icon .icon{
  background-position: 0 -129px;
}

.notification_dd li.kfc .notify_icon .icon{
  background-position: 0 -178px;
}

.notification_dd li .notify_data{
  margin: 0 15px;
  width: 185px;
}

.notification_dd li .notify_data .title{
  color: #000;
  font-weight: 600;
}

.notification_dd li .notify_data .sub_title{
  font-size: 14px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  margin-top: 5px;
}

.notification_dd li .notify_status p{
  font-size: 12px;
}

.notification_dd li.success .notify_status p{
  color: #47da89;
}

.notification_dd li.failed .notify_status p{
  color: #fb0001;
}

.notification_dd li.show_all{
  padding: 20px;
  display: flex;
  justify-content: center;
}

.notification_dd li.show_all p{
  font-weight: 700;
  color: #3b80f9;
  cursor: pointer;
}

.notification_dd li.show_all p:hover{
  text-decoration: underline;
}

.navbar .navbar_right .profile .icon_wrap{
  display: flex;
  align-items: center;
}

.navbar .navbar_right .profile .name{
  display: inline-block;
  margin: 0 10px;
}

.navbar .navbar_right .icon_wrap:hover,
.navbar .navbar_right .profile.active .icon_wrap,
.navbar .navbar_right .notifications.active .icon_wrap{
	background-color: white;
  color: #3b80f9;
}
 
.navbar .profile .profile_dd{
  width: 225px;
}
.navbar .profile .profile_dd:before{
  rigth: 10px;
}

.navbar .profile .profile_dd ul li {
    border-bottom: 1px solid #f1f2f4;
}

.navbar .profile .profile_dd ul li  a{
    display: block;
    padding: 15px 35px;
    position: relative;
}

.navbar .profile .profile_dd ul li  a .picon{
  display: inline-block;
  width: 30px;
}

.navbar .profile .profile_dd ul li  a:hover{
  color: #3b80f9;
  background: #f0f5ff;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}

.navbar .profile .profile_dd ul li.profile_li a:hover {
    background: transparent;
    cursor: default;
    color: #7f8db0;
}

.navbar .profile .profile_dd ul li .btn{
    height: 32px;
    padding: 7px 10px;
    color: #fff;
    border-radius: 3px;
    cursor: pointer;
    text-align: center;
    background: #3b80f9;
    width: 125px;
    margin: 5px auto 15px;
}

.navbar .profile .profile_dd ul li .btn:hover{
  background: #6593e4;
}

.navbar .profile.active .profile_dd,
.navbar .notifications.active .notification_dd{
	background-color: white;
  display: block;
}

.popup {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    transition: all 0.2s ease;
    display: none;
}

.popup .shadow {
    width: 100%;
    height: 100%;
    background: #000;
    opacity: 0.5;
}

.popup .inner_popup {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 100%;
    height: auto;
}

.popup .notification_dd{
  display: block;
  position: static;
  margin: 0 auto;
  height: 357px;
  overflow: auto;
}

.popup .notification_dd:before{
   display: none;
}

.popup .notification_dd li.title{
  font-weight: 700;
  color: #3b80f9;
  display: flex;
  justify-content: center;
  position: relative;
}

.popup .notification_dd li.title .close{
  position: absolute;
  top: 2px;
  right: 10px;
  font-size: 20px;
  cursor: pointer;
}

.popup .notification_dd li.title .close:hover{
  opacity: 0.5;
}

</style>