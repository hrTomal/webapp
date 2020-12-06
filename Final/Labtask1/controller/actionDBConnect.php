<!DOCTYPE html>
<html>
	<head>
		<title>DB Connect Example</title>
	</head>
	<body>
		<h1>DB Connect Example</h1>

		<?php
			# object-oriented approch 
			$conn1 = new mysqli("localhost", "abcdef", "12345");

			if($conn1->connect_error) {
				die("Connection Failure");
			}
			else {
				echo "Connection Successful";
			}

			echo "<br />";

			# procedural

			$conn2 = mysqli_connect("localhost", "abcdef", "12345");
			if($conn2) {
				echo "Successful";
			}
			else {
				echo "Unsuccessful";
			}
		?>
	</body>
</html>