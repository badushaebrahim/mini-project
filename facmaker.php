<?php
include './functionsphp/dbcheck.inc.php';
if(isset($_POST['btnsubmit']))
{$Name=$_POST['name'];
  $DOB=$_POST['date'];
  $Gender=$_POST['gender'];
  $Email=$_POST['email'];
  $Password=$_POST['pass'];
  $posts= $_POST['post'];
  function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
      $output = implode(',', $output);
    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";}
$q="select count(*) as count from faclog where email='$Email'";
if($s=mysqli_query($conn,$q)){
//echo "<script>console.log('ok on query');</script>";
  if($f=mysqli_fetch_array($s)){
echo "<script>console.log('$f[0]'+'already exists');</script>";
echo"<script>alert('user registration failed');";
echo "<script>console.log('user already found');";
echo "<script>location.href='loginf.php'</script>";
}}
else{
//echo "<script>console.log('ok not on query');</script>";
}
if($f['count']==0){
  $q="insert into faclog (name,gender,dob,email,paswd,post,status)values('$Name','$Gender','$DOB','$Email','$Password','$posts',1)";
  
  if(($m=mysqli_query($conn,$q))){
    echo "<script>alert('Registration Successfull')</script>";
    echo "<script>location.href='loginf.php'</script>";/*
  debug_to_console($Name);
  debug_to_console($DOB);
  debug_to_console($Gender);
  debug_to_console($posts);
  debug_to_console($password);
  debug_to_console($Email);*/}
  else{
echo "<script>console.log('no insert');</script>";
echo"<script>alert('user registration failed1');";
echo "<script>location.href='newfaculty.php'</script>";
  }}
  else{
    echo"<script>alert('user registration failed2');</script>";
    echo "<script>console.log('user already found');</script>";
    echo "<script>location.href='loginf.php'</script>";

  }

}

  ?>