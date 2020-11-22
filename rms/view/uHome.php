<?php
include 'header.php'
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

	<style>
		.grid-container {
  		display: inline-grid;
  		background-color: white;
  		padding: 10px;
  		grid-template-columns: auto auto auto auto;
  		align-content: space-evenly;
  		grid-gap: 20px 40px;

		}
	</style>

	<h1 style="text-align: center;">Welcome user!!!</h1>

</head>
<body style="background-color:#cccccc;">
	<center>
		<hr>
		<div class="grid-container">	
			<input type=button onClick="location.href='http://localhost/rms/view/purchaseTicket.php'" value='Purchase Ticket'>
			<input type=button onClick="location.href='http://localhost/rms/view/returnTicket.php'" value='Return Ticket'>
			<input type=button onClick="location.href='http://localhost/rms/view/activeTickets.php'" value='Active Tickets'>
			<input type=button onClick="location.href='http://localhost/rms/view/purchaseHistory.php'" value='Purchase History'>
			<input type=button onClick="location.href='http://localhost/rms/view/trainInfo.php'" value='Train info'>
			<input type=button onClick="location.href='http://localhost/rms/view/searchTrain.php'" value='Search Train'>
			<input type=button onClick="location.href='http://localhost/rms/view/profile.php'" value='Personal Profile'>
			<!-- <input type=button onClick="location.href='http://localhost/rms/view/profile.php'" value='Fare'> -->
			<input type=button onClick="location.href='http://localhost/rms/index.php'" value='Logout'>
		</div>
	</center>


</body>
</html>

<?php include 'footer.php';?>
