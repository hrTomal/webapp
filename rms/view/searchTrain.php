<?php
include '../view/header.php'
?>

<!DOCTYPE html>
<html>
<head>
	<title>Search Train</title>

	<style>
	
	</style>

	<h1 style="text-align: center;">Search Train</h1>

</head>
<body style="background-color:#cccccc;">
	<hr>
	<center>

	<form method="POST" action="/rms/controller/action_search_train.php" >

		<label style="font-size:20px" border-style: groove;>Train name:</label>
		<input type="text" name="train" required> 
		<br/>
		<br/>
		<input type="submit" name="submit">
		<br/>

	</form>
	<input type=button onClick="location.href='http://localhost/rms/view/uHome.php'" value='Back'>

	</center>

</body>
</html>

<?php include 'footer.php';?>