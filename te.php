<?php
function debug_to_console($data) {
	$output = $data;
	if (is_array($output))
	    $output = implode(',', $output);
    
	echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
    }
    include './functionsphp/dbcheck.inc.php';
    include './up.php';

    $da= date('Y-m-d H:i:s');
    $s=  mysqli_query($conn, $q);
    while($r=  mysqli_fetch_array($s))
    {
	if(($da>$r[3])&&($da>$r[4])){
	Debug_to_console("less than da 1");		
	}
	
	

    }

?>