<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
</head>
<body>

<?php

$user_name = $phone = $email = "";
$user_nameErr = $phoneErr =$emailErr = "";

$update_status = "";

$myfile = fopen("../data/login.txt", "r") or die("Unable to open file!");
  while ($line = fgets($myfile)) {
    $words = explode(",",$line);
    $password = ($words[3]);
  }
  fclose($myfile); 

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
  if (!empty($password)) {
    $password = test_input($password);
    }
  else {
    $passwordErr = "Invalid Password";
    $counter = $counter + 1;
    }  

  if($counter == 0) {
    $update_status = "Profile edit completed";
    $old_mail = $_SESSION['mail'];
    

    $count = 0;
    $fn = fopen("../data/login.txt", "r") or die("Unable to open file!");
    while (!feof($fn)) {
      $lines = fgets($fn);
      $words = explode(",",$lines);
      if($old_mail == $words[2]){
        $delete = $lines;
        //echo $delete;
        echo "<br>";
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
    $_SESSION["mail"] = $email;

   }
  else {
    $update_status = "Edit Failed";
    $counter = 0;
  }
}
else {
  $update_status = "Edit Failed ";
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
  echo $update_status;
  echo "<br/>";
  echo "<a href='../view/profile.php'>Back</a>";
  echo "<br/>";
?>

</body>
</html>
