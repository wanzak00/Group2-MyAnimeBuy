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
	
	<form method="post" action="admineditproduct.php">
  		<div class="container">
    	<h1>Admin Control: Edit Anime</h1>
    	
    	
		<?php
		if (isset($_GET['id'])) 
		{
		$id = trim(mysqli_real_escape_string($db, $_GET['id']));
		$id = intval($id);
		$sql = "SELECT * FROM products where id = '".$id."' ";
		$result = mysqli_query($db, $sql);
		if (mysqli_num_rows($result)) 
		{
			while ($row = mysqli_fetch_assoc($result)) 
			{
			echo
    		"<hr>
			<label for='productID'>Product ID</label><br>
  			<input type='text' id='id' name='id' value='$row[id]' readonly><br>
			
			<label for='title'>Product Title</label><br>
  			<input type='text' id='title' name='title' value='$row[title]' ><br>
			
			<label for='synopsis'>Synopsis</label><br>
  			<input type='text' id='synopsis' name='synopsis' value='$row[synopsis]' ><br>
			
			<label for='date'>Date</label><br>
  			<input type='text' id='date' name='date' value='$row[date]' ><br>
			
			<label for='studios'>Studios</label><br>
  			<input type='text' id='studios' name='studios' value='$row[studios]' ><br>
			
			<label for='genre'>Genre</label><br>
  			<input type='text' id='genre' name='genre' value='$row[genre]'><br>
			
			<label for='episodes'>Episodes</label><br>
  			<input type='text' id='episodes' name='episodes' value='$row[episodes]'><br>
			
			<label for='duration'>Duration</label><br>
  			<input type='text' id='duration' name='duration' value='$row[duration]'><br>
			
			<label for='firstDate'>First Airing Date</label><br>
  			<input type='text' id='firstDate' name='firstDate' value='$row[firstDate]'><br>
			
			<label for='finalDate'>Final Airing Date</label><br>
  			<input type='text' id='finalDate' name='finalDate' value='$row[finalDate]'><br>
			
			<label for='status'>Status</label><br>
  			<input type='text' id='status' name='status' value='$row[status]'><br>
			
			<label for='seasons'>Seasons</label><br>
  			<input type='text' id='seasons' name='seasons' value='$row[seasons]'><br>
			
			<label for='rating'>Rating</label><br>
  			<input type='text' id='rating' name='rating' value='$row[rating]'><br>
			
			<label for='price'>Price</label><br>
  			<input type='text' id='price' name='price' value='$row[price]'><br>
			
			<label for='availability'>Availability</label><br>
  			<input type='text' id='availability' name='availability' value='$row[availability]'><br>
			
    		<hr>";
			}
		}
		}
		?>
		<button class="btn" type="submit" name="edit_anime" >Update</button>
	</form>

	<?php

	if (isset($_POST['edit_anime'])) 
	{
		$id = $_POST['id'];
		$title = $_POST['title'];
		$synopsis = $_POST['synopsis'];
		$date = $_POST['date'];
		$studios = $_POST['studios'];
		$genre = $_POST['genre'];
		$episodes = $_POST['episodes'];
		$duration = $_POST['duration'];
		$firstDate = $_POST['firstDate'];
		$finalDate = $_POST['finalDate'];
		$status = $_POST['status'];
		$seasons = $_POST['seasons'];
		$rating = $_POST['rating'];
		$price = $_POST['price'];
		$availability = $_POST['availability'];

		mysqli_query($db, "UPDATE products SET title='$title', synopsis = '$synopsis', date='$date', studios='$studios', genre='$genre', episodes='$episodes', 
		duration='$duration', firstDate='$firstDate', finalDate='$finalDate', status='$status', seasons='$seasons', rating='$rating', price='$price', availability='$availability' WHERE id='$id'");

		header('location: admin.php');
	}
	?>
	
	
	</div>
	</div>
	</body>
</html>
