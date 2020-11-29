<?php
  session_start();
?>
<?php 

	$email = $password = $acc = "";
  $emailErr = $passwordErr = $accErr = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $amount = $_POST['credit'];

    $conn = new mysqli("localhost", "root", "", "logindb");

    if($conn->connect_error) {
        die("Connection Failure");
      }
      else {
        $sql = "Select * FROM login WHERE email = '$email' and pass = '$password'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);

        if($row['acc'] > 0  ){
          $new_balance = $row['acc'] + $amount;

          $sql = "UPDATE login SET acc = '$new_balance' WHERE email = '$email'";
          $result = mysqli_query($conn,$sql);
          $_SESSION['acc'] = $new_balance;

          echo "Account credited by '$amount' tk";

          //header("Refresh:1;url='../view/home.php'");
        }
        else{
          echo "<br>";
          echo "You entered less than 0";
        }

      }
      $conn -> close();
  }


?>