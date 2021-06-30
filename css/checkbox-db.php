<?php

if(isset($_POST['submit']))
{$checked_array=$_POST['prodid'];
foreach ($_POST['prodname'] as $key => $value) 
{if(in_array($_POST['prodname'][$key], $checked_array))
{$prodname=$_POST['prodname'][$key];
$prod_price= $_POST['prod_price'][$key];
$prod_qty= $_POST['prod_qty'][$key];
echo "
	<style>
	table, th, td {
		border: 1px solid black;
	      }	      
	     </style><center>
<table 
<th>$prodname</th><br>
<td>$prod_qty</td><br>
<td>$prod_price</td><br></table>
</center>";
}	
}
}
else{
header('Location: index.php');
}
?>