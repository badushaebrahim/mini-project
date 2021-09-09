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
   session_start();
    include './functionsphp/dbcheck.inc.php';
//   include 'userheader.php';
   $uid=$_SESSION['id'];
//  echo $uid;
   $eid=$_GET['eid'];
   $rid=$_GET['rid'];
  $dt=$_GET['dd'];
// $st=0;
//   $a="";
   $q9="select count(*) from temp";
        $s9= mysqli_query($conn, $q9);
        $c9=mysqli_fetch_array($s9);
//        $st=$c9[0];
 
        $q="select * from tbltime";
        $s=mysqli_query($conn, $q);
        $m=mysqli_fetch_array($s);
        $ddate=$m[0];
        
   $q="select mark from tblresult where resultid='$rid'";
   $s=mysqli_query($conn, $q);
   $m=mysqli_fetch_array($s);
   $mark=$m[0];
   $qno=0;

   
//   echo $mark;
   $q="select min(questionid) from tbquestion where examid='$eid'";
   $s=  mysqli_query($conn, $q);
   $min=mysqli_fetch_array($s);
   $q="select max(questionid) from tbquestion where examid='$eid'";
   $s=  mysqli_query($conn, $q);
   $max=mysqli_fetch_array($s);
//   echo $min[0]." and ".$max[0];
   
   find: 
       if($qno<=10){
           
       $no=rand($min[0],$max[0]);
        
   $q="select count(*) from temp where qid='$no'";
   $s= mysqli_query($conn, $q);
   $c=mysqli_fetch_array($s);
   if($c[0]>0)
   {
        $q9="select count(*) from temp";
        $s9= mysqli_query($conn, $q9);
        $c9=mysqli_fetch_array($s9);
        if($c9[0]>=10)
        {
//            $st=$c9[0];
           echo '<script>alert("Your exam is over")</script>';
           echo '<script>location.href="userresult.php?rid='.$rid.'"</script>'; 
        }
        else
            goto find;
   }
   else
   {
       
        $q="select * from tbquestion where questionid='$no'";
        $s=  mysqli_query($conn, $q);
        $question=mysqli_fetch_array($s);
        $q1="insert into temp (qid)values('$question[0]')";
        $s1=  mysqli_query($conn, $q1);
//        $a=$question[7];
   }
       }
       else
       {
           echo '<script>alert("Your exam is over")</script>';
           echo '<script>location.href="userresult.php?rid='.$rid.'"</script>';
       }
       
?>
    
    <div style="margin:100px 10px 10px 800px; color: white; font-size: large;">

<form method="POST">
    <!--<input type="text" value="<?php echo $st;?>" id="st" style="visibility: hidden;"><br><br>-->
    <label id="cd" style="visibility: hidden;"><?php echo $ddate ?></label><br><br>
    <input type="text" value="<?php echo $question[0];?>" style="visibility: hidden;" name="qno" ><br><br>
    <label><?php echo $question[2] ?></label><br><br>
    <input name="o1" type="radio" value="<?php echo $question[3];?>" required="required"><?php echo $question[3];?><br><br>
    <input name="o1" type="radio" value="<?php echo $question[4];?>" required="required"><?php echo $question[4];?><br><br>
    <input name="o1" type="radio" value="<?php echo $question[5];?>" required="required"><?php echo $question[5];?><br><br>
    <input name="o1" type="radio" value="<?php echo $question[6];?>" required="required"><?php echo $question[6];?><br><br>
    <input type="submit" name="btnsubmit" style="background-color: #049979; width: 150px; height: 30px; border-color: wheat; border-radius: 10px; color: white;" Value="Submit"><br><br>
    <p id="demo"></p>
        
</form>
    </div>
<?php
if(isset($_REQUEST['btnsubmit']))
{
//    $dt=$dt+1;
    $qs=$_REQUEST['qno'];
    $q="select answer from tblquestions where questionid='$qs'";
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
        
//        goto find;
//        echo $mark;
    }
}
?>
<script>

var n,countDownDate,st;
//st=document.getElementById("st").value;
// Set the date we're counting down to
//if(st==="0")
//{
// n=new Date();
//n.setMinutes( n.getMinutes() + 1 );
// countDownDate = new Date(n).getTime();
// document.getElementById("cd").innerHTML=n;
// }
// else
// {
    d=document.getElementById("cd").innerHTML ;
   // alert(d);
     n=new Date(d);
    n.setMinutes( n.getMinutes() + 10 );
 countDownDate = new Date(n).getTime();
// }
// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
     
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
 // var days = Math.floor(distance / (1000 * 60 * 60 * 24));
 // var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
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