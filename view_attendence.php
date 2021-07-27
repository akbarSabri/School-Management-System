<?php 
session_start ();

if (!isset($_SESSION['username3']) )
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
		<?php include ('includes/header2.php') ?>

		<br>
		<div class="row">
			<div class="col-md-1"> 

			</div>
			
			<div>
				<button class="col-md-10 btn btn-primary btn-lg"> Attendence </button> 
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