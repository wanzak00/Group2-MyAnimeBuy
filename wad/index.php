<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <title>Anime</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <head>
       
        <link rel="stylesheet" href="css/top_nav.css">
        <link rel="stylesheet" href="css/home_page.css">
        <!--<link rel="stylesheet" href="login_form.css">-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
	
	
<body>
	<header>
		<?php include"header.php" ?>
	</header>

			
		<br>
			<div class ="MiddleContent">
		<!-- Slideshow container -->
		<div class="slideshow-container">

  			<!-- Full-width images with number and caption text -->
  			<div class="mySlides fade">
    			<div class="numbertext">1 / 3</div>
    				<img src="Images/Attack_on_titan.jpg" alt="attack" style="width:100%">
    				<div class="text">Attack On Titan</div>
  			</div>

  			<div class="mySlides fade">
    			<div class="numbertext">2 / 3</div>
    			<img src="Images/kakegurui.jpg" alt="kakegurui" style="width:100%">
    			<div class="text">Kakegurui</div>
  			</div>

  			<div class="mySlides fade">
    			<div class="numbertext">3 / 3</div>
    			<img src="Images/Shokugeki.png" alt="shokugeki" style="width:100%">
    			<div class="text">Shokugeki no Soma</div>
  			</div>

  			<!-- Next and previous buttons -->
  			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  			<a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		
		<br>

		<!-- The dots/circles -->
		<div style="text-align:center">
  			<span class="dot" onclick="currentSlide(1)"></span>
  			<span class="dot" onclick="currentSlide(2)"></span>
  			<span class="dot" onclick="currentSlide(3)"></span>
		</div>
		
		
	
		<br>

		<div class='row'>
		<?php
		$sql = "SELECT id, title FROM products";
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
		}
		?>
		</div>

	</div>
	<script>
		//for banner
		var slideIndex = 0;
		showSlides();

		function showSlides() {
  			var i;
  			var slides = document.getElementsByClassName("mySlides");
  			var dots = document.getElementsByClassName("dot");
  			for (i = 0; i < slides.length; i++) {
    			slides[i].style.display = "none";  
  			}
  			slideIndex++;
  			if (slideIndex > slides.length) {slideIndex = 1}    
  			for (i = 0; i < dots.length; i++) {
    			dots[i].className = dots[i].className.replace(" active", "");
  			}
  			slides[slideIndex-1].style.display = "block";  
  			dots[slideIndex-1].className += " active";
  			setTimeout(showSlides, 3000); // Change image every 2 seconds
			}
		
			// for login
			// Get the modal
			var modal01 = document.getElementById('id01');
			var modal02 = document.getElementById('id02');

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
				
    			if (event.target == modal01) {
        			modal01.style.display = "none";
    			}
				else if (event.target == modal02) {
        			modal02.style.display = "none";
    			}
			};
	</script>
	
	<footer>
	<?php include"footer.php"?>
	</footer>
</body>
</html>