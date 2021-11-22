<?php

include 'functionsphp/dbcheck.inc.php';
echo "<script>console.log('ins')</script>;";
if(isset($_POST['sub']))
{
 $Email=$_POST['email'];
 $Password=$_POST['pass'];
 echo "<script>console.log('$Email');</script>";
  echo "<script>console.log('$Password');</script>";
 $q="select count(*) as count from studlog where Email='$Email'";
 $s=mysqli_query($conn,$q);
 $f=mysqli_fetch_array($s);
 if($f['count'] != 0)
 {
 	 $q="select * from studlog where Email='$Email'";
 	 $s=mysqli_query($conn,$q);
 	 $row=mysqli_fetch_array($s);
	 /* echo "<script>console.log('$row[0]');</script>";
	  echo "<script>console.log('$row[1]');</script>";
	  echo "<script>console.log('$row[2]');</script>";
	  echo "<script>console.log('$row[3]');</script>";
	  echo "<script>console.log('$row[4]');</script>";
	  echo "<script>console.log('$row[5]');</script>";*/
 	 	$pwd=$row[4];
 	 if($Password==$pwd)
 	 {$status = $row[6];
 	 	if($status==0)
 	 	{
 			$q="select uid from studlog where Email='$Email'";
                            $s=mysqli_query($conn,$q);
                         $row=mysqli_fetch_array($s);
			 echo "<script>console.log('second');</script>";
			 echo "<script>console.log('ids'+'$row[0]');</script>";
					
	  
				//echo"<h1> user found</h1>";
        session_start();
		
                            if($_SESSION['sid']=$row[0]){
			    
	                          //echo "<script>alert('$_SESSION[id]');";
				 // header("location: ../wrk/homes.php");
				  echo "<script>console.log('make done');</script>";
				  echo "<script>console.log('sec'+'$_SESSION[sid]');</script>";
 	 			
 	 		echo "<script>location.href='homes.php'</script>";}else{echo "<script>alert('Secfail ');</script>";}
 	 		}
			  else{echo "<script>alert('Contact Admin & Wait ');</script>";}	
 	 	}

 	 
 	 else
 	 {
 	 	echo "<script>alert('PASSWORD IS INCORRECT')</script>";
		 
 	 }}	
 else
 {
 	echo "<script>alert('user not exist')</script>";
 }}
 else {
	// echo"<script> alert('not sub');</script>";
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>.glass-panel {
  color: #fff;

  margin: 40px auto;
  background-color: rgba(255,255,255,0.06);
  border: 1px solid rgba(255,255,255,0.3);
  width: 100%;
  border-radius: 15px;
  padding: 32px;
  backdrop-filter: blur(5px);
}

.glass-button {
  display: inline-block;
  padding: 24px 32px;
  border: 0;
  text-decoration: none;
  border-radius: 15px;
  background-color: rgba(255,255,255,0.1);
  border: 1px solid rgba(255,255,255,0.1);
  backdrop-filter: blur(30px);
  color: rgba(255,255,255,0.8);
  font-size: 14px;
  letter-spacing: 2px;
  cursor: pointer;
  text-transform: uppercase;
}

.glass-button:hover {
  background-color: rgba(255,255,255,0.2);
  border: 1px solid rgba(255,255,255,0.8);
}

body {
/* background: url(./image/loko.svg)    ;*/
 background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask2026%26quot%3b)' fill='none'%3e%3crect width='1440' height='560' x='0' y='0' fill='url(%23SvgjsLinearGradient2027)'%3e%3c/rect%3e%3cpath d='M791.719%2c256.504C811.204%2c256.839%2c831.214%2c251.362%2c841.868%2c235.044C853.492%2c217.24%2c854.863%2c194.182%2c844.547%2c175.59C833.936%2c156.466%2c813.585%2c144.268%2c791.719%2c144.661C770.472%2c145.043%2c752.072%2c158.677%2c742.082%2c177.432C732.678%2c195.087%2c733.831%2c216.429%2c744.466%2c233.371C754.459%2c249.29%2c772.926%2c256.181%2c791.719%2c256.504' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M614.4145160876994 30.753637717303413L486.08905285657045 87.88781500330788 543.2232301425748 216.2132782344369 671.5486933737039 159.07910094843243z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M251.4648035335267 85.53502420623863L200.0048784996485 114.05972643959825 268.521894366627 176.9872628737357z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M1120.03 404.16 a123.82 123.82 0 1 0 247.64 0 a123.82 123.82 0 1 0 -247.64 0z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M287.09094938796574 272.9369109347265L298.66522494321225 367.2018207094914 434.27545182773633 302.70795248923923z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M149.06765153662167-94.60309162666636L11.971748419071844-18.609591611516578 87.96524843422162 118.48631150603325 225.06115155177145 42.49281149088347z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M212.35722411612818 138.43637646627246L323.4775578905725 205.20420900453416 390.2453904288342 94.08387523008987 279.1250566543899 27.31604269182816z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M1455.701076891375 109.7112305723794L1356.7290721930203 63.444943583291234 1363.3910624317923 158.7158425934392z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M376.215%2c396.267C410.54%2c396.013%2c431.038%2c361.966%2c447.495%2c331.842C463.034%2c303.397%2c474.338%2c271.341%2c460.465%2c242.047C444.585%2c208.514%2c413.264%2c179.325%2c376.215%2c181.323C341.178%2c183.213%2c321.608%2c218.757%2c306.362%2c250.359C293.536%2c276.944%2c290.336%2c306.289%2c303.082%2c332.912C318.009%2c364.092%2c341.647%2c396.523%2c376.215%2c396.267' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M775.05 239.56 a161.69 161.69 0 1 0 323.38 0 a161.69 161.69 0 1 0 -323.38 0z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M385.76220029279256 146.19748459995174L493.77743507937254 134.84462595066577 482.4245764300866 26.829391164085763 374.4093416435066 38.18224981337174z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M981.8100103905359 323.5099517553876L895.1973199229667 332.6133123512842 952.1587060505962 457.98066775468976z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M295.4960946330716 352.951443141606L305.91934595234306 203.8920047148718 146.43665620633743 342.5281918223345z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask2026'%3e%3crect width='1440' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3clinearGradient x1='15.28%25' y1='-39.29%25' x2='84.72%25' y2='139.29%25' gradientUnits='userSpaceOnUse' id='SvgjsLinearGradient2027'%3e%3cstop stop-color='rgba(28%2c 181%2c 189%2c 1)' offset='0.17'%3e%3c/stop%3e%3cstop stop-color='rgba(158%2c 0%2c 120%2c 1)' offset='1'%3e%3c/stop%3e%3c/linearGradient%3e%3cstyle%3e %40keyframes float1 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-10px%2c 0)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float1 %7b animation: float1 5s infinite%3b %7d %40keyframes float2 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-5px%2c -5px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float2 %7b animation: float2 4s infinite%3b %7d %40keyframes float3 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(0%2c -10px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float3 %7b animation: float3 6s infinite%3b %7d %3c/style%3e%3c/defs%3e%3c/svg%3e");
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: contain;
  text-align: center;
  font-family: 'Open Sans', sans-serif;
}

.glass-panel {  
  max-width: 100vh;
}

.glass-button {
  margin: 15px;
  margin-top: 40px;
  
}
.g:hover:hover{
  margin:20px;
  border: #fff solid ;
  box-shadow: inset 5em 1em gold;
}

h1, h1, a{
  min-height: 120px;
  width: 90%;
 max-width: 43.5em;
  vertical-align: middle;
  text-align: center;
  margin: 0 auto;
  text-decoration: none;
  color: rgba(255, 255, 255, 50);
  padding-bottom: 60px;
  color: rgba(255,255,255,0.8);
  
}
a:hover{
  text-shadow: 0 0 3px #FF0000;
  
}
texts{
  box-shadow: 12px 12px 2px 1px rgba(255, 255, 255, 10);

  border: #fff;
}
p {
  width: 80%;
  margin: 0 auto;
  padding-bottom: 32px;
  color: rgba(255,255,255,0.6);
}</style>
</head>
<body>
<div class="glass-panel">
<h1>Student  Login</h1>
<form method="post"  >
    
   
    Email:<br>
    <input type="email" name="email" class="texts"><br><br>
    Password<br>
    <input type="password" name="pass" class="texts">
    <br><br>
    <br>
    
    <a href="sighnupstud.php">Register</a><br>
    <input type="submit"  class="glass-button" name= "sub"value="login"><br></form>
    <!--<a href="https://superdevresources.com/glassmorphism-ui-css/" target="_blank" class="glass-button">Glass Link Button</a>-->
  </div>
</div>	
</body>

</html>
