
<!DOCTYPE html>
<html>
<head>
	<title>info</title>

	<style>
	
	</style>

	<h1 style="text-align: center;">Train info</h1>

</head>
<body style="background-color:#cccccc;;">
	<hr>
	<center>
	<?php

	$fn = fopen("../data/trains.txt", "r");

	while (! feof($fn)) {
		$line = fgets($fn);
		$words = explode(",",$line);
		$train_name = $words[0];
    	$train_from = $words[1];
    	$train_to = $words[2];
    	$train_class = $words[3];
    	$train_time = $words[4];

    	echo "Train Name: " . $train_name;
		echo "<br/>";
		echo "Starting from: " . $train_from;
		echo "<br/>";
		echo "Destination: " . $train_to;
		echo "<br/>";
		echo "Class: " . $train_class;
		echo "<br/>";
		echo "Starting time: " . $train_time;
		echo "<br/>";
		echo "---------------------------";
		echo "<br/>";
	}

	fclose($fn);

	?>
	
	<input type=button onClick="location.href='http://localhost/rms/view/uHome.php'" value='Back'>
		
	</center>


</body>
</html>

<?php include 'footer.php';?>