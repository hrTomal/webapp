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

        $stmt = $conn -> prepare("INSERT INTO Users (id, username, pass, email, dob) VALUES (? ,?, ?, ?, ?)");
		$stmt -> bind_param("issss", $id, $username, $pass, $email, $dob);
		$stmt -> execute(); 
        }

	function test_input($data) { 
          $data = trim($data); 
          $data = stripslashes($data); 
          $data = htmlspecialchars($data); 
          return $data; 
        }
    

	$sql = "SELECT * FROM users";
	$result = $conn -> query($sql);

	if($result->num_rows > 0) {
	// show result
	echo "<ol>";
	while($row = $result -> fetch_assoc()) {
		$user_id = $row['id'];
		echo "<li>id: " . $row['id'] . " " .
		 "Name: " . $row['username'] . " " .
		 "Email: " . $row['email'] . " " .
		 "Date of birth: " . $row['dob'] . " " . " " .  " " .
		 "<a href='/Labtask4/controller/action_update.php?id=$user_id'>Update</a>" . " " .
		 "<a href='/Labtask4/controller/action_delete.php?id=$user_id'>Delete</a>" . " " .
		 "<hr> " .
		 "</li>";
	}
	echo "</ol>";

	}
	else {
		echo "<p>Result is zero</p>";
	}

	echo "<a href='/Labtask4/dbtest.php'>Back</a>";

	$conn -> close();

	?>