<!DOCTYPE html>
<html>
<body>

<form action="" method="POST" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="filer" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
<?php
$target_dir = "upload/";
$target_file =  basename($_FILES['filer']['name']);
$uploadOk = 1;
echo"$target_file";
//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
 /* $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }*/
  if ($_FILES['file']['error'] !== UPLOAD_ERR_OK) {
	die("Upload failed with error " . $_FILES['file']['error']);
    }
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime = finfo_file($finfo, $_FILES['file']['tmp_name']);
    $ok = false;
    switch ($mime) {
       case 'image/jpeg':
       case 'application/pdf':
       //case etc....:
	    $ok = true;
       default:
	   die("Unknown/not permitted file type");
    }
    move_uploaded_file($target_file,$target_dir);
}
?>
