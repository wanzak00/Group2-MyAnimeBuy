<?php include('server.php') ?>
<script>
function removeitem(prodid){
	if (confirm("Are you sure want to remove this item?") == true) {
	window.location.replace("cart.php?action=deleteitem&prodid="+prodid);
	}
}
</script>

<?php
if(isset($_GET['action'])){
  if($_GET['action']=='deleteitem'){
      if(isset($_GET['prodid'])){
        $id = $_GET['prodid'];
        mysqli_query($db, "DELETE FROM `orders` WHERE id='$id'");
        header('location: cart.php');
      }
    }
}
?>
<?php
$discount = 0; // default value
$discountid = "";

// Make sure a value was sent
if(isset($_POST['discountid'])) {
	if(!empty($_POST['discountid'])) {
		$discountid = $_POST['discountid'];
		$c = mysqli_query($db, "SELECT price FROM `discount_coupon` WHERE discount_code='$discountid'");
		$d = mysqli_fetch_array($c);
		$discount = $d[0];
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
		<link rel="stylesheet" href="css/home_page.css">
        <link rel="stylesheet" href="css/cart.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>

    <header>
		<?php include"header.php" ?>
    </header>
	<br><br>
    <body>
       <div class="MiddleContent">
        <table id="user">
            <tr>
              <th class="test">Number of Item</th>
              <th class="title">Title</th>
              <th>Price</th>
			  <th>Delete Item</th>
            </tr>
			<?php
			$total=0;
			$sql = "SELECT * FROM orders";
			$result = mysqli_query($db, $sql);
			if (mysqli_num_rows($result) > 0) 
			{
				while($row = mysqli_fetch_assoc($result)) 
				{
				$a = $row["price"];
				$b = str_replace('RM ', '', $a);
				$total += intval($b);
				echo
				"<tr>
					<td>Item $row[id]</td>
					<td>$row[title]</td>
					<td>$row[price]</td>
					<td><button onclick='removeitem($row[id])'>Delete</button></td>
				</tr>";
				}
			}
			?>
        </table>
		<br>
        <table id="total">
            <tr>
                <th class="cart-discount">Discount</th>
                <td>RM <?php echo $discount?></td>
            </tr>
        </table>
        <br>
		<table id="total">
            <tr>
                <th class="subtotal">Total</th>
                <td>RM <?php 
				$total = $total - $discount;
				echo $total
				?></td>
            </tr>
        </table>
		<br>
		<form action="cart.php" method="post">
		 <input class ="discount-code" id="discountid" type="text" name="discountid" 
		 placeholder="Enter Coupon Code" size="15" />
		 <input class="apply" type="submit" value="Apply Coupon" />
		</form>
		<br>
		<br>
		<br>
		<br>
		<br>
        <a href="Checkout.php">
        <button class="button">Proceed to Checkout</button></a>

        
		</div>
    </body>
</html>