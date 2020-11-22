<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Purhcase</title>

	<style>
	
	</style>

	<h1 style="text-align: center;">Purhcase Tickets</h1>
	<hr/>

</head>
<body style="background-color:#cccccc;;">

	<center>
	<?php
	$fn = fopen("../data/tickets.txt", "r") or die("Unable to open file!");
	$purchase_status = 0;
	while (! feof($fn)) {
		$line = fgets($fn);
		$words = explode(",",$line);
		$status = $words[0];

    	
    	if(strcmp($status,"available") == 0 ){
    		$date = $words[2];
    		$from = $words[3];
    		$to = $words[4];
    		$ticket_number = $words[5];

    		echo "Ticket number: " . $ticket_number;
    		echo "<br/>";
    		echo "Status: " . $status;
			echo "<br/>";
			echo "Date: " . $date;
			echo "<br/>";
			echo "From: " . $from;
			echo "<br/>";
			echo "To: " . $to;
			echo "<br/>";
			echo "---------------------------";
			echo "<br/>";
			$purchase_status = 1;
    	}
    	else{
    	}
		
	}

	if($purchase_status == 0){
		echo "NO tickets available !!!";
		echo "<br/>";
	}

	fclose($fn)
	?>

	<form method="POST" action="/rms/controller/action_purchase_ticket.php" >

		<label style="font-size:20px" border-style: groove;>Enter ticket number to purchase: </label>
		<input type="text" name="ticket_number" required>

		<input type="Submit" value=" Purhcase">
		<br/>
		<br/>

	</form>

	<input type=button onClick="location.href='http://localhost/rms/view/uHome.php'" value='Back'>

	
	</center>
	
</body>
</html>

<?php include 'footer.php';?>