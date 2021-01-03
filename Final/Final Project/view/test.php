<?php 

include 'C:\xampp\htdocs\final_rms\controller\action_db_connect.php';


$sql = "SELECT * FROM ticket"; // Query
$result = $conn -> query($sql); // result set

if($result->num_rows > 0) {
	// show result
	echo "<p>Result is more than zero</p>";
	echo "<br>";

	echo "<ol>";
	while($row = $result -> fetch_assoc()) {
		echo "<li>id: " . $row['ticket_id'] . " " .
		 "Email: " . $row['sold_to'] . " " .
		 "Sold date: " . $row['date'] . " " . " " .  " " .
		 "<hr> " .
		 "</li>";
	}
	echo "</ol>";

}
else {
	echo "<p>Result is zero</p>";
}

$conn -> close();

?>