
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
background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1404' height='669' preserveAspectRatio='none' viewBox='0 0 1404 669'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1646%26quot%3b)' fill='none'%3e%3crect width='1404' height='669' x='0' y='0' fill='rgba(1%2c 36%2c 71%2c 1)'%3e%3c/rect%3e%3cpath d='M -680.5068720456868%2c106.5 C -610.31%2c169.9 -469.91%2c444.7 -329.50687204568675%2c423.5 C -189.11%2c402.3 -118.91%2c-48.3 21.493127954313252%2c0.5 C 161.89%2c49.3 232.09%2c656.3 372.49312795431325%2c667.5 C 512.89%2c678.7 583.09%2c114.1 723.4931279543132%2c56.5 C 863.89%2c-1.1 938.39%2c341.3 1074.4931279543132%2c379.5 C 1210.59%2c417.7 1338.1%2c273.9 1404%2c247.5' stroke='rgba(219%2c 6%2c 6%2c 1)' stroke-width='2'%3e%3c/path%3e%3cpath d='M -244.61991303088644%2c1.5 C -174.42%2c120.1 -34.02%2c533.3 106.38008696911355%2c594.5 C 246.78%2c655.7 316.98%2c347.1 457.38008696911356%2c307.5 C 597.78%2c267.9 667.98%2c408.1 808.3800869691136%2c396.5 C 948.78%2c384.9 1018.98%2c228.3 1159.3800869691136%2c249.5 C 1299.78%2c270.7 1461.46%2c542.3 1510.3800869691136%2c502.5 C 1559.3%2c462.7 1425.28%2c140.9 1404%2c50.5' stroke='rgba(6%2c 167%2c 219%2c 1)' stroke-width='2'%3e%3c/path%3e%3cpath d='M -144.9811692689397%2c407.5 C -74.78%2c340.1 65.62%2c84.1 206.0188307310603%2c70.5 C 346.42%2c56.9 416.62%2c297.7 557.0188307310602%2c339.5 C 697.42%2c381.3 767.62%2c224.7 908.0188307310602%2c279.5 C 1048.42%2c334.3 1118.62%2c611.5 1259.0188307310602%2c613.5 C 1399.42%2c615.5 1581.02%2c320.5 1610.0188307310602%2c289.5 C 1639.02%2c258.5 1445.2%2c424.7 1404%2c458.5' stroke='rgba(6%2c 167%2c 219%2c 1)' stroke-width='2'%3e%3c/path%3e%3cpath d='M -610.8036336439305%2c539.5 C -540.6%2c467.9 -400.2%2c219.5 -259.80363364393054%2c181.5 C -119.4%2c143.5 -49.2%2c328.5 91.19636635606946%2c349.5 C 231.6%2c370.5 301.8%2c268.1 442.19636635606946%2c286.5 C 582.6%2c304.9 652.8%2c472.5 793.1963663560695%2c441.5 C 933.6%2c410.5 1022.04%2c111.5 1144.1963663560696%2c131.5 C 1266.36%2c151.5 1352.04%2c459.5 1404%2c541.5' stroke='rgba(25%2c 219%2c 6%2c 1)' stroke-width='2'%3e%3c/path%3e%3cpath d='M -65.57411492397642%2c432.5 C 4.63%2c384.5 145.03%2c184.9 285.4258850760236%2c192.5 C 425.83%2c200.1 496.03%2c478.1 636.4258850760236%2c470.5 C 776.83%2c462.9 847.03%2c125.1 987.4258850760236%2c154.5 C 1127.83%2c183.9 1198.03%2c625.7 1338.4258850760236%2c617.5 C 1478.83%2c609.3 1676.31%2c135.1 1689.4258850760236%2c113.5 C 1702.54%2c91.9 1461.09%2c430.3 1404%2c509.5' stroke='rgba(219%2c 186%2c 6%2c 1)' stroke-width='2'%3e%3c/path%3e%3cpath d='M -428.15372663591864%2c633.5 C -357.95%2c549.5 -217.55%2c230.5 -77.15372663591866%2c213.5 C 63.25%2c196.5 133.45%2c534.5 273.84627336408136%2c548.5 C 414.25%2c562.5 484.45%2c303.5 624.8462733640813%2c283.5 C 765.25%2c263.5 835.45%2c462.3 975.8462733640813%2c448.5 C 1116.25%2c434.7 1241.22%2c233.3 1326.8462733640813%2c214.5 C 1412.48%2c195.7 1388.57%2c326.5 1404%2c354.5' stroke='rgba(43%2c 6%2c 219%2c 1)' stroke-width='2'%3e%3c/path%3e%3cpath d='M -509.9436854370434%2c309.5 C -439.74%2c379.9 -299.34%2c673.9 -158.94368543704346%2c661.5 C -18.54%2c649.1 51.66%2c286.7 192.05631456295654%2c247.5 C 332.46%2c208.3 402.66%2c484.1 543.0563145629566%2c465.5 C 683.46%2c446.9 753.66%2c123.9 894.0563145629566%2c154.5 C 1034.46%2c185.1 1143.07%2c642.3 1245.0563145629565%2c618.5 C 1347.05%2c594.7 1372.21%2c152.1 1404%2c35.5' stroke='rgba(219%2c 6%2c 6%2c 1)' stroke-width='2'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1646'%3e%3crect width='20000' height='669' fill='white'%3e%3c/rect%3e%3c/mask%3e%3c/defs%3e%3c/svg%3e");
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
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
  padding-top: 60px;
  color: rgba(255,255,255,0.8);
  
}
a:hover{
  text-shadow: 0 0 3px #FF0000;
  max-width: ;
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
<h1>Parent  Login</h1>

    <form  method="POST" action="lp.inc.php" >
    <br>
    Email:<br> 
    <input type="text" name="email" class="texts"><br><br>
    Password<br>
    <input type="password" name="pass" class="texts">
    <br><br>
    <input type="submit" name="submit" class="glass-button" value="login"></form>
    <!--<a href="https://superdevresources.com/glassmorphism-ui-css/" target="_blank" class="glass-button">Glass Link Button</a>-->
  </div>
</div>	
</body>

</html>
