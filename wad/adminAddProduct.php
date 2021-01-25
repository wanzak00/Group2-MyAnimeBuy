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
	
	<form method="post" action="adminAddProduct.php">
  		<div class="container">
    	<h1>Admin Control: Add Anime</h1>
    	
    	
    	<hr>
			<label for="productID">Product ID</label><br>
  			<input type="text" id="id" name="id" placeholder="Product ID"><br>
			
			<label for="title">Product Title</label><br>
  			<input type="text" id="title" name="title" placeholder="Product Title"><br>
			
			<label for="synopsis">Synopsis</label><br>
  			<input type="text" id="synopsis" name="synopsis" placeholder="Synopsis"><br>
			
			<label for="date">Date</label><br>
  			<input type="text" id="date" name="date" placeholder="Date"><br>
			
			<label for="studios">Studios</label><br>
  			<input type="text" id="studios" name="studios" placeholder="Studios"><br>
			
			<label for="genre">Genre</label><br>
  			<input type="text" id="genre" name="genre" placeholder="Genre"><br>
			
			<label for="episodes">Episodes</label><br>
  			<input type="text" id="episodes" name="episodes" placeholder="Episodes"><br>
			
			<label for="duration">Duration</label><br>
  			<input type="text" id="duration" name="duration" placeholder="Duration"><br>
			
			<label for="firstDate">First Airing Date</label><br>
  			<input type="text" id="firstDate" name="firstDate" placeholder="First airing date"><br>
			
			<label for="finalDate">Final Airing Date</label><br>
  			<input type="text" id="finalDate" name="finalDate" placeholder="Final airing date"><br>
			
			<label for="status">Status</label><br>
  			<input type="text" id="status" name="status" placeholder="Status"><br>
			
			<label for="seasons">Seasons</label><br>
  			<input type="text" id="seasons" name="seasons" placeholder="Seasons"><br>
			
			<label for="rating">Rating</label><br>
  			<input type="text" id="rating" name="rating" placeholder="Rating"><br>
			
			<label for="price">Price</label><br>
  			<input type="text" id="price" name="price" placeholder="Price"><br>
			
			<label for="availability">Availability</label><br>
  			<input type="text" id="availability" name="availability" placeholder="Availability"><br>
			
    	<hr>
  		
	</form>
	
	<button class="btn" type="submit" name="save_product" >Save</button>
	
	<?php 

	// initialize variables
	$title = "";
	$synopsis = "";
	$date = "";
	$studios = "";
	$genre = "";
	$episodes = "";
	$duration = "";
	$firstDate = "";
	$finalDate = "";
	$status = "";
	$seasons = "";
	$rating = "";
	$price = "";
	$availability = "";

	if (isset($_POST['save_product'])) {
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

		mysqli_query($db, "INSERT INTO products (
				id,
				title,
				synopsis,
				date,
				studios,
				genre,
				episodes,
				duration,
				firstDate,
				finalDate,
				status,
				seasons,
				rating,
				price,
				availability) 
			VALUES (
				'$id',
				'$title',
				'$synopsis',
				'$date',
				'$studios',
				'$genre',
				'$episodes',
				'$duration',
				'$firstDate',
				'$finalDate',
				'$status',
				'$seasons',
				'$rating',
				'$price',
				'$availability')");
		header('location: admin.php');
	}
	?>
	
	</div>
	</div>
	</body>
</html>
