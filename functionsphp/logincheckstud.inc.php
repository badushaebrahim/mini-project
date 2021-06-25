if(isset($_POST['submit']))
{
 $Email=$_POST['email'];
 $Password=$_POST['pass'];
 $q="select count(*) as count from studlog where Email='$Email'";
 $s=mysqli_query($conn,$q);
 $f=mysqli_fetch_array($s);
 if($f['count'] != 0)
 {
 	 $q="select * from studlog where Email='$Email'";
 	 $s=mysqli_query($conn,$q);
 	 $row=mysqli_fetch_array($s);
 	 	$pwd=$row[1];
 	 if($Password==$pwd)
 	 {
 	 	if($status=='1')
 	 	{
 			$q="select u_id from studlog where Email='$Email'";
                            $s=mysqli_query($conn,$q);
                            $row=mysqli_fetch_array($s);
                            $_SESSION['id']=$row[0];
//                            echo $_SESSION;
 	 			echo "<script>location.href='user/userhome.php'</script>";
 	 		}	
 	 	}

 	 }
 	 else
 	 {
 	 	echo "PASSWORD IS INCORRECT";
 	 }
 }
 else
 {
 	echo "user not exist";
 }
}