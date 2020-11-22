<?php
include '../view/header.php'
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>

	<style>
	
	</style>

	<h1 style="text-align: center;">Profile</h1>

</head>
<body style="background-color:#cccccc;">
	<hr>
	<center>
	<?php

	$fn = fopen("../data/login.txt", "r") or die("Unable to open file!");

	while (! feof($fn)) {
		$line = fgets($fn);
		$words = explode(",",$line);
		$mail = $words[2];
    	
    	if(strcmp($mail,$_SESSION['mail']) == 0){
    		$user_name = $words[0];
    		$ph = $words[1];

    		echo "Name: " . $user_name;
			echo "<br/>";
			echo "Email: " . $_SESSION["mail"];
			echo "<br/>";
			echo "Phone: " . $ph;
			echo "<br/>";

			$_SESSION['user_name'] = $user_name;
    		break;
    		

    	}
    	else{
    	}
		
	}

	fclose($fn)
	?>
	
	<input type=button onClick="location.href='http://localhost/rms/index.php'" value='Logout'>
	<input type=button onClick="location.href='http://localhost/rms/view/editProfile.php'" value='Edit Profile'>
	<input type=button onClick="location.href='http://localhost/rms/view/changePassword.php'" value='Change password'>
	<input type=button onClick="location.href='http://localhost/rms/view/uHome.php'" value='Back'>
		
	</center>


</body>
</html>

<?php include 'footer.php';?>