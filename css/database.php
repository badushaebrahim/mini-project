<?php
include 'database.php';
if(isset($_POST['submit']))
{
$checked_array=$_POST['prodid'];
foreach ($_POST['prodname'] as $key => $value) 
{
	if(in_array($_POST['prodname'][$key], $checked_array))
	{
$prodname=$_POST['prodname'][$key];
$prod_price= $_POST['prod_price'][$key];
$prod_qty= $_POST['prod_qty'][$key];
echo " <h1>$prodname</h1>";
echo " <h1>$prod_price</h1>";
echo " <h1>$prod_qty</h1>";

	}
	
	
}
}
header('Location: index.php');
?>