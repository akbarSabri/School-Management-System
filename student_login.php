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
				<button class="col-md-10 btn btn-primary btn-lg"> Student Dashboard </button> 
			</div>
	 	</div>
		<br><br>

		<div class="row">
			<div class="col-md-3">  

			</div>
			<div class="col-md-3">
		 		<div class="well well-sm" style="background-color: #222;">
		 			<br>
		 			<center>
						<img class="img img-circle" src="img/My-Profile-Green.ico" style="height: 200px; width: 200px;"/>
						<br><br>
						<a href="view_attendence.php"><button class="btn btn-lg btn-primary"> View Attendence </button></a>
		 			</center>
		 		</div>
			</div>

			<div class="col-md-3">
		 		<div class="well well-sm" style="background-color: #222;">
		 			<br>
		 			<center>
		 				<img class="img img-circle" src="img/My-Profile-Green.ico" style="height: 200px; width: 200px;"/>
		 				<br><br>
		 				<a href="view_marks.php"><button class="btn btn-lg btn-primary"> View Marks </button> </a>
		 			</center>
		 		</div>
			</div>
			<div class="col-md-3">
				
			</div>
		</div>
	<br><br>
	</div>
</body>
</html>

<?php	
}

?>