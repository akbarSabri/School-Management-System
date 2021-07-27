<?php 
session_start ();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> Login </title>  
  	<?php include ('includes/links.php') ?>
</head>
<body style="background-color: #222;">
	<br>
	<?php include ('includes/header1.php') ?>
	
	<div class="container">
		<div class="row">
			<?php include ('s_login.php') ?>
		
			<?php include ('f_login.php') ?>
		  
			<?php include ('a_login.php') ?> 
		</div>
	</div>

</body>
</html>