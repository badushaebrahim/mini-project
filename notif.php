
<?php
include './functionsphp/dbcheck.inc.php';
echo"
<div class='wrapper'><center><h1 class='yo'> Notification</h1></center>";
$sql = "SELECT * FROM `stuentnotificpoll` ";$co=1;
$no=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($no))
{
echo"
    <div class='toast success'>
        <a href='$row[corespondinglink]'><div class='outer-container'> <i class='fas fa-check-circle'></i> </div>
        <div class='inner-container'>
	<ul><p></p>
           <li><p><h6>$co   $row[about]</h6>  
            </p></li></ul>
        </div>  </div>
    
    
    ";
$co++;
}
    echo" </div>";


?>
</a><div onclick="goBack()">
<h1 class="yo2" >x</h1>
</div>
<script>function goBack() {
  window.history.back();
}</script>








<style>
.yo{
	font-size: 5vh;
	padding: 4vh;
}.yo2{
	font-size: 5vh;
	padding: 4vh;
}
h1:hover{
    
    font-size: 9vh;
}

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    border: none;
    font-family: "Poppins", sans-serif;
    font-size: 14px
}

body {
    background-color: #f9f9f9
}

.wrapper {
    width: 380px;
    position: absolute;
    
    transform: translate(-50%, -50%);
    top: 50%;
    left: 50%
}

.toast {
    width: 100%;
    height: 80px;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 7px;
    display: grid;
    grid-template-columns: 1.3fr 6fr 0.5fr;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08)
}

.success {
    border-left: 3px solid #47D764
}

.error {
    border-left: 3px solid #ff355b
}

.info {
    border-left: 3px solid #2F86EB
}

.warning {
    border-left: 3px solid #FFC021
}

.error i {
    color: #ff355b
}

.info i {
    color: #2F86EB
}

.warning i {
    color: #FFC021
}

.toast:not(:last-child) {
    margin-bottom: 20px
}

.outer-container,
.inner-container {
    align-self: center
    
}

.outer-container i {
    font-size: 35px
}

.success i {
    color: #47D764
}

.inner-container p:first-child {
    color: #101020;
    font-weight: 600;
    font-size: 16px;
    width: max-content;
}

.inner-container p:last-child {
    font-size: 12px;
    font-weight: 400;
    color: #656565
}

.toast button {
    align-self: flex-start;
    background-color: transparent;
    font-size: 20px;
    color: #656565;
    line-height: 0;
    cursor: pointer;
    margin-right: -30px
}</style>