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
		<?php include"header.php" ?>
	</header>
	
	<div class="content">
	
	
		<br>  
	<div class="MiddleContent">
	
	<form method="post" action="feedback.php">
  		<div class="container">
    	<h1>User Feedback</h1>
    	
    	
    	<hr>

    		<label for="name">Name</label><br>
  			<input type="text" id="name" name="name" placeholder="Name"><br>
  			
    		<label for="email">Email</label><br>
  			<input type="text" id="email" name="email" placeholder="Email"><br>
			
			<label for="subject">Subject</label><br>
  			<input type="text" id="subject" name="subject" placeholder="Subject"><br>

    		<label for="content">Content</label><br>
  			<input type="text" id="content" name="content" placeholder="Content"><br>
    
    	<hr>
  		
	</form>
	
	<button class="btn" type="submit" name="save" >Submit</button>

	<?php 

	// initialize variables
	$name = "";
	$email = "";
	$subject = "";
	$content = "";
	
	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$content = $_POST['content'];

		mysqli_query($db, "INSERT INTO feedback (name, email, subject, content) VALUES ('$name', '$email','$subject','$content')");
		header('location: index.php');
	}
	?>
	
	</div>
	</div>
	</body>
</html>
