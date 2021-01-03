<?php
  session_start();
?>
<?php 

include 'C:\xampp\htdocs\final_rms\controller\action_db_connect.php';

$email = $_SESSION["email"];
$sql = "SELECT * FROM ticket WHERE status = 'active' AND sold_to = '$email'"; // Query
$result = $conn -> query($sql); // result set

if($result->num_rows > 0) {
	echo "<ol>";
	while($row = $result -> fetch_assoc()) {
		echo "<li style='background-color: white;'>Ticket id: " . $row['ticket_id'] . " " .
		 "--Source: " . $row['source'] . " " .
		 "--Destionation: " . $row['destination'] . " " .
		 "--Adult Fare: " . $row['adult_fare'] . " " .
		 "--Date: " . $row['date'] . " " .
		 "<hr> " .
		 "</li>";
	}
	echo "</ol>";

}
else {
	echo "<p>NO TICKET FOUND FOR SELL</p>";
}

$conn -> close();

?>
