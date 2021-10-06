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
    <form method="POST" >
     Class Name:<br>
    <input type="text" name="name" class="texts" id="name"><br>
    
Select subject:<br>
                        <select name="subject">
			<?php function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}
include './functionsphp/dbcheck.inc.php';
                    $q="select * from tblsubject";
                    $s=  mysqli_query($conn, $q);
                    while($r=  mysqli_fetch_array($s))
                    {
                       // Debug_to_console($r[2]);
                        echo'<option id="subs" value="'.$r[2].'">'.$r[0].'</option>';
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
  


  Debug_to_console($Sub);
  session_start();
  $tid=3;
  $l1= "SELECT * FROM `tblsubject` WHERE `sid2`=$Sub";
  $s5=mysqli_query($conn,$l1);
  $r9=  mysqli_fetch_array($s5);
  if (!$r9) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

if($st<$End){}
  //if($End<$st){
  $q44="INSERT INTO `classpool`(`sujectname`, `sibjectid`, `createdby`, `timeofcls`, `timeofclose`, `statusofcls`) VALUES ('$Name', $Sub,$tid,'$st','$End',1)";
  Debug_to_console($tid);
  Debug_to_console(0);
  Debug_to_console($End);
  Debug_to_console($st);
  Debug_to_console($Sub);
  Debug_to_console($Name);
  
  //}
  //else{//echo "<script>location.href='addcls.php'</script>";
    //echo"<script></script>";
  //}
 
  if($s7=mysqli_query($conn,$q44))
  {
   
      echo "<script>alert('Class sheduled Successfull')</script>";
     // echo "<script>location.href='clsroom.php'</script>";
      
    } 
  else
   {
    echo "<script>alert('Sorry Registration Error1')</script>";
    if (!$s7) {
      printf("Error: %s\n", mysqli_error($conn));
      exit();
  }
   // echo "<script>location.href='addcls.php'</script>";
   }
   
  }
  else
  {
   
     echo "<script>alert('i error')</script>";
   // echo "<script>location.href='addcls.php'</script>";
  }
//}
/*else
{
  echo "<script>alert('User already exist')</script>";
  //echo "<script>location.href='Sighnupstud.php'</script>";
}*///}


   ?>

