<?php
  session_start();
?>
<?php 

	$email = $password = $acc = "";
  $emailErr = $passwordErr = $accErr = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $amount = $_POST['debit'];

    echo $amount;
    echo " ";

    $conn = new mysqli("localhost", "root", "", "logindb");

    if($conn->connect_error) {
        die("Connection Failure");
      }
      else {
        $sql = "Select * FROM login WHERE email = '$email' and pass = '$password'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);

        if($row['acc'] >= $amount ){
          $new_balance = $row['acc'] - $amount;

          $sql = "UPDATE login SET acc = '$new_balance' WHERE email = '$email'";
          $result = mysqli_query($conn,$sql);
          $_SESSION['acc'] = $new_balance;

          echo "Withdrawn";

          header("Refresh:1;url='../view/home.php'");
        }
        else{
          echo "<br>";
          echo "Insufficient amount";
        }

      }
      $conn -> close();
  }


?>