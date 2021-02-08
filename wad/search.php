<?php include('server.php') ?>

<!-- search function hiz -->
<?php 
	$output='';
	//collect
	if(isset($_POST['search'])){
		$searchq = $_POST['search'];
		$query = mysqli_query($db, "SELECT * FROM products WHERE title LIKE '%$searchq%'") or die("Could not search!");
		$count = mysqli_num_rows($query);
		if($count == 0){
			$output = 'There was no search results!';
		}else{
				while($row = mysqli_fetch_array($query)){
				$sid = $row['id'];
				$stitle = $row['title'];
				$output .= '<div> '.$sid.' '.$stitle.' <div>';
			}
		}
	}
?>


<!DOCTYPE html>
<html>
    <title>Anime</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <head>
          
        <link rel="stylesheet" href="css/top_nav.css">
        <link rel="stylesheet" href="css/AnimePage.css">
        <link rel="stylesheet" href="css/home_page.css"> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
	<body>
	
	<header>
		<?php include"header.php" ?>
	</header>
	
	<div class="content">

	<?php
		$sql = "SELECT * FROM products WHERE title LIKE '%$searchq%'";
		$result = mysqli_query($db, $sql);

		if (mysqli_num_rows($result) > 0) 
		{
			while($row = mysqli_fetch_assoc($result)) 
			{
			echo
            "<div class='column'>
              	<a href='Anime.php?id={$row["id"]}'>
                  <img src='Images/Anime$row[id].jpg' alt='anime1' style='width: 90%; height:100% '>
              	</a>
              	<p class='title'>$row[title]</p>
              	<p>Ranked: #$row[id]</p>
            </div>";
			}
		}else{
			echo "<h1 style='text-align:center;'>Sorry! No anime with that title is found :(</h1>";
		}
	?>
		
    </div>
	</body>
    

</html>