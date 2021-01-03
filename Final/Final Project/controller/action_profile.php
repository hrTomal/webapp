<?php
  session_start();
?>
<?php 

include 'C:\xampp\htdocs\final_rms\controller\action_db_connect.php';

$email = $_SESSION["email"];
$sql = "SELECT * FROM user WHERE email = '$email'"; // Query
$result = $conn -> query($sql); // result set

if($result->num_rows > 0) {
	while($row = $result -> fetch_assoc()) {
		echo "email: " . $row['email'] . "<br>" .
		 "User Name: " . $row['username'] . "<br>" .
		 "Phone Number: " . $row['phone'] . "<br>" .
		 "<hr> " .
		 "</li>";
	}
}
else {
	echo "<p>Something went wrong.</p>";
}

$conn -> close();

?>
