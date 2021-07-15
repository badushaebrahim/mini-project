<?php
include './functionsphp/dbcheck.inc.php';
if(isset($_POST['btnsubmit']))
{$Name=$_POST['name'];
 // $DOB=$_POST['date'];
  $Gender=$_POST['gender'];
  $Email=$_POST['email'];
  $Password=$_POST['pass'];
  $child= $_POST['student'];
  session_start();
  $fac =$_SESSION['name'];
  $q="select name from studlog where name='$fac'";
$s=mysqli_query($conn,$q);
$f=mysqli_fetch_array($s);
$sp =$f[0];
  function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
      $output = implode(',', $output);
    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";}
$q="select count(*) as count from parentlog where email='$Email'";
if($s=mysqli_query($conn,$q)){
//echo "<script>console.log('ok on query');</script>";
  if($f=mysqli_fetch_array($s)){
echo "<script>console.log('$f[0]'+'already exists');</script>";
echo"<script>alert('user registration failed');";
echo "<script>console.log('user already found');";
echo "<script>location.href='loginp.php'</script>";
}}
else{
//echo "<script>console.log('ok not on query');</script>";
}
if($f['count']==0){
  $q="insert into parentlog (name,gender,email,pass,childname,addedby)values('$Name','$Gender','$Email','$Password','$child','$sp')";
  
  if(($m=mysqli_query($conn,$q))){
    echo "<script>alert('Registration Successfull')</script>";
    echo "<script>location.href='loginp.php'</script>";/*
  debug_to_console($Name);
  debug_to_console($DOB);
  debug_to_console($Gender);
  debug_to_console($posts);
  debug_to_console($password);
  debug_to_console($Email);*/}
  else{
echo "<script>console.log('no insert');</script>";
echo"<script>alert('user registration failed1');";
echo "<script>location.href='homef.php'</script>";
  }}
  else{
    echo"<script>alert('user registration failed2');</script>";
    echo "<script>console.log('user already found');</script>";
    echo "<script>location.href='regparent.php'</script>";

  }

}

  ?>