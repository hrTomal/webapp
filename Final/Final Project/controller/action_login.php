<?php
  session_start();
?>

<?php
  include 'C:\xampp\htdocs\final_rms\controller\action_db_connect.php';

	$email = $password = "";
  $emailErr = $passwordErr = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(empty($_REQUEST["email"])){
      echo "*User name Required*";
      echo "<br/>";
    }
    if(empty($_REQUEST["password"])){
      echo "*Password Required*";
      echo "<br/>";
    }
  }

   	$email = $_POST["email"];
   	$password = $_POST["password"];

  	$userFound = false;



    $sql = "SELECT email, password FROM user WHERE email='$email'"; // Query
    $result = $conn -> query($sql);

    if($result->num_rows > 0) {
      while($row = $result -> fetch_assoc()){
      if(strcmp(trim($password), trim($row['password'])) == 0)
      {
        $userFound = true;
      }
      else {
      $userFound = false;
      }
    }
  }

  	
    if($userFound == true) {
    	echo "<p>Login Successfull</p>";
      $_SESSION["email"] = $email;
      $_SESSION['password'] = $password;
      header('Location:../view/uHome.php',true,303);
      echo "<a href='../view/uHome.php'>Home</a>";
      echo "<br/>";
    }
    else {
      echo "<p>Login Unsuccessful</p>";
      echo "<a href='../index.php'>Try Again!</a>";
    }
?>