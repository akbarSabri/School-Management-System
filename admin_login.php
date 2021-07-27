<?php 
session_start ();

if (!isset($_SESSION['username1']) )
{
	header ("location: index.php");
}
else
{
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> Admin </title>  
  	<?php include ('includes/links.php') ?>
</head>
<body style="background-color: #222;">
	<div class="container">
		<?php include ('includes/header.php') ?>

		<br>
		<div class="row">
			<div class="col-md-1"> 

			</div>
			
			<div>
				<button class="col-md-10 btn btn-primary btn-lg"> Admin Dashboard </button> 
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
				 		<img class="img img-circle"  src="img/admin.png" style="height: 200px; width: 200px;"/>
				 		<br><br>
				 		<a href="student_update.php"> <button class="btn btn-lg btn-primary"> Student Update </button> </a> 
				 	</center>
				</div>
			</div>
			
			<div class="col-md-3">
			 	<div class="well well-sm" style="background-color: #222;">
				 	<br>
				 	<center>
						<img class="img img-circle"  src="img/admin.png" style="height: 200px; width: 200px;"/>
				 		<br><br>
				 		<a href="faculty_update.php"> <button class="btn btn-lg btn-primary"> Faculty Update </button> </a>
				 	</center>
			 	</div>
			</div>
			
			<div class="col-md-3">
			 	<div class="well well-sm" style="background-color: #222;">
				 	<br>	
				 	<center>
				 		<img class="img img-circle"  src="img/admin.png" style="height: 200px; width: 200px;"/>
				 		<br><br>
				 		<a href="view_class.php"> <button class="btn btn-lg btn-primary"> View Classes </button> </a>
				 	</center>
			 	</div>
			</div>
			
			<div class="col-md-1">
				
			</div>
		</div>

		<br>
		<div class="row">
			<div class="col-md-3">
				
			</div>
			<div class="col-md-3">
				<div class="well well-sm" style="background-color: #222;">
					<br>
					<center>
				 		<img class="img img-circle"  src="img/admin.png" style="height: 200px; width: 200px;"/>
				 		<br><br>
				 		<a href="fee_report.php"> <button class="btn btn-lg btn-primary"> Fee Report </button> </a> 
				 	</center>
				</div>
			</div>
			
			<div class="col-md-3">
			 	<div class="well well-sm" style="background-color: #222;">
				 	<br>
				 	<center>
						<img class="img img-circle"  src="img/admin.png" style="height: 200px; width: 200px;"/>
				 		<br><br>
				 		<a href="character_certificate.php"> <button class="btn btn-lg btn-primary"> Character Certificate </button> </a>
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
