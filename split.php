
<!DOCTYPE html>
<html>
<head><script>function stud(){

location.href="sentfac1.php";		
}function parent(){

location.href="sentfac2.php";}		
</script>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
}


</style><style>
.button {
  border-radius: 12px;
  background-color: Blue;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</head>
<body><center>
<br><br><br>
<div>
<h1>Contact Here....</h1>
<button class="button button5" onclick="stud()"><span>Parent </span></button>
<button class="button button5" onclick="parent()"><span>Student</span></button>
</div></center>
</body>
</html




v