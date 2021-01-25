<?php  include('server.php'); ?>
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
		<?php include"headeradmin.php" ?>
	</header>
	
	<div class="content">
	
	
		<br>  
	<div class="MiddleContent">
	
	<form method="post" action="adminAddUser.php">
  		<div class="container">
    	<h1>Admin Control: Add User</h1>
    	
    	
    	<hr>
    		<label for="userID">User ID</label><br>
  			<input type="text" id="id" name="id" placeholder="User ID"><br>
  			
    		<label for="uname">Username</label><br>
  			<input type="text" id="username" name="username" placeholder="Username"><br>
  			
    		<label for="email">Email</label><br>
  			<input type="text" id="email" name="email" placeholder="Email"><br>
			
			<label for="password">Password</label><br>
  			<input type="text" id="password" name="password" placeholder="Password"><br>

    		<label for="address">Address</label><br>
  			<input type="text" id="address" name="address" placeholder="Address"><br>
  			
    		<label for="phone">Phone Number</label><br>
  			<input type="text" id="phoneNumber" name="phoneNumber" placeholder="Phone Number"><br>
    
    	<hr>
  		
	</form>
	
	<button class="btn" type="submit" name="save" >Save</button>

	<?php 

	// initialize variables
	$username = "";
	$email = "";
	$password = "";
	$address = "";
	$phoneNumber = "";

	if (isset($_POST['save'])) {
		$id =$_POST['id'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$address = $_POST['address'];
		$phoneNumber = $_POST['phoneNumber'];

		mysqli_query($db, "INSERT INTO users (id, username, password, email, address, phoneNumber) VALUES ('$id', '$username', '$password','$email', '$address', '$phoneNumber')");
		header('location: admin.php');
	}
	?>
	
	</div>
	</div>
	</body>
</html>
