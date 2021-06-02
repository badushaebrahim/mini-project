
<?php
include './functionsphp/dbcheck.inc.php';


  

    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $pwd=$_POST['pass'];
    if(isset($_POST['submit']))
        if(!empty($name)&&!empty($dob)&&!empty($gender)&&!empty($email)&&!empty($pwd)){
    
        //impl

    $q="select count(*) as count from tblregistration where Email='$email'";
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
  $q="insert into studentlog(Name,DOB,Gender,Email,pwd,Address,Phone_No) 
  values('$name','$dob','$gender','$email','$pwd')";
  $s=mysqli_query($conn,$q);
  debug_to_console($name);
  debug_to_console($dob);
  debug_to_console($gender);
  if($s)
  {
    $q="insert into studlog(Email,pass,user_type,status) values('$email','$pwd','user','1')";
    $s=mysqli_query($conn,$q);
    if($s)
    {
      echo "<script>alert('Registration Successfull')</script>";
      echo "<script>location.href='index.php'</script>";
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
    // echo "<script>alert('Sorry Registration Error')</script>";
    // echo "<script>location.href='index.php'</script>";
  }
}
else
{
  echo "<script>alert('User already exist')</script>";
}
        }
    


   ?>