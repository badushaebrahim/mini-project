
<center><table>
	<tr><th>Exam Name</th><th>subject Name</th><th>Teacher name</th><th>Date</th><th>mark</th></tr>
<?php
include './functionsphp/dbcheck.inc.php';
session_start();
$pid = $_GET["pid2"];
echo"<script>console.log($pid'hai')</script>";
$rm="select * from parentlog where pid='$pid'";
$coo=mysqli_query($conn,$rm);
	$rom=  mysqli_fetch_array($coo);
	//$rm="select childname   from parentlog where userid='$rom[0]'";
//$coo=mysqli_query($conn,$rm);
	//$rom=  mysqli_fetch_array($coo);
	
$ql = "SELECT * FROM `tblresult` WHERE userid = '$rom[4]' ";
        $co=mysqli_query($conn,$ql);
	
	while ($row =mysqli_fetch_array($co)) {
		$sl = "SELECT * FROM `tlbexam` WHERE examid= '$row[2]'";//select exam name
		$sl2=mysqli_query($conn,$sl);
		$sl3 =mysqli_fetch_array($sl2);
		$sq = "SELECT * FROM `tblsubject` WHERE sid2='$sl3[1]'";//subject name
		$sq1=mysqli_query($conn,$sq);
		$sq21 =mysqli_fetch_array($sq1);
		$l = "SELECT name FROM `faclog` WHERE tid ='$sq21[1]'";//subject name
		$l1=mysqli_query($conn,$l);
		$l2 =mysqli_fetch_array($l1);
		echo"<tr><td>$sl3[0]</td><td>s$sq21[0]</td> 	<td>$l2[0]</td><td>$row[3]</td> <td>$row[4]</td> </tr>";
		
	    }
	    

?>
</table><br><input class="button" type="button" value="Print" onclick="print()">   <input class="button"  type="button" value="Back " onclick="goBack()"></center>
<style>
   
    td,th{
        padding:10px 10px 10px 10px;
	border: solid;
    }
   .button{
	background-color: lightblue;
	border-radius: 1vh;
	padding: 1vh;
   }
   .button:hover{
	   padding: 2vh;
   } 
    @media print {
.button{
	display: none;
}}
</style>
</body>
</html>
<script>function goBack() {
  window.history.back();
}</script>
</style>