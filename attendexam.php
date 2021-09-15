<style>
p {
  /*text-align: center;*/
  font-size: 40px;
  margin-top: 0px;
}
body{
    background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  color:white;
}
.sidebarchild{
    color: #fff;
  margin: 40px auto;
  background-color: rgba(255,255,255,0.00);
  border: 1px solid rgba(255,255,255,0.1);
  width: 50%;
  border-radius: 15px;
  padding: 12px;
  backdrop-filter: blur(10px);
}
</style>
<body background="./image/exam.jpg">
<?php
   session_start();
   include './functionsphp/dbcheck.inc.php';
   
    
//   include 'userheader.php';
   $uid=$_SESSION['sid'];
//  echo $uid;
   $eid=$_GET['eid'];
   $rid=$_GET['rid'];
  $dt=$_GET['dd'];
// $st=0;
//   $a="";
   	
//        $st=$c9[0];
        $q="select * from tbltime";
        $s=mysqli_query($conn, $q); 
        $m=mysqli_fetch_array($s);
        $ddate=$m[0];
       // echo"<script>console.log('$ddate');</script>";

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
  /* $ups="SELECT * FROM `nokeper` ";
   $re=mysqli_query($conn,$ups);
   $cou=mysqli_fetch_array($re);
        $cou[0]=$cou[0]+1;*/
   $q1="INSERT INTO `nokeper`(`totalqs`) VALUES (1)";
        $re=mysqli_query($conn,$q1);
   if($c[0]>0)
   {
        $q9="select count(*) from temp";
        $s9= mysqli_query($conn, $q9);
        $c9=mysqli_fetch_array($s9);
        if($c9[0]>=10)
        {
//            $st=$c9[0];
           echo '<script>alert("Your exam is over")</script>';
          // echo '<script>console.log('.$rid.');</script>';
           echo '<script>location.href="userresult.php?rid2='.$rid.'"</script>'; 
        }
        else
            goto find;
   }
   else
   {
       
        $q="select * from tbquestion where questionid='$no'";
        $s=  mysqli_query($conn, $q);
        $question=mysqli_fetch_array($s);
        $q1="insert into temp (qid)values('$question[7]')";
        $s1=  mysqli_query($conn, $q1);
//        $a=$question[7];
   }
       }
       else
       {
           echo '<script>alert("Your exam is over")</script>';
           //echo '<script>console.log('.$rid.');</script>';
           echo '<script>location.href="userresult.php?rid2='.$rid.'"</script>';
           //echo '<script>location.href="homes.php"</script>';
       }
       
?>
    <div class="sidebarchild"><p id="demo"></p></div> 
    <div style="margin:100px 10px 10px 800px;  font-size: large;">

<form method="POST">
<div class="sidebarchild">
    <!--<input type="text" value="<?php echo $st;?>" id="st" style="visibility: hidden;"><br><br>-->
    <label id="cd" style="visibility: hidden;"><?php echo "$ddate"; ?></label><br><br>
    <input type="text" value="<?php echo $question[7];?>" style="visibility: hidden;" name="qno" ><br><br>
    <label><?php echo $question[1] ?></label><br><br>
    <input name="o1" type="radio" value="<?php echo $question[3];?>" required="required"><?php echo $question[3];?><br><br>
    <input name="o1" type="radio" value="<?php echo $question[4];?>" required="required"><?php echo $question[4];?><br><br>
    <input name="o1" type="radio" value="<?php echo $question[5];?>" required="required"><?php echo $question[5];?><br><br>
    <input name="o1" type="radio" value="<?php echo $question[6];?>" required="required"><?php echo $question[6];?><br><br>
    <input type="submit" name="btnsubmit" style="background-color: #049979; width: 150px; height: 30px; border-color: wheat; border-radius: 10px; color: white;" Value="Submit"><br><br>
    
 <div>       
</form>
    </div>
<?php
if(isset($_REQUEST['btnsubmit']))
{
    
//    $dt=$dt+1;
    $qs=$_REQUEST['qno'];
    $q="select answer from tbquestion where questionid='$qs'";
    $s=  mysqli_query($conn, $q);
    $question=mysqli_fetch_array($s);
    $a=$question[0];
  //  $up= "update t";
    
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
        $q2="update tblresult set mark='$mark' where resultid='$rid'";
        $s2=  mysqli_query($conn, $q2);
        $qno=$qno+1;
        
         //goto find;
//        echo $mark;
    }
}
?>

<script>
var counterset;
// Set the date we're counting down to
var countDownDate = document.getElementById("cd").innerHTML; 
var count2 = countDownDate;
//console.log(countDownDate);
var cou=60;
var m=count2;
// Update the count down every 1 second
var x = setInterval(function() {
	cou--;
if(cou==0){
	cou=60;
    <?php
    $ddate--;
    $q="UPDATE `tbltime` SET `ttime`=$ddate WHERE \'ttime\'>$ddate";
        if($s=mysqli_query($conn, $q)){
           echo"<script>console.log('$ok')</script>";
        }
    ?>
    ;
m--;
}
	counterset=m;
document.getElementById("demo").innerHTML =m +"min"+ cou+"sec";
  // If the count down is finished, write some text
  if (m==0) {
    //clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
	//location.href='homes.php';	
    var ko=<?php echo "$rid";?> ;
    alert(174);
    location.href="userresult.php?rid2=<?php echo $rid?>";  
  }
  if(m<0){
    document.getElementById("demo").innerHTML = "EXPIRED";
    alert(197);
    location.href="userresult.php?rid2=<?php echo $rid?>"; 
  }
}, 1000);

function cooki() {
    createCookie("gfg",counterset);
}
</script>
</script>
</body>