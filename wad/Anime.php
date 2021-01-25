<?php include('server.php') ?>

<script>
function itemadded(){
	alert("Item added to your cart!")
	}
</script>

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

		
		<br>
        <br>
		<div class="MiddleContent">
        <section>
        <?php
        $id = trim(mysqli_real_escape_string($db, $_GET['id']));
        $sql = "SELECT * FROM products where id = '".$id."' ";
        $result = mysqli_query($db, $sql);
        if (mysqli_num_rows($result)) 
        {
            while ($row = mysqli_fetch_assoc($result)) 
            {
            echo
            "<div class='image'>
                <img src='Images/Anime$row[id].jpg' class='img-thumbnail img-responsive' alt='$row[title]' width='100%'/>
                <p class='title'>$row[title]</p>
                <p class='price'>$row[price]</p>
				
				<form method='post'>
				<input type='hidden' name='title' id='title' value='$row[title]'>
				<input type='hidden' name='price' id='price' value='$row[price]'>
				<button class='btn' type='submit' name='addtocart' onclick='itemadded()'>Add to cart</button>
				</form>
				
				
            </div>
            
            <div class='info'>
                <h4><b>Synopsis</b></h4>
                <p style='text-align: justify;'>
                $row[synopsis]
                </p>
				<br>
                <table id='table'>
                    <tr>
                      <td><b>Date:</b></td>
                      <td>$row[date]</td>
                    </tr>
                    <tr>
                        <td><b>Studios:</b></td>
                        <td>$row[studios]</td>
                    </tr>  
                    <tr>
                        <td><b>Genre:</b></td>
                        <td>$row[genre]</td>
                    </tr> 
                    <tr>
                        <td><b>Episodes:</b></td>
                        <td>$row[episodes]</td>
                    </tr>
					<tr>
                        <td><b>Duration:</b></td>
                        <td>$row[duration]</td>
                    </tr>
					<tr>
                        <td><b>First episode date:</b></td>
                        <td>$row[firstDate]</td>
                    </tr>
					<tr>
                        <td><b>Final episode date:</b></td>
                        <td>$row[finalDate]</td>
                    </tr>
					<tr>
                        <td><b>Status:</b></td>
                        <td>$row[status]</td>
                    </tr>
					<tr>
                        <td><b>Seasons:</b></td>
                        <td>$row[seasons]</td>
                    </tr>
                    <tr>
                        <td><b>Rating:</b></td>
                        <td>$row[rating]</td>
                    </tr>  
					
                </table>
            </div>";
            }
        }
            ?>
			<?php 
				// initialize variables
				$title = "";
				$price = "";

				if (isset($_POST['addtocart'])) {
					$title = $_POST['title'];
					$price = $_POST['price'];
					mysqli_query($db, "INSERT INTO orders (title, price) VALUES ('$title', '$price' )");
				}
				?>
        </section>
        </div>
    </div>
	</body>
    

</html>