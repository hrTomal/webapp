<?php
  session_start();
?>

<?php 

include 'C:\xampp\htdocs\final_rms\controller\action_db_connect.php';

	$email = $_SESSION["email"];
	$ticket_id = $_GET['t_id'];

	$stmt = $conn -> prepare("UPDATE ticket SET sold_to= ?,status='active' WHERE  ticket_id= ?");
	$stmt -> bind_param("si", $email, $ticket_id);

	$stmt -> execute();
	$stmt -> close();

	echo '<script>
		alert("Purchase Successfull");
		window.location.href="../view/uHome.php";
		</script>';
?>
