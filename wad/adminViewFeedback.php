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
	
	<form method="post" action="adminViewFeedback.php">
  		<div class="container">
    	<h1>Admin Control: View Feedback</h1>
		
		<?php
	if (isset($_GET['id'])) {
		$id = trim(mysqli_real_escape_string($db, $_GET['id']));
		$id = intval($id);
		$sql = "SELECT * FROM feedback where id = '".$id."' ";
		$result = mysqli_query($db, $sql);
		if (mysqli_num_rows($result)) 
		{
			while ($row = mysqli_fetch_assoc($result)) 
			{
			echo
    		"<hr>
    		<label for='userID'>Feedback ID</label><br>
  			<input type='text' id='id' name='userid' value='$row[id]' readonly><br>
  			
    		<label for='name'>Name</label><br>
  			<input type='text' id='name' name='name' value='$row[name]' readonly><br>
  			
    		<label for='email'>Email</label><br>
  			<input type='text' id='email' name='email' value='$row[email]' readonly><br>

    		<label for='subject'>Subject</label><br>
  			<input type='text' id='subject' name='subject' value='$row[subject]' readonly><br>
  			
    		<label for='content'>Content</label><br>
  			<input type='text' id='content' name='content' value='$row[content]' readonly><br>
    
			<hr>";
			}
		}
	}
		?>
		<button class="btn-cancel" onclick="location.href='javascript:history.back()'" type="button">Return</button>
	</form>

	</div>
	</div>
	</body>
</html>