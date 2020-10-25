<!DOCTYPE html>
<html>
<head>
	<title>Learn php Validation</title>
</head>
<body>

	<center>
	<?php
	$nameError = "";
	$idError = "";
	$genderError = "";
	$mailError = "";
	$addressError = "";
	$cityError = "";
	$countryError = "";
	$stateError = "";

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		//ID

		if(empty($_REQUEST["studentId"])){
			echo "*ID Required*";
			echo "<br/>";
		}
		else {
			echo "Student ID: " . $_POST["studentId"];
			echo "<br/>";
		}

		//Name

		if(empty($_REQUEST["studentName"])){
			echo "*Name Required*";
			echo "<br/>";
		}
		else {
			echo "Student Name: " . $_POST["studentName"];
			echo "<br/>";
		}

		//Gender

		if(empty($_REQUEST["male"])  && empty($_REQUEST["female"])){
			echo "*Gender Required*";
			echo "<br/>";
		}
		else if(!empty($_REQUEST["male"])  && !empty($_REQUEST["female"])){
			echo "*One Gender Required*";
			echo "<br/>";
		}
		else {
			if(empty($_REQUEST["male"])){
				echo "Gender: ". $_POST["female"];
				echo "<br/>";
			}
			elseif(empty($_REQUEST["female"])) {
				echo "Gender: ". $_POST["male"];
				echo "<br/>";
			}

		}

		//Email

		if(empty($_REQUEST["studentEmail"])){
			echo "*Email Required*";
			echo "<br/>";
		}
		elseif($_POST["studentEmail"] == "@") {
			echo "*Correct Email Required*";
			echo "<br/>";
		}
		else {
			echo "Student mail: " . $_POST["studentEmail"];
			echo "<br/>";
		}

		//Address

		if(empty($_REQUEST["address"])){
			echo "*Address Required*";
			echo "<br/>";
		}
		else {
			echo "Address: " . $_POST["address"];
			echo "<br/>";
		}

		echo "Street Address: " . $_POST["streetAddress"];
		echo "<br/>";
		echo "Address Line 2: " . $_POST["addressLine2"];
		echo "<br/>";

		//State

		if(empty($_REQUEST["state"])){
			echo "*State Required*";
			echo "<br/>";
		}
		else {
			echo "State/Province/Region: " . $_POST["state"];
			echo "<br/>";
		}

		//City		

		if(empty($_REQUEST["city"])){
			echo "*City Required*";
			echo "<br/>";
		}
		else {
			echo "City: " . $_POST["city"];
			echo "<br/>";
		}

		//Country

		if(empty($_REQUEST["country"])){
			echo "*Country Required*";
			echo "<br/>";
		}
		else {
			echo "Student mail: " . $_POST["country"];
			echo "<br/>";
		}

		echo "<hr>";

	}
	?>
	</center>

	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

		<label>Student Id </label>
		<input type="text" name="studentId" required>
		<br/>
		<span><?php echo $idError ?></span>
		<br/>

		<label>Student Name </label>
		<input type="text" name="studentName" required>
		<br/>
		<span><?php echo $nameError ?></span>
		<br/>

		<input type="checkbox" id="male" name="male" value="Male">
		<label for="male">Male</label><br>
		<input type="checkbox" id="female" name="female" value="Female">
		<label for="female">Female</label><br>
		<span><?php echo $genderError ?></span>
		<br/>

		<label>Student Email </label>
		<input type="text" name="studentEmail" value="@" required>
		<br/>
		<span><?php echo $mailError ?></span>
		<br/>

		<label>Address </label>
		<input type="text" name="address" required>
		<br/>
		<span><?php echo $addressError ?></span>
		<br/>

		<label>Street Address </label>
		<input type="text" name="streetAddress">
		<br/>
		<label>Address Line 2 </label>
		<input type="text" name="addressLine2">
		<br/>
		<label>State/Province/Region </label>
		<input type="text" name="state" required>
		<span><?php echo $stateError ?></span>
		<br/>
		<label>City </label>
		<input type="text" name="city" required>
		<br/>
		<span><?php echo $cityError ?></span>
		<br/>
		<br/>

		<label for="Country">Country:</label>

			<select name="country" id="country" required>
  				<option value="bangladesh">Bangladesh</option>
 				<option value="india">India</option>
 			 	<option value="usa">USA</option>
  				<option value="uk">UK</option>
			</select>
		<span><?php echo $countryError ?></span>
		<br/>

		<input type="submit">
	
	</form>

</body>
</html>