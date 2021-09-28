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
    <form method="post" >
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
			    
                        echo '<option id="subs" name="subs value="'.$r[2].'">'.$r[0].'</option>';
                    }
                    ?></select><br>


    Start time :<br>
    <input type="datetime-local" name="sdate"  id="sdate"><br>
    End time :<br>
    <input type="datetime-local" name="edate" id="edate"><br>
   
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
  $Sub=$_POST['subject'];
  //$Password=$_POST['pass'];
  
$q1="select count(*) as count from claspool where timeofcls='$st' and timeofclose='$End'";
$s1=mysqli_query($conn,$q1);
$f1=mysqli_fetch_row($s1);
function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}
if($f1['count']==0)
{
  session_start();
  $ti=$_SESSION['tid'];
  $l="SELECT * FROM `tblsubject`  WHERE sid='$sub'";
  $s5=mysqli_query($conn,$l);
  $r9=  mysqli_fetch_array($s5);

  if($End<$st){
  $q="INSERT INTO `classpool`(`sujectname`, `sibjectid`, `createdby`, `timeofcls`, `timeofclose`, `statusofcls`) VALUES ($r9[0],$subs,$ti,$st,$End,77)";
  $s=mysqli_query($conn,$q);}
  else{//echo "<script>location.href='addcls.php'</script>";
    echo"<script></script>";
  }
 
  if($s)
  {
    $q="insert into classpool(`sujectname`, `sibjectid`, `createdby`, `timeofcls`, `timeofclose`, `statusofcls`) values($r9[0],$subs,$ti,$st,$End,77)";
    $s=mysqli_query($conn,$q);
    if(!$s)
    {
      echo "<script>alert('Class sheduled Successfull')</script>";
     // echo "<script>location.href='clsroom.php'</script>";
      
    } 
  else
   {
    echo "<script>alert('Sorry Registration Error')</script>";
   // echo "<script>location.href='addcls.php'</script>";
   }
  }
  else
  {
    echo $q;
     echo "<script>alert('Sorry Registration Error')</script>";
   // echo "<script>location.href='addcls.php'</script>";
  }
}
else
{
  echo "<script>alert('User already exist')</script>";
  //echo "<script>location.href='Sighnupstud.php'</script>";
}}



   ?>

