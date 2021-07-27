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
	<title> Faculty Update </title>  
  	<?php include ('includes/links.php') ?>
</head>
<body style="background-color: #222;">
	<div class="container">
		<?php include ('includes/header.php') ?>

		<br><br>
		<div class="row">
			<div class="col-md-1"> 

			</div>
			
			<div>
				<button class="col-md-10 btn btn-primary btn-lg"> Faculty Update </button> 
			</div>
	 	</div>
	 	<br><br>

	 	<div class="row">
			<div class="col-md-1" style="margin-left: 4%;">
				
			</div>
			<div class="col-md-3">
				<div class="well well-sm" style="background-color: #222;">
					<br>
					<center>
				 		<img class="img img-circle" src="img/My-Profile-Red.ico" style="height: 200px; width: 200px;"/>
				 		<br><br>
				 		<a href="add_faculty.php"> <button class="btn btn-lg btn-primary"> Add Faculty </button> </a> 
				 	</center>
				</div>
			</div>
			
			<div class="col-md-3">
			 	<div class="well well-sm" style="background-color: #222;">
				 	<br>
				 	<center>
						<img class="img img-circle"  src="img/My-Profile-Red.ico" style="height: 200px; width: 200px;"/>
				 		<br><br>
				 		<a href="delete_faculty.php"> <button class="btn btn-lg btn-primary"> Delete Faculty </button> </a>
				 	</center>
			 	</div>
			</div>
			
			<div class="col-md-3">
			 	<div class="well well-sm" style="background-color: #222;">
				 	<br>	
				 	<center>
				 		<img class="img img-circle"  src="img/My-Profile-Red.ico" style="height: 200px; width: 200px;"/>
				 		<br><br>
				 		<a href="view_faculty.php"> <button class="btn btn-lg btn-primary"> View Faculty </button> </a>
				 	</center>
			 	</div>
			</div>
			
			<div class="col-md-1">
				
			</div>
		</div>
	</div>
</body>
</html>

<?php
	}

?>