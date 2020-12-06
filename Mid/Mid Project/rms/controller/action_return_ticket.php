<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Return</title>
</head>
<body>

<?php

$ticket_number = $status = $sold_to = $date = $from = $to="";
$ticket_numberErr = $statusErr = $sold_toErr = $dateErr = $fromErr = $toErr="";

$update_status = "";

$myfile = fopen("../data/tickets.txt", "r") or die("Unable to open file!");
  while ($line = fgets($myfile)) {
    $words = explode(",",$line);
    //$ticket_number = $words[5];
  }
  fclose($myfile);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $counter = 0;
  if (isset($_POST["ticket_number"]) & !empty($_POST["ticket_number"])) {
    $ticket_number = test_input($_POST["ticket_number"]);
  }
  else {
    $ticket_numberErr = "Invalid ticket number";
    $counter = $counter + 1;
  }


  if($counter == 0) {
    $update_status = "Return requested";
    
    $count = 0;

    $fn = fopen("../data/tickets.txt", "r") or die("Unable to open file!");
    while (!feof($fn)) {
      $lines = fgets($fn);
      $words = explode(",",$lines);
      if($ticket_number."\n" == $words[5]){
        $delete = $lines;
        $date = $words[2];
        $from = $words[3];
        $to = $words[4];
        break;
      }
    }
    $data = file("../data/tickets.txt");
    $out = array();

    foreach ($data as $line) {
      if (strcmp($line,$delete) != 0)  {
        $out[] = $line;
      }
    }
    $fp = fopen("../data/tickets.txt", "w");
    flock($fp, LOCK_EX);
    foreach ($out as $line) {
      fwrite($fp, $line);
    }
    flock($fp, LOCK_UN);
    fclose($fp);

    $user = fopen("../data/tickets.txt", "a") or die("Unable to open file!");
    fwrite($user, "returned". "," . $_SESSION['mail']. ",". $date. ",". $from . ",". $to . ",". $ticket_number . "\n");
   }
  else {
    $update_status = "Return Failed";
    $counter = 0;
  }
}
else {
  $update_status = "Return Failed ";
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
  echo "<a href='../view/uHome.php'>Back</a>";
  echo "<br/>";
?>

</body>
</html>
