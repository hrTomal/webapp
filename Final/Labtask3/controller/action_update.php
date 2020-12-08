
<!DOCTYPE html>
<html>
<head>
	<title>User Info</title>

	<style>
	form {
  		border-style: ridge;
  		background-color: white;
  		padding: 20px;
  		
    	position: relative;
	}
	</style>

	<h1 style="text-align: center;">Update Info</h1>

</head>

<body style="background-color:#cccccc;">

	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >

		<label style="font-size:20px" border-style: groove;>ID: </label>
		<input type="id" name="id" value="<?php echo $_GET['id'] ?>" readonly>
		<br/><br/>

		<label style="font-size:20px" border-style: groove;>User name: </label>
		<input type="text" name="username" required>
		<br/><br/>

		<label style="font-size:20px">Password: </label>
		<input type="password" name="pass" required>
		<br/><br/>

		<label style="font-size:20px">Email: </label>
		<input type="Email" name="email" required>
		<br/><br/>

		<label style="font-size:20px">Date of Birth: </label>
		<input type="date" name="dob" required>
		<br/><br/>

		<hr>
		<input type="Submit" value="Submit">


	</form>	

	<?php

	$servername = "localhost";
	$user = "root";
	$password = "";
	$dbname = "dbtest";

	$conn = new mysqli($servername, $user, $password, $dbname);

	if($conn -> connect_error) {
		die("Error in db connection: " . $conn -> connect_error);
	}
	else {
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $id = test_input($_POST["id"]); 
        $username = test_input($_POST["username"]); 
        $pass = test_input($_POST["pass"]);
        $email = test_input($_POST["email"]); 
        $dob = test_input($_POST["dob"]);

        $stmt = $conn -> prepare("UPDATE users SET username = ?, pass = ? , email = ?, dob = ? WHERE id = ?");
		$stmt -> bind_param("ssssi", $username, $pass, $email, $dob, $id);
		$stmt -> execute(); 
		echo "Updated";
		header("Refresh:0;url='/Labtask3/dbtest.php'");
        }

	function test_input($data) { 
          $data = trim($data); 
          $data = stripslashes($data); 
          $data = htmlspecialchars($data); 
          return $data; 
        }