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
     <select name="post" id="post">
  <option value="Profeser">professor</option>
  <option value="saab">Assistant-professor</option>
  <option value="mercedes">Lab Assistant</option>
</select><br>
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

<?php
include './functionsphp/dbcheck.inc.php';

if(isset($_POST['btnsubmit']))
{
$post=$_POST['post'];
$Name=$_POST['name'];
$DOB=$_POST['date'];
$Gender=$_POST['gender'];
$Email=$_POST['email'];
$Password=$_POST['pass'];
$q="select count(*) as count from studlog where Email='$Email'";
$s=mysqli_query($conn,$q);
$f=mysqli_fetch_array($s);
function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}
if($f['count']==0)
{
  //$q="insert into studlog(name,dob,gender,email,pwd)values('$Name','$DOB','$Gender','$Email','$Password')";
  //$s=mysqli_query($conn,$q);
debug_to_console($name);
debug_to_console($post);
  debug_to_console($DOB);
  debug_to_console($Gender);
  if($s)
  {
    $q="insert into studlog(Email,Password,user_type,status) values('$Email','$Password','user','1')";
    $s=mysqli_query($conn,$q);
    if(!$s)
    {
      echo "<script>alert('Registration Successfull')</script>";
      echo "<script>location.href='logins.php'</script>";
      
    } 
  else
   {
    echo "<script>alert('Sorry Registration Error')</script>";
    echo "<script>location.href='index.php'</script>";
   }
  }
  else
  {
    echo $q;
     echo "<script>alert('Sorry Registration Error')</script>";
    echo "<script>location.href='login.php'</script>";
  }
}
else
{
  echo "<script>alert('User already exist')</script>";
  echo "<script>location.href='Sighnupstud.php'</script>";
}
}

   ?>