<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
</head>
<body>

<?php

$user_name = $phone = $email = $password = $repassword = "";
$user_nameErr = $phoneErr =$emailErr = $passwordErr = $repasswordErr = "";

$signup_status = "";

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

  

  if($counter == 0) {
    $signup_status = "Sign Up Successful";

    $user = fopen("../data/login.txt", "a") or die("Unable to open file!");
    fwrite($user, $user_name. "," . $phone. ",". $email. ",". $password);
    fwrite($user, "\n");
    fclose($user);
  }
  else {
    $signup_status = "Sign Up Failed";
    $counter = 0;
  }
}
else {
	$signup_status = "Sign Up Failed";
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<?php 
  echo "<br/>";
  echo $signup_status;
  echo "<br/>";
  echo "<a href='../index.php'>Home</a>";
  echo "<br/>";
?>

</body>
</html>
