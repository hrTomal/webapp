<?php
  session_start();
?>
<?php 

include 'C:\xampp\htdocs\final_rms\controller\action_db_connect.php';

$sql = "SELECT * FROM ticket WHERE status = 'available'"; // Query
$result = $conn -> query($sql); // result set

function purchase_() {
 	$stmt = $conn -> prepare("UPDATE `ticket` SET sold_to= ?,status='active' WHERE  ticket_id= ?");
	$stmt -> bind_param("si", $email, $_SESSION['ticket_id']);

	$stmt -> execute();

	echo "<h4>Successfull</h4>";
	$stmt -> close();
}


if($result->num_rows > 0) {
	echo "<ol>";
	while($row = $result -> fetch_assoc()) {
		$_SESSION["ticket_id"] = $row['ticket_id'];
		$id = $row['ticket_id'];
		//echo "&quot;";
		echo "<li style='background-color: white;'>Ticket id: " . $row['ticket_id'] . " " .
		 "--Source: " . $row['source'] . " " .
		 "--Destionation: " . $row['destination'] . " " .
		 "--Adult Fare: " . $row['adult_fare'] . " " .
		 "--Date: " . $row['date'] . " " .
		 "<button style='background-color: green; float: right;' onClick=&quot;location.href='../controller/action_purchase_ticket_2.php'&quot;>Buy Ticket ".$row['ticket_id']."</button>" . " " .
		 "<a href='../controller/action_purchase_ticket_2.php?t_id=$id' style='color: red;'>Purhcase ticket number ".$id."</a>" .
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
