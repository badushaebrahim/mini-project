<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/logins.css" rel="stylesheet" type="text/css">
    <title>Faculty login</title>
</head>
    <body><div class="wrap">
  <center>
   <div class="boxmain">
   <form method="POST" action="faclogin.php">
    <p class="h1k">Faculty Login</p>
    <br>
    Email:<br>
    <input type="text" name="email" class="texts"><br>
    Password<br>
    <input type="password" name="pass" class="texts">
    <br>
    <br>
    <a href="newfaculty.php">Register</a><p class="voids">............</p><br>
    <input type="submit" name="submit" class="bts" value="login"></form>
</div>
</center>
</div>
</div>
</div>
</div>
</body>
</html>
<?php
include 'fot.php'
?>