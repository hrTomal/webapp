<?php
  session_start();
?>
<?php 

	$email = $password = $acc = "";
  $emailErr = $passwordErr = $accErr = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli("localhost", "root", "", "logindb");

    if($conn->connect_error) {
        die("Connection Failure");
      }
      else {
        echo "Connection Successful";

        $sql = "Select * FROM login WHERE email = '$email' and pass = '$password'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);

        if($row['email'] == $email && $row['pass'] == $password){
          echo "logged in";
          $acc = $row['acc'];

        $_SESSION["email"] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['acc'] = $acc;
        header("Refresh:1;url='../view/home.php'");
        }
        else{
          echo "<br>";
          echo "failed login";
        }

      }
      $conn -> close();
  }


?>