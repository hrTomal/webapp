<?php
  session_start();
?>

<?php
	include 'C:\xampp\htdocs\final_rms\controller\action_db_connect.php';
	$train_name = "";
	$train_name_Err = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  		if (isset($_POST["train_name"]) & !empty($_POST["train_name"])) {
    		$train_name = test_input($_POST["train_name"]);
  		}
  		else {
    		echo "Invalid Train Name";
  		}
  	}
	function test_input($data) { 
          $data = trim($data); 
          $data = stripslashes($data); 
          $data = htmlspecialchars($data); 
          return $data; 
        }
    $sql = "SELECT * FROM train WHERE train_name = '$train_name'"; // Query
	$result = $conn -> query($sql); // result set

	if($result->num_rows > 0) {
	echo "<ol>";
	while($row = $result -> fetch_assoc()) {
		echo "<li style='background-color: white;'>--Train name: " . $row['train_name'] . " <br>" .
		 "--Source: " . $row['source'] . " <br>" .
		 "--Destionation: " . $row['destination'] . "<br> " .
		 "--Class: " . $row['class'] . " <br>" .
		 "--Start time: " . $row['start_time'] . "<br> " .
		 "<hr> " .
		 "</li>";
	}
	echo "</ol>";
	echo "<a href='../view/uHome.php'>Back</a>";
}
else {
	echo "<p>NO TRAIN FOUND</p>";
}

$conn -> close();

?>