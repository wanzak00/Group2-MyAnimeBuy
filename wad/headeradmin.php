<?php 
	if(!isset($_SESSION)) 
	  { 
		  session_start(); 
	  }  

	if (isset($_GET['logout'])) 
	{
		session_destroy();
		unset($_SESSION['username']);
		header("location: index.php");
	}
?>
<div class="topnav">
    
    <?php  if (isset($_SESSION['username'])) : ?>
        <a href="admin.php">Admin Dashboard</a>
	<?php endif ?>

	<?php  if (isset($_SESSION['username'])) : ?>
		<a><i class="fa fa-id-badge" style="font-size:24px; float:right; width: auto;">Welcome Admin <strong><?php echo $_SESSION['username']; ?></strong></i></a>
		<button onclick="location.href='index.php?logout=1'" style=" font-size:22px; width:auto; float:right; margin-right: 1%; background-color: #990000">Logout</button>
	<?php endif ?>

</div>