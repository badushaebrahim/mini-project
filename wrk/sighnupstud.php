<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link href="css/logins.css" rel="stylesheet" type="text/css">-->
    <link href="css/logs.css" rel="stylesheet" type="text/css">
    
    <title>student sighnup</title>
</head>
    <body><div class="wrap">
  <center>
   <div class="boxmain">
    <p class="h1p">Student Login</p>
    <br>
    <form method="post" action="sighnup.inc.php">
    Name:<br>
    <input type="text" name="name" class="texts" id="name"><br>
    Date of Birth:<br>
    <input type="date" name="date" class="texts" id="cource"><br>
    Gender <br>
    <input type="radio" name="gender" value="male" >Male
    <input type="radio" name="gender"  value="female">Female
     <input type="radio" name="gender" value="other">Other<br>
    Email:<br>
    <input type="email" name="email" class="texts" id="email" placeholder="Email here"><br>
    Password<br>
    <input type="password" name="pass" class="texts" id="pwd" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$" required="" placeholder="Your Password..">
    <br>
    <br><br>
    <a href="logins.php">login</a><p class="voids">............</p><br>
    <input type="submit" class="bts" value="sign up" name="btnsubmit">
    </form>
</div>      
</center>

</div>

</div>

</div>
</div>
</body>

</html>
<?php
include 'fot.php';
?>

