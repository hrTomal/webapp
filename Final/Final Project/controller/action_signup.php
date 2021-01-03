<?php

	include 'C:\xampp\htdocs\final_rms\controller\action_db_connect.php';

	$user_name = $phone = $email = $password = $repassword = "";
	$user_nameErr = $phoneErr =$emailErr = $passwordErr = $repasswordErr = "";


	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  		$counter = 0;

  		if (isset($_POST["user_name"]) & !empty($_POST["user_name"])) {
    		$user_name = test_input($_POST["user_name"]);
  		}
  		else {
    		$user_nameErr = "Invalid User Name";
    		$counter = $counter + 1;
  		}

 		if (isset($_POST["phone"]) & !empty($_POST["phone"])) {
    		$phone = test_input($_POST["phone"]);
  		}
  		else {
   			$phoneErr = "Invalid Phone number";
    		$counter = $counter + 1;
  		}

  		if (isset($_POST["email"]) & !empty($_POST["email"])) {
    		$email = test_input($_POST["email"]);
  		}
  		else {
    		$emailErr = "Invalid Email";
    		$counter = $counter + 1;
  		}

 		if ($_POST["password"] == $_POST["repassword"]){
    		if (isset($_POST["password"]) & !empty($_POST["password"])) {
    			$password = test_input($_POST["password"]);
    		}
    		else {
    			$passwordErr = "Invalid Password";
    			$counter = $counter + 1;
   			 }

    		if (isset($_POST["repassword"]) & !empty($_POST["repassword"])) {
    			$repassword = test_input($_POST["repassword"]);
    			}
    			else {
    			$repasswordErr = "Invalid Password Repeat";
    			$counter = $counter + 1;
    		}
  		}
  		else{
    		echo "*Repeat same password*";
    		$counter = $counter + 1;
  		}
  	}

	if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $user_name = test_input($_POST["user_name"]); 
        $phone = test_input($_POST["phone"]); 
        $email = test_input($_POST["email"]);
        $password = test_input($_POST["password"]); 
        $repassword = test_input($_POST["repassword"]);

  $stmt = $conn -> prepare("INSERT INTO user (email, username, phone, password) VALUES (? ,?, ?, ?)");
	$stmt -> bind_param("ssis", $email, $user_name, $phone, $password);
	$stmt -> execute(); 
        }

	function test_input($data) { 
          $data = trim($data); 
          $data = stripslashes($data); 
          $data = htmlspecialchars($data); 
          return $data; 
        }
    $conn -> close();

    if($counter == 0) {
    echo "Sign Up Successful";
    echo "<br>";
    echo "<a href='/final_rms/index.php'> Back</a>";
	}
	else{
		echo "Failed";
		echo "<br>";
		echo "<a href='/final_rms/view/signup.php> Try again </a>'";
	}

?>