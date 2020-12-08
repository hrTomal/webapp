<?php 
	
	$id = $_GET['id'];

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

$stmt = $conn -> prepare("DELETE from users WHERE id = ?");
$stmt -> bind_param("i", $id);

$stmt -> execute();

echo "<h4>Records Updated Successfully. Redirecting...</h4>";
$stmt -> close();
header("Refresh:1;url='/Labtask3/dbtest.php'");
$conn -> close();

?>