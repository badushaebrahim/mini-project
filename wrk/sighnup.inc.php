
<?php
include './functionsphp/dbcheck.inc.php';

if(isset($_POST['btnsubmit']))
{$Name=$_POST['name'];
  $DOB=$_POST['date'];
  $Gender=$_POST['gender'];
  $Email=$_POST['email'];
  $Password=$_POST['pass'];
  
$q="select count(*) as count from studlog where email='$Email'";
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
  $q="insert into studlog(name,dob,gender,email,pwd,status)values('$Name','$DOB','$Gender','$Email','$Password',1)";
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