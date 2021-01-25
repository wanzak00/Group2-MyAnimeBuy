<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Account Detail</title>
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
	
	<form action="/AccountSetting.html">
  		<div class="container">
    	<h1>Account Details</h1>
    	
    	
    	<hr>
    		<label for="userID">User ID</label><br>
  			<input disabled type="text" id="userID" name="userID" value="1"><br>
  			
    		<label for="uname">Username</label><br>
  			<input disabled type="text" id="uname" name="uname" value="<?php echo $_SESSION['username']; ?>"><br>
  			
    		<label for="email">Email</label><br>
  			<input disabled type="text" id="email" name="email" value="Email"><br>
    		
    		<label for="psw">Password</label><br>
  			<input disabled type="password" id="psw" name="psw" value="Password"><br>
    		

    		<label for="address">Address</label><br>
  			<input disabled type="text" id="address" name="address" value="Address"><br>
  			
    		<label for="phone">Phone Number</label><br>
  			<input disabled type="text" id="phone" name="phone" value="Phone Number"><br>
    
    	<hr>
    	
    	<h1>Payment Info</h1>
    	
    	<hr>
    	
    		<label for="cardnum">Card Number</label><br>
  			<input disabled type="text" id="cardnum" name="cardnum" value="Card Number"><br>
    
    		<label for="cardName">Name on Card</label><br>
  			<input disabled type="text" id="cardName" name="cardName" value="Name on Card"><br>

    		<label for="expiry">Card Expiry Date</label><br>
  			<input disabled type="date" id="expiry" name="expiry" value="Card Expiry Date"><br><br>

    		
    		<label for="code">CCV</label><br>
  			<input disabled type="password" id="code" name="code" value="CCV"><br>

  		</div>

  		
	</form>
	
	<button onclick="window.location.href='AccountSetting.php';">Edit</button>
	
	</div>
	</div>
	</body>
</html>
