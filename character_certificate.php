<?php 
session_start ();

if (!isset($_SESSION['username1']) )
{
	header ('location: index.php');
}
else
{
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> Student </title>  
  	<?php include ('includes/links.php') ?>
</head>
<body style="background-color: #222;">
	<div class="container">
		<?php include ('includes/header.php') ?>

		<div class="row">
			<div class="col-md-1"> 

			</div>
			
			<div>
				<button class="col-md-10 btn btn-primary btn-lg"> Character Certificate </button> 
			</div>
	 	</div>
		<br><br>

		<div class="row">
			
		</div>
	<br><br>
	</div>
</body>
</html>

<?php	
}

?>