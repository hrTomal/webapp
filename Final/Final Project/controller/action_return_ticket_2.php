<?php
  session_start();
?>

<?php 

include 'C:\xampp\htdocs\final_rms\controller\action_db_connect.php';

	$email = $_SESSION["email"];
	$ticket_id = $_GET['t_id'];
	$_value = "*For sell*";

	$stmt = $conn -> prepare("UPDATE ticket SET sold_to= ?,status='available' WHERE  ticket_id= ?");
	$stmt -> bind_param("si", $_value, $ticket_id);

	$stmt -> execute();
	$stmt -> close();

	echo '<script>
		alert("Returned");
		window.location.href="../view/uHome.php";
		</script>';
?>
