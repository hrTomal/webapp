<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Return</title>
  <h1><center>Return Ticket</center></h1>
  <hr>
</head>
<body>
	<center>

<?php
	$fn = fopen("../data/tickets.txt", "r") or die("Unable to open file!");
	$print_status = 0;
	while (! feof($fn)) {
		$line = fgets($fn);
		$words = explode(",",$line);
		$status = $words[0];
		$sold_to = $words[1] ?? null;
    	
    	if(strcmp($status,"active") == 0 && strcmp($_SESSION["mail"],$sold_to) == 0){
    		$date = $words[2];
    		$from = $words[3];
    		$to = $words[4];
    		$ticket_number = $words[5];


    		echo "Ticket number: " . $ticket_number;
    		echo "<br/>";
    		echo "Status: " . $status;
			echo "<br/>";
			echo "Email: " . $_SESSION["mail"];
			echo "<br/>";
			echo "Date: " . $date;
			echo "<br/>";
			echo "From: " . $from;
			echo "<br/>";
			echo "To: " . $to;
			echo "<br/>";
			echo "---------------------------";
			echo "<br/>";
			$print_status = 1;
    	}
    	else{
    	}
		
	}

	if($print_status == 0){
		echo "NO Active tickets found for this user!!!";
		echo "<br/>";
	}

	fclose($fn)
	?>

	<form method="POST" action="/rms/controller/action_return_ticket.php" >

		<label style="font-size:20px" border-style: groove;>Enter ticket number to retrurn: </label>
		<input type="text" name="ticket_number" required>

		<input type="Submit" value="Return">
		<br/>
		<br/>

	</form>

	<input type=button onClick="location.href='http://localhost/rms/view/uHome.php'" value='Back'>

	</center>
</body>


</html>


<?php include 'footer.php';?>