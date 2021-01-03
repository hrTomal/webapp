<?php
  session_start();
?>
<?php 

include 'C:\xampp\htdocs\final_rms\controller\action_db_connect.php';

$sql = "SELECT * FROM train"; // Query
$result = $conn -> query($sql); // result set

if($result->num_rows > 0) {
	echo "<ol>";
	while($row = $result -> fetch_assoc()) {
		echo "<li style='background-color: white;'>Train name: " . $row['train_name'] . " " .
		 "--Source: " . $row['source'] . " " .
		 "--Destionation: " . $row['destination'] . " " .
		 "--Class " . $row['class'] . " " .
		 "--Start time: " . $row['start_time'] . " " .
		 "<hr> " .
		 "</li>";
	}
	echo "</ol>";

}
else {
	echo "<p>NO TRAIN FOUND</p>";
}

$conn -> close();

?>
