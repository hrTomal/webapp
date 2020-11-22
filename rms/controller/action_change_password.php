<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>password change</title>
</head>
<body>

<?php

$user_name = $phone = $email = $password = $repassword = "";
$user_nameErr = $phoneErr =$emailErr = $passwordErr = $repasswordErr =  "";

$status = "";

$myfile = fopen("../data/login.txt", "r") or die("Unable to open file!");
while ($line = fgets($myfile)) {
  $words = explode(",",$line);
  $user_name = $words[0];
  $phone = $words[1];
  $email = $words[2];
  $password = $words[3];
}
fclose($myfile); 

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $counter = 0;

    if (!empty($user_name)) {
     $user_name = test_input($user_name);
    }
    else {
      $user_nameErr = "Invalid User Name";
      $counter = $counter + 1;
    }

    if (!empty($phone)){
      $phone = test_input($phone);
    }
    else {
      $phoneErr = "Invalid Phone number";
      $counter = $counter + 1;
    }

    if (!empty($email)) {
      $email = test_input($email);
    }
    else {
      $emailErr = "Invalid Email";
      $counter = $counter + 1;
    }

    if(strcmp(trim($_POST["old_password"]),trim($_SESSION['password'])) == 0){
      if ($_POST["new_password"] == $_POST["new_repassword"]){
      if (isset($_POST["new_password"]) & !empty($_POST["new_password"])) {
        $password = test_input($_POST["new_password"]);
      }
      else {
        $passwordErr = "Invalid Password";
        $counter = $counter + 1;
      }

      if (isset($_POST["new_repassword"]) & !empty($_POST["new_repassword"])) {
        $repassword = test_input($_POST["new_repassword"]);
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
    $status = "Password changed succesfully";
    
    $count = 0;

    $fn = fopen("../data/login.txt", "r") or die("Unable to open file!");
    while (!feof($fn)) {
      $lines = fgets($fn);
      $words = explode(",",$lines);
      if($_SESSION['mail'] == $words[2]){
        $delete = $lines;
        break;
      }
    }
    $data = file("../data/login.txt");
    $out = array();

    foreach ($data as $line) {
      if (strcmp($line,$delete) != 0)  {
        $out[] = $line;
      }
    }
    $fp = fopen("../data/login.txt", "w");
    flock($fp, LOCK_EX);
    foreach ($out as $line) {
      fwrite($fp, $line);
    }
    flock($fp, LOCK_UN);
    fclose($fp);

    $user = fopen("../data/login.txt", "a") or die("Unable to open file!");
    fwrite($user, $user_name. "," . $phone. ",". $email. ",". $password . "\n");
   }
      
    }
    else{
      echo "Old password doesnot match";
    }

    
  }
  else {
	 $status = "Unable to change";
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
 
  echo "<br/>";
  echo $status;
  echo "<br/>";
  echo "<a href='../view/changePassword.php'>Back</a>";
  echo "<br/>";
  ?>

</body>
</html>
