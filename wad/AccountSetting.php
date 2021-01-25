<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profile</title>
		<link rel="stylesheet" href="css/top_nav.css">
        <link rel="stylesheet" href="css/home_page.css">
        <link rel="stylesheet" href="css/AccountSetting.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>

	<body>
	
	<header>
		<?php include"header.php" ?>
	</header>
	
	<div class="content">
	
	
		<br>  
	<div class="MiddleContent">
	
	<form action="action_page.php">
  		<div class="container">
    	<h1>Account Settings</h1>
    	
    	<hr>
    		<label for="userID"><b>User ID</b></label>
    		<input type="text" placeholder="User ID" name="userID" id="userID" required>
    		
    		<label for="uname"><b>Username</b></label>
    		<input type="text" placeholder="Enter Username" name="uname" id="uname" required>
    		
    		<label for="email"><b>Email</b></label>
    		<input type="text" placeholder="Enter Email" name="email" id="email" required>

    		<label for="psw"><b>Password</b></label>
    		<input type="password" placeholder="Enter Password" name="psw" id="psw" required>
    		
    		<label for="address"><b>Address</b></label>
    		<input type="text" placeholder="Enter Address" name="address" id="address" required>
    
    		<label for="phone"><b>Phone Number</b></label>
    		<input type="text" placeholder="Enter Phone Number" name="phone" id="phone" required>

    	<hr>
    	
    	<h1>Payment Info</h1>
    	
    	<hr>
    		<label for="cardnum"><b>Card Number</b></label>
    		<input type="text" placeholder="Enter Card Number" name="cardnum" id="cardnum" required>

    		<label for="cardName"><b>Name on Card</b></label>
    		<input type="text" placeholder="Enter Name" name="cardName" id="cardName" required>
    		
    		<label for="expiry"><b>Card Expiry Date</b></label>
    		<input type="text" placeholder="Enter Email" name="email" id="email" required>

    		<label for="code"><b>CCV</b></label>
    		<input type="password" placeholder="Enter CCV" name="code" id="code" required>
    		
    		

    	
    	<button type="save" class="savebtn">Save</button>
  		</div>

  		
	</form>
	</div>
	</div>
	</body>
</html>
