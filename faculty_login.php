<?php 
session_start ();

if (!isset($_SESSION['username2']) )
{
	header ("location: index.php");
}
else
{
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> Faculty </title>  
  	<?php include ('includes/links.php') ?>
</head>
<body style="background-color: #222;">
	<div class="container">
		<?php include ('includes/header3.php') ?>

		<br>
		<div class="row">
			<div class="col-md-1"> 

			</div>
			
			<div>
				<button class="col-md-10 btn btn-primary btn-lg"> Teacher Dashboard </button> 
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
						<img class="img img-circle" src="img/My-Profile-Red.ico" style="height: 200px; width: 200px;"/>
						<br><br>
						<a href="mark_attendence.php"><button class="btn btn-lg btn-primary"> Mark Attendence </button></a>
		 			</center>
		 		</div>
			</div>

			<div class="col-md-3">
		 		<div class="well well-sm" style="background-color: #222;">
		 			<br>
		 			<center>
		 				<img class="img img-circle" src="img/My-Profile-Red.ico" style="height: 200px; width: 200px;">
		 				<br><br>
		 				<a href="grade_marks.php"><button class="btn btn-lg btn-primary"> Grade Marks </button> </a>
		 			</center>
		 		</div>
			</div>
			<div class="col-md-3">
				
			</div>
		</div>
	</div>
</body>
</html>

<?php 
}
	
?>