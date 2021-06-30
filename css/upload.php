<?php
	if(isset($_POST['upload'])) {
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];
	$file_size = $_FILES['file']['size'];
	$file_tem_Loc = $_FILES['file']['tmp_name'];
	$file_store = "upload".$file_name;
	if (move_uploaded_file($file_tem_Loc, $file_store));
	echo "<h1>Files are Uploaded '$file_tem_Loc,$file_store'</h1>";	
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Uploading file</title>
</head>
<body>
<form action = "?" method = "POST" enctype ="multipart/form-data">
<label>Uploading files</label>
<p><input type="file" name="file"/></p>
<p><input type="submit" name="upload" value="Upload file"></p>
</form>

</body>
</html>
