<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../view/css/homepage.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="../view/js/js_profile.js"></script>
  <script src="../view/js/js_ticket.js"></script>
  <script src="../view/js/js_train.js"></script>
  <script src="../view/js/js_purchase.js"></script>
  <script src="../view/js/js_change_password.js"></script>
  <script src="../view/js/js_search_train.js"></script>
  

</head>
<body>
<div class="grid-container">
  <div class="header">
    <h2>
    	<img src="../view/image/rail_logo.png" alt="Railway" width="10%">
    	Welcome to Railway
    	<img src="../view/image/rail_logo2.png" alt="Railway" width="10%">
      <button style='background-color: red; font-weight: bold; float: right; margin: 20px; padding-right: 10px; padding-left: 10px; font-size: 15px;' onclick="location.href='../index.php'">Logout</button>
	</h2>

  </div>
  
  <div class="left" style="background-color:#aaa;">
  	<center>
		<button class="w3-btn w3-block w3-teal" onClick="purchase_ticket()">Pruchase Ticket</button>
		<br>
		<button class="w3-btn w3-block w3-teal"  onclick="return_ticket()">Return Ticket</button>
		<br>
		<button class="w3-btn w3-block w3-teal" onClick="active_ticket()">Active Tickets</button>
		<br>
		<button class="w3-btn w3-block w3-teal" onClick="purchase_history()">Purchase History</button>
		<br>
		<button class="w3-btn w3-block w3-teal" onClick="see_fare()">See Fare</button>
		<br>
		<button class="w3-btn w3-block w3-teal" onClick="train_info()">Train Info</button>
		<br>
		<button class="w3-btn w3-block w3-teal" onClick="profile()">Personal Profile</button>
		<br>
		<button class="w3-btn w3-block w3-teal" onClick="change_password()">Change Password</button>
		<br>
		<button class="w3-btn w3-block w3-teal" onclick="search_train()">Search train</button>

		
	</center>
  </div>

  <div class="middle" id="mid" style="background-color:#bbb;">
  	<img src="../view/image/train1.jpg" width="100%" height="80%">
  	<p style="font-weight: bold; font-size: 20px; text-align: center;">
  		Welcome to Railway E-Ticketing Service.
  	</p>

  </div>  

  <div class="right" style="background-color:#ccc;">
    <button style='background-color: green; font-size: 12px;' onclick="location.href='../view/uHome.php'">Refresh</button>
  	<h4 style="background-color: red;">Notice</h4>
  	<div class="notice">
  		<p>
  		Welcome to Railway department!!! This notice board is under maintenance.
  		</p>
  	</div>    
  </div>
  
  <div class="footer">
    <?php include 'footer.php';?>
  </div>
</div>

</body>
</html>
