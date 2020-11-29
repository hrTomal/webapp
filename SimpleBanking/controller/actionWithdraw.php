<?php
  session_start();
?>
<?php 

	$email = $password = $acc = "";
  $emailErr = $passwordErr = $accErr = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $amount = $_POST['withdraw'];
    echo $amount;

    $conn = new mysqli("localhost", "root", "", "logindb");

    if($conn->connect_error) {
        die("Connection Failure");
      }
      else {
        echo "Connection Successful";

        $sql = "Select * FROM login WHERE email = '$email' and pass = '$password'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);

        if($row['acc'] >= $amount ){
          $new_balance = $row['acc'] - $amount;

          $sql = "UPDATE `login` SET `acc`= $new_balance WHERE `email`= '$row['email']'";
          $result = mysqli_query($conn,$sql);
          $row = mysqli_fetch_array($result);

        }
        else{
          echo "<br>";
          echo "Insufficietn amount";
        }

      }
      $conn -> close();
  }


?>