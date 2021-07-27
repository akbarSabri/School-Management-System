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
	<title> View Classes </title>  
  	<?php include ('includes/links.php') ?>
</head>
<body style="background-color: #222;">
	<div class="container">
		<?php include ('includes/header.php') ?>

		<div class="row">
			<div class="col-md-1"> 

			</div>

			<div>
				<button class="col-md-10 btn btn-primary btn-lg"> View Classes </button> 
			</div>
	 	</div>

	 	<br>
	 	<br>
		<div class="row">
			<div class="col-md-2" style="margin-left: 8%;">
				
			</div>
			<div class="col-md-3">
				<div class="well well-sm" style="background-color: #222;">
					<br>
					<center>
				 		<img class="img img-circle"  src="img/admin.png" style="height: 200px; width: 200px;"/>
				 		<br><br>
				 		<a href="add_class.php"> <button class="btn btn-lg btn-primary"> Add Class </button> </a> 
				 	</center>
				</div>
			</div>
			
			<div class="col-md-3">
			 	<div class="well well-sm" style="background-color: #222;">
				 	<br>
				 	<center>
						<img class="img img-circle"  src="img/admin.png" style="height: 200px; width: 200px;"/>
				 		<br><br>
				 		<a href="view_class_details.php"> <button class="btn btn-lg btn-primary"> View Class </button> </a>
				 	</center>
			 	</div>
			</div>
		</div>
	</div>
</body>
</html>

<?php 
} 

?>