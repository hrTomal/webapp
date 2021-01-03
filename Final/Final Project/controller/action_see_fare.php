<?php
  session_start();
?>
<?php 

include 'C:\xampp\htdocs\final_rms\controller\action_db_connect.php';

$email = $_SESSION["email"];
$sql = "SELECT * FROM ticket WHERE status = 'available'"; // Query
$result = $conn -> query($sql); // result set

if($result->num_rows > 0) {
	echo "<ol>";
	while($row = $result -> fetch_assoc()) {
		$adult_fare = $row['adult_fare'];
		$child_fare = $row['child_fare'];
		break;
	}
	?>
	<form method='POST' action="<?php echo $_SERVER['PHP_SELF']; ?>" >
			<label style='font-size:20px' border-style: groove;>Enter number of adult passenger: </label><br>
			<input type='text' name='adult_passenger' placeholder='adult passenger'> <br>
			<label style='font-size:20px' border-style: groove;>Enter number of adult passenger: </label><br>
			<input type='text' name='child_passenger' placeholder='child passenger'> <br> <hr>
			<input type='submit' name='submit' value='calculate'>
	</form>
	<?php
	echo "</ol>";
}
$conn -> close();

if(isset($_POST['submit'])) 
{
	if($_POST['adult_passenger'] == ""){
		$adult_passenger = 0;
	}
	else{
		$adult_passenger = intval($_POST['adult_passenger']);
	}
	if($_POST['child_passenger'] == ""){
		$child_passenger = 0;
	}
	else{
		$child_passenger = intval($_POST['child_passenger']);
	}

    $total = $child_passenger*$child_fare + $adult_passenger*$adult_fare;

    echo "Total = " . $total;
    echo "<a href='../view/uHome.php'>Back</a>";
}
?>
