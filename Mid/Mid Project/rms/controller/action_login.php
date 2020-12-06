<?php
include '../view/header.php'
?>

<?php 
  
  

	$mail = $password = "";
  $mailErr = $passwordErr = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(empty($_REQUEST["mail"])){
      echo "*User name Required*";
      echo "<br/>";
    }
    if(empty($_REQUEST["password"])){
      echo "*Password Required*";
      echo "<br/>";
    }

   	$mail = $_POST["mail"];
   	$password = $_POST["password"];

  	$userFound = false;

  	$myfile = fopen("../data/login.txt", "r") or die("Unable to open file!");

      while ($line = fgets($myfile)) {
        $words = explode(",",$line);

        if (strcmp($mail,$words[2]) == 0 && strcmp($password."\n",$words[3]) == 0 ) {
          $userFound = true;
        }
      }
      fclose($myfile);

    	if($userFound == true) {
    		echo "<p>Login Successfull</p>";
        header("Refresh:2;url='../view/uHome.php'");

        $_SESSION["mail"] = $mail;
        $_SESSION['password'] = $password;

        echo "Redirecting to Home";
        echo "<br/>";
      	echo "<a href='../view/uHome.php'>Home</a>";
        echo "<br/>";
      }
    	else {
      	echo "<p>Login Unsuccessful</p>";
      	echo "<a href='../index.php'>Try Again!</a>";
      }
  }
?>