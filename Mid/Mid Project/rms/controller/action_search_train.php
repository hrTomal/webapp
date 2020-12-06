<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Search train</title>
  <h1><center>Searced Result</center></h1>
  <hr>
</head>
<body style="background-color:#cccccc;">
  <center>
    
  <?php

  $fn = fopen("../data/trains.txt", "r") or die("Unable to open file!");

  $status = 0;
  echo "<br/>";
  echo "<br/>";

  while (! feof($fn)) {
    $line = fgets($fn);
    $words = explode(",",$line);
    $train_name = $words[0];
      $train_from = $words[1];
      $train_to = $words[2];
      $train_class = $words[3];
      $train_time = $words[4];

      if (strcmp(strtolower($train_name),strtolower($_POST["train"])) == 0) {
        echo "Train Name: " . $train_name;
        echo "<br/>";
        echo "Starting from: " . $train_from;
        echo "<br/>";
        echo "Destination: " . $train_to;
        echo "<br/>";
        echo "Class: " . $train_class;
        echo "<br/>";
        echo "Starting time: " . $train_time;
        echo "<br/>";
        echo "<br/>";
        $status = 1;
        break;
      }
      else{
        $status = 0;
      }
  }

  fclose($fn);

  if($status == 0){
    echo "*Please try differnet name*";
    echo "<br/>";
    echo "<br/>";
  }
  else{

  }

  ?>

  <input type=button onClick="location.href='http://localhost/rms/view/uHome.php'" value='Back'>
    

  </center>
</body>
</html>

<?php include '../view/footer.php';?>
