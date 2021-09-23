<?php
 session_start();

include './functionsphp/dbcheck.inc.php';

 $eid=$_GET['eid'];

    $uid=$_SESSION['sid'];

    $d=date("Y-m-d h:i:s");
  
    $q="insert into tblresult (userid,examid,examdate,mark) values('$uid','$eid',(select sysdate()),'0')";
        $s=  mysqli_query($conn, $q);
        $q="select max(resultid) from tblresult";
        $s=  mysqli_query($conn, $q);
        $r=  mysqli_fetch_array($s);
        $rid=$r[0];
        $q="delete from temp";
        $result=mysqli_query($conn,$q);
        $qq="delete from nokepr";
        $resut=mysqli_query($conn,$qq);
        $q1="INSERT INTO `nokeper`(`totalqs`) VALUES (0)";
        $re=mysqli_query($conn,$q1);
        
//        $date=$_REQUEST['date'];
$du="select duration from tlbexam where examid='$eid' ";
$du2=mysqli_query($conn, $du);
$du3=  mysqli_fetch_array($du2);
echo"<script>console.log('time 24 $du3[0]');</script>";

        $q="INSERT INTO `tbltime`(`tttime`) VALUES ($du3[0])";
        $s=mysqli_query($conn, $q);
//    if(isset($_REQUEST["btnsubmit"]))
//    {
//        $q="insert into tblresult (userid,examid,examdate,Mark) values('$uid','$eid',(select sysdate()),'0')";
//        $s=  mysqli_query($conn, $q);
//        $q="select max(resultid) from tblresult";
//        $s=  mysqli_query($conn, $q);
//        $r=  mysqli_fetch_array($s);
//        $rid=$r[0];
//        $q="delete from temp";
//        $result=mysqli_query($conn,$q);
//        $q="delete from tbltime";
//        $result=mysqli_query($conn,$q);
//        $date=$_REQUEST['date'];
//        $q="insert into tbltime(ttime) values('$date')";
//        $s=mysqli_query($conn, $q);
//        if($s)
//            echo '<script>location.href="attendexam.php?rid='.$rid.'&eid='.$eid.'&dd=0"</script>';
//        else {
//        echo $q;    
//        }
//    }
?>
<body background="./image/c.gif">
<center>
<form method="POST">
    <div style="font-size: x-large; margin: 200px 50px 100px 50px; color: white; ">
    Date and time of exam: <input type="text" style="width: 450px; border: none; background: transparent; font-size: x-large; color: white; width: 750px;"  id="cdd" name="date" ><br><br>
    <!--<input type="submit" name="btnsubmit" Value="Start exam"><br><br>-->
    <p id="demo"></p>
      <label id="cd" style="visibility: hidden; color: white;"><?php echo $d ?></label><br><br>
    </div>
</form>
</center>
<script>
debugger;
var n,countDownDate,st;

 n=new Date();
n.setSeconds( n.getSeconds() + 30 );
 countDownDate = new Date(n).getTime();
 document.getElementById("cdd").value=n;
 
 
 d=document.getElementById("cd").innerHTML ;
   // alert(d);
//     n=new Date(d);
//    n.setMinutes( n.getMinutes() + 1 );
// countDownDate = new Date(n).getTime();
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
  document.getElementById("demo").innerHTML = "Exam starts in :"+ minutes + "m " + seconds + "s ";
     if (distance < 0) {
    clearInterval(x);
    //document.getElementById("demo").innerHTML = "EXPIRED";
     alert("Your exam is starts now. All the best!!!");
    location.href="attendexam.php?rid=<?php echo $rid?>&eid=<?php echo $eid;?>&dd=0"
  }
  
}, 20);
 
 
 
 
 </script>
</body>