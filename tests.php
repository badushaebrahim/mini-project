<?php
	/* Database connection settings */
	include './functionsphp/dbcheck.inc.php';


	$data1 = '';
	$data2 = '';
	$buildingName = '';

	$query = "SELECT  * from tblresult";
	
    $runQuery = mysqli_query($conn, $query);

	while ($row = mysqli_fetch_array($runQuery)) {

		$data1 = $data1 . '"'. $row['mark'].'",';
		$data2 = $data2 . '"'. $row['total'] .'",';
    $test=$row['userid'];
    $rsvp="SELECT * from studlog where uid=$test";
    $rum = mysqli_query($conn, $rsvp);

    $roms = mysqli_fetch_array($rum);
		$buildingName = $buildingName . '"'. ucwords($roms['name']) .'",';
	}

	$data1 = trim($data1,",");
	$data2 = trim($data2,",");
	$buildingName = trim($buildingName,",");
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
	    <h1>live student marks vs total</h1>       
			<canvas id="chart" style="width: 100%; height: 65vh; background: #222; border:  #white; margin-top: 10px;"></canvas>

			<script>
				var ctx = document.getElementById("chart").getContext('2d');
    			var myChart = new Chart(ctx, {
        		type: 'bar',
		        data: {
		            labels: [<?php echo $buildingName; ?>],
		            datasets: 
		            [{
		                label: 'mark',
		                data: [<?php echo $data1; ?>],
		                bbackgroundColor: 'transparent',
		                borderColor:'rgba(255,99,132)',
		                borderWidth: 3
		            },

		            {
		            	label: 'total',
		                data: [<?php echo $data2; ?>],
		                backgroundColor: 'transparent',
		                borderColor:'rgba(0,255,255)',
		                borderWidth: 3	
		            }]
		        },
		     
		        options: {
		            scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
		            tooltips:{mode: 'index'},
		            legend:{display: true, position: 'top', labels: {fontColor: 'rgb(255,255,255)', fontSize: 16}}
		        }
		    });
			</script>
	    </div>
	    
	</body>
</html>