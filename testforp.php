<?php
	/* Database connection settings */
	include './functionsphp/dbcheck.inc.php';

	session_start();
	$t2=$_SESSION['bang'];
	$data1 = '';
	$data2 = '';
	$belowlabel = '';
	$lom="SELECT * FROM parentlog where pid=$t2";
	$max=mysqli_query($conn,$lom);
	$max3=mysqli_fetch_assoc($max);
	$query = "SELECT  * from tblresult WHERE userid=$max3[childname]";
	
    $runQuery = mysqli_query($conn, $query);

	while ($row = mysqli_fetch_array($runQuery)) {

		$data1 = $data1 . '"'. $row['mark'].'",';
		$data2 = $data2 . '"'. $row['total'] .'",';
    $test=$row['userid'];
    $rsvp="SELECT * from studlog where uid=$test";
    $rum = mysqli_query($conn, $rsvp);

    $roms = mysqli_fetch_array($rum);
		$belowlabel = $belowlabel . '"'. ucwords($roms['name']) .'",';
	}

	$data1 = trim($data1,",");
	$data2 = trim($data2,",");
	$belowlabel = trim($belowlabel,",");
?>

<!DOCTYPE html>
<html>
	<head>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="js/chart.js"></script>
		<title>Line Chart using PHP MySQL and Chart JS</title>

		<style type="text/css">			
			body{
				font-family: Arial;
			    color: white;
			    text-align: center;
			    background: white;
			}

			.container {
				color: #E8E9EB;
				background: #222;
				border: #555652 1px solid;
			
			}
		</style>

	</head>

	<body>	   
	    <div class="container">	
	    <h1> student marks vs total</h1>       
			<canvas id="chart" style="width: 100%; height: 65vh; background: #222; border:  #white; margin-top: 10px;"></canvas>

			<script>
				var ctx = document.getElementById("chart").getContext('2d');
    			var myChart = new Chart(ctx, {
        		type: 'line',
		        data: {
		            labels: [<?php echo $belowlabel; ?>],
		            datasets: 
		            [{
		                label: 'mark',
		                data: [<?php echo $data1; ?>],
		                bbackgroundColor: 'transparent',
		                borderColor:'Green',
		                borderWidth: 5
		            },

		            {
		            	label: 'total',
		                data: [<?php echo $data2; ?>],
		                backgroundColor: 'transparent',
		                borderColor:'red',
		                borderWidth: 3	
		            }]
		        },
		     
		        options: {
		            scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
		            tooltips:{mode: 'index'},
		            legend:{display: true, position: 'top', labels: {fontColor: 'white', fontSize: 16}}
		        }
		    });
			</script>
	    </div>
	    
	</body>
</html>