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
 background: url(./image/loko.svg)    ;
 
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
  <h1><a  target="_blank">Faculty Login</a></h1>
  <form method="POST" action="faclogin.php">
    Email:<br>
    <input class="box" type="text" name="email" class="texts"><br>
    Password<br>
    <input type="password"  name="pass" class="texts">
    <br>
    <br>
    <a href="newfaculty.php">Register</a><br>
    
  <div class="glass-toolbar">
    <input type="submit" name="submit" value="login" class="glass-button"></button><br><br> </form>
    <!--<a href="https://superdevresources.com/glassmorphism-ui-css/" target="_blank" class="glass-button">Glass Link Button</a>-->
  </div>
</div>	
</body>

</html>