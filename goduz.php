
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>feadback form</title>
  <style>
    body{
     
    }
    h1{
    text-shadow: 10px 10px 9px #888888;
      background-color: transparent;
    }
    .box{
      box-shadow: 0px 4px 4px #888888;
      border: none;
    }
    .bt{
      padding: 2vh;
      padding-left: 2vh;
      padding-right: 2vh;
      //background-image: linear-gradient(red, yellow);

    box-shadow: 10px 10px 9px #888888;
    border-radius: 1vh;
    }
    div {
      background-color: whitesmoke;
      max-width: 50%;
    box-shadow: 10px 10px 9px #888888;
    border-radius: 1vh;
    

    }
  </style>
</head>
<body><center>
<form method="POST" action=""><br>
<br>
<h1>Feadback</h1>
<br><div>
Email:<br><br>
<input type="text" class="box" name="email"><br><br>
Feadback:<br><br> 
<input type="text" class="box" name="question"><br><br>
<input type="submit" class="bt" name="submit">
</div>
</form></center>
</body>
</html>
<?php
include './functionsphp/dbcheck.inc.php';
if(isset($_POST['submit'])){
  $feadback = $_POST['question'];
  $email = $_POST['email'];
  $q="insert into feadlog(email,fed)values('$email','$feadback')";
  if($s=mysqli_query($conn,$q)){
    echo"<script>var r = confirm('message sent Would you like to sent more ');if (r == true) {location.href='goduz.php';} else{location.href='home.php';	}</script>";
  }
  else{
    echo"<script>alert('senting error')</script>";
  }
  

}

?>