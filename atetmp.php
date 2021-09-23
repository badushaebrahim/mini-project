<style>
p {
  /*text-align: center;*/
  font-size: 40px;
  margin-top: 0px;
}
body{
    color:black;
  background-image: url("./image/exam.jpg");

    background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

</style>

<?php
  // session_start();
    include './functionsphp/dbcheck.inc.php';

   $uid=3;
//  echo $uid;
   $eid=2;
   $rid=11;
  $dt=0;
// $st=0;
//   $a="";
   $q9="select count(*) from temp";
        $s9= mysqli_query($conn, $q9);
        $c9=mysqli_fetch_array($s9);
//        $st=$c9[0];
 

 
?>
    
    <div style="margin:100px 10px 10px 800px; color: white; font-size: large;">

<form method="POST">

    <!--<input type="text" value="<?php echo $st;?>" id="st" style="visibility: hidden;"><br><br>-->
    <label id="cd" style="visibility: hidden;"><?php echo $ddate; echo'<script>console.log('.$ddate.')</script>'; ?></label><br><br>
  
    <?php
       $qo="select * from tbquestion where examid='$eid'";
       $s3= mysqli_query($conn, $qo);
           
   $co;
   $ans=array();
    while($qe=mysqli_fetch_row($s3))
    { 

     
    echo"<input type='text' value='$qe[7]' style='visibility: hidden;' name='qno' ><br><br>";
    echo"<label>$qe[1]</label><br><br>
    <input name='$co' type='radio' value='$qe[2]' required='required'> $qe[2]<br><br>
    <input name='$co' type='radio' value='$qe[3]' required='required'> $qe[3]<br><br>
    <input name='$co' type='radio' value='$qe[4]' required='required'>$qe[4]<br><br>";
    echo"<input name='$co' type='radio' value='$qe[5]'required='required'>$qe[5]<br><br>";
    
   $ans[co]=$qe[6];
  $co++;
  echo"<br><br>";
  }
    ?>
    <p id="demo"></p>
    <input type='submit' name='btnsubmit' style='background-color: #049979; width: 150px; height: 30px; border-color: wheat; border-radius: 10px; color: white;' Value='Submit'><br><br>
   
</form>
    </div>
<?php
if(isset($_REQUEST['btnsubmit']))
{



//    $dt=$dt+1;
  /*  $qs=$_REQUEST['qno'];
    echo'<script>alert('.$qs.');</script>';
    $q="select answer from tbquestion where questionid='$qs'";
    $s=  mysqli_query($conn, $q);
    $question=mysqli_fetch_array($s);
    $a=$question[0];
    
    $ans=$_REQUEST['o1'];
//    echo '<script>alert("'.$a.'")</script>';
//    echo '<script>alert("'.$ans.'")</script>';
    if($a==$ans)
    {
        $q="select mark from tblresult where resultid='$rid'";
        $s=  mysqli_query($conn, $q);
        $m=mysqli_fetch_array($s);
        $mark=$m[0];
        $mark=$mark+1;
        $q2="update tblresult set Mark='$mark' where Result_Id='$rid'";
        $s2=  mysqli_query($conn, $q2);
        $qno=$qno+1;
        */
//        goto find;
//        echo $mark;
    
}
?>
<script>

var n,countDownDate,st;

    d=document.getElementById("cd").innerHTML ;
 
     n=new Date(d);
    n.setMinutes( n.getMinutes() + 10 );
 countDownDate = new Date(n).getTime();

var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
     
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds

  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
 // document.getElementById("demo").innerHTML = days + "d " + hours + "h "
//  + minutes + "m " + seconds + "s ";
  document.getElementById("demo").innerHTML = minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
//  if (distance < 0) {
//    clearInterval(x);
//    //document.getElementById("demo").innerHTML = "EXPIRED";
//    alert("Your exam is over");
//    location.href="userresult.php?rid=<?php echo $rid?>";
//  }
}, 1000);
</script>
</body>