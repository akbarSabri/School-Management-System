<?php 
session_start ();

if (!isset($_SESSION['username2']) )
{
	header ('location: index.php');
}
else
{
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> Student Marks </title>  
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
				<button class="col-md-10 btn btn-primary btn-lg"> Marks </button> 
			</div>
	 	</div>
		<br>
		<div class="row"> 
			<div class="col-md-4">
				
			</div>
			<div class="col-md-4"> 
				<div class="well well-lg" style="background-color:#222;">
					<form role="form" method="post" action="view_marks_details.php">
						<div class="form-group">
  							<label for="sel1" style="color:white;">Your ID</label>
  								<input type="text" class="form-control" name="id">
  						</div>
						<button type="submit" name="submit" class="btn btn-primary">View </button>
					</form>
				</div>
  			</div>
			<div class="col-md-4">
				
			</div>
 		</div>
	</div>
</body>
</html>

<?php	
}

?>