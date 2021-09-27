<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link href="css/logins.css" rel="stylesheet" type="text/css">-->
    <link href="css/logs.css" rel="stylesheet" type="text/css">
    
    <title>New Class</title>
</head>
    <body><div class="wrap">
  <center>
   <div class="boxmain">
    <p class="h1p">Student Login</p>
    <br>
    <form method="post" action="sighnup.inc.php">
     Class Name:<br>
    <input type="text" name="name" class="texts" id="name"><br>
    
Select subject:<br>
                        <select name="subject">
			<?php
include './functionsphp/dbcheck.inc.php';
                    $q="select * from tblsubject";
                    $s=  mysqli_query($conn, $q);
                    while($r=  mysqli_fetch_array($s))
                    {
			    
                        echo '<option id="subs" value="'.$r[2].'">'.$r[0].'</option>';
                    }
                    ?></select><br>


    Start time :<br>
    <input type="sdate" name="date" class="texts" id="cource"><br>
    End time :<br>
    <input type="edate" name="date" class="texts" id="cource"><br>
   
    <br><br>
    <a href="addSub.php">Add Subject</a><p class="voids">............</p><br>
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


if(isset($_REQUEST['btnsubmit']))
{$Name=$_REQUEST['name'];
  $st=$_REQUEST['sdate'];
  $End=$_REQUEST['edate'];
  $Sub=$_POST['subs'];
  $Password=$_POST['pass'];
  
$q1="select count(*) as count from claspool where timeofcls='$st' and timeofclose='$End'";
$s1=mysqli_query($conn,$q1);
$f1=mysqli_fetch_array($s1);
function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}
if($f1['count']==0)
{
  $q="INSERT INTO `classpool`(`sujectname`, `sibjectid`, `createdby`, `timeofcls`, `timeofclose`, `crid`, `statusofcls`) VALUES ($subs,,[value-3],[value-4],[value-5],[value-6],[value-7])";
  $s=mysqli_query($conn,$q);
  debug_to_console($name);
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
  //echo "<script>location.href='Sighnupstud.php'</script>";
}}



   ?>

