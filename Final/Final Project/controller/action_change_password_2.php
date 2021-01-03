<?php
  session_start();
?>

<?php

	$email_ = $_SESSION["email"];
	$old_password_session = $_SESSION["password"];

	include 'C:\xampp\htdocs\final_rms\controller\action_db_connect.php';
	$sql = "SELECT * FROM user WHERE email = '$email_'"; // Query
	$result = $conn -> query($sql); 

	if($result->num_rows > 0) {
	while($row = $result -> fetch_assoc()) {
		$old_password_db = $row['password'];
		}
	}
	else {
		echo "<p>Something went wrong.</p>";
	}

	$email = $password = $repassword = "";
	$emailErr = $passwordErr = $repasswordErr = "";


	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  		$counter = 0;

  		//echo trim($old_password_db);
  		//echo "<br>";
  		//echo trim($_POST["old_password"]);

  		if (strcmp(trim($old_password_db), trim($_POST["old_password"])) == 0) {
  			if(strcmp(trim($_POST["new_password"]), trim($_POST["new_repassword"])) == 0){
  				$password = test_input($_POST["new_password"]);
  			}
  			else{
  				echo "New password doesn't match.";
  				$counter = $counter+1;
  			}
  		}
  		else{
  			echo "Old password doesn't match.";
  			$counter = $counter+1;
  		}
  	}

  	function test_input($data) { 
          $data = trim($data); 
          $data = stripslashes($data); 
          $data = htmlspecialchars($data); 
          return $data; 
        }

	if($counter == 0){
		$stmt = $conn -> prepare("UPDATE user SET password= ? WHERE  email= ?");
		$stmt -> bind_param("ss", $password, $email_);

		$stmt -> execute();
		$stmt -> close();

		echo '<script>
		alert("Successfully UPDATED");
		window.location.href="../view/uHome.php";
		</script>';
	}
	else{
		echo '<script>
		alert("Failed");
		window.location.href="../view/uHome.php";
		</script>';

	}
	
?>
