<!DOCTYPE html>
<html lang="en">
<head><style>.setups{ text-align: center;/*padding: 70px 0;*/}
.mainbod2{display: flex;
  justify-content: center;}
  /*text*/
  /* Slide button styling */
.slide {
  font-size: 20px;
  font-weight: 200;
  letter-spacing: 1px;
  padding: 13px 30px 13px;
  outline: 0;
  border: 1px solid black;
  cursor: pointer;
  position: relative;
  background-color: rgba(0, 0, 0, 0);
}

.slide i {
  opacity: 0;
  font-size: 13px;
  transition: 0.2s;
  position: absolute;
  right: 10px;
  top: 21px;
  transition: transform 1;
}

.slide div {
  transition: transform 0.8s;
}

.slide:hover div {
  transform: translateX(-6px);
}

.slide::after {
  content: "";
  background-color: #66f2d5;
  width: 100%;
  z-index: -1;
  position: absolute;
  height: 100%;
  top: 7px;
  left: 7px;
}

.slide:hover i {
  opacity: 1;
  transform: translateX(-6px);
}
/* End of Slide Button  */
</style>
	<title>questions</title>
	<link href="css/home2.1.css" rel="stylesheet" type="text/css">
	<script>
			function ping(){
	var r = confirm("Would you like to exit ");
if (r != true) {
	
} else{
	location.href='index.php';	
}}
function notf(){
	var r2 = confirm("Would you like to go home ");
if (r2 != true) {
	
} else{
	location.href='homef.php';	
}}
function ads(){
	location.href='addsub.php';
}
function bck(){location.href='newexam.php';}function pm(){location.href='sentfac1.php';}function sm(){location.href='sentfac2.php';}</script>
</head>
<body>
	
	<nav class="navma" style="background-color:aqua ;">

	<div class="mainholder" >
		<div class="tx" onclick="bck()"><div id="here" class="inner">Back⬅️</div></div>
				<div class="tx"><div id="her2"onclick="notf()" class="inner"><input type="button"  class="butss"value="Home"></div></div>
		<div class="tx"><div id="her2"  id="out" class="inner"onclick="ping()"><input type="button"  class="butss"value="Sign out "></div></div>
			</div></div></nav>
			<div class="mainbod2">
			<div></div><div class="setups">
			<br>
			<br>
			<br>
			<br><div>
			<button type="button" class="slide" onclick="pm()" value="student msgs" href="sentfac1.php">
  <div>Parent msg</div></div><br><div>
  <button type="button" class="slide" onclick="sm()" value="parent msgs msgs" href="sentfac2.php">
  <div>Student msgs</div></div>
			
	</div>
	</body>
	</html>