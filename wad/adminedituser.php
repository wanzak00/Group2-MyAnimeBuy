<?php include('server.php') ?>
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
	
	<form method="post" action="adminedituser.php">
  		<div class="container">
    	<h1>Admin Control: Edit User</h1>
		
		<?php
	if (isset($_GET['id'])) {
		$id = trim(mysqli_real_escape_string($db, $_GET['id']));
		$id = intval($id);
		$sql = "SELECT * FROM users where id = '".$id."' ";
		$result = mysqli_query($db, $sql);
		if (mysqli_num_rows($result)) 
		{
			while ($row = mysqli_fetch_assoc($result)) 
			{
			echo
    		"<hr>
    		<label for='userID'>User ID</label><br>
  			<input type='text' id='id' name='userid' value='$row[id]' readonly><br>
  			
    		<label for='username'>Username</label><br>
  			<input type='text' id='username' name='username' value='$row[username]'><br>
  			
    		<label for='email'>Email</label><br>
  			<input type='text' id='email' name='email' value='$row[email]'><br>

    		<label for='address'>Address</label><br>
  			<input type='text' id='address' name='address' value='$row[address]'><br>
  			
    		<label for='phoneNumber'>Phone Number</label><br>
  			<input type='text' id='phoneNumber' name='phoneNumber' value='$row[phoneNumber]'><br>
    
			<hr>";
			}
		}
	}
		?>
  		<button class="btn" type="submit" name="edit_user" >Update</button>
	</form>
	
	<?php

	if (isset($_POST['edit_user'])) 
    {
		$id = $_POST['userid'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phoneNumber = $_POST['phoneNumber'];

		mysqli_query($db, "UPDATE users SET username='$username', email = '$email', address='$address', phoneNumber='$phoneNumber' WHERE id='$id'");

    	header('location: admin.php');
    }
	?>
	
	</div>
	</div>
	</body>
</html>