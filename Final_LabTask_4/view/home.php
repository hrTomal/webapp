<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

	<h1 style="text-align: center;">Home</h1>
	<hr/>

</head>
<body >s
	<center>
		<form method="POST" action="/SimpleBanking/controller/actionWithdraw.php">
			<label>Email: </label>
			<?php echo $_SESSION['email']; ?>
			<br>
			<label>Balance: </label>
			<?php echo $_SESSION['acc']; ?>
			<br>
			<br>
			<label>Withdraw amount: </label>
			<input type="text" name="balanceUpdate">
			<input type="submit" name="withdraw" value="Withdraw">
			

			<hr>
		</form>
		
		
	</center>

</body>
</html>

