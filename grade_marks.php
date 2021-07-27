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
	<title> Add Marks </title>  
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
				<button class="col-md-10 btn btn-primary btn-lg"> Add Marks </button> 
			</div>
	 	</div>
		<br><br>

		<div class="row">
			<div class="col-md-3">
				
			</div>
			<div class="col-md-6">
    			<div class="well well-lg" style="background-color:#222;">   
					<form role="form" method="post">
  						<div class="form-group">
    						<label style="color:white;"> Student ID </label>
    						<input type="text" class="form-control" name="sid">
  						</div>
  						<div class="form-group">
    						<label  style="color:white;"> Description </label>
    						<input type="text" class="form-control" name="des">
  						</div>
  						<div class="form-group">
    						<label  style="color:white;"> Total Marks </label>
    						<input type="text" class="form-control" name="tm">
  						</div><div class="form-group">
    						<label  style="color:white;"> Obtained Marks </label>
    						<input type="text" class="form-control" name="om">
  						</div>
 						<button type="submit" class="btn btn-primary" name="sub12345"> Add Marks </button>
    				</form>
				</div>
			</div>
			<div class="col-md-3">
				
			</div>
		</div>
	</div>
</body>
</html>

<?php 
if (isset($_POST['sub12345'])){
	include('Database/database.php');
	
	$student = $_POST['sid'];
	$description = $_POST['des'];
	$tmarks = $_POST[tm];
	$omarks = $_POST[om];
	
	$sql = "INSERT INTO marks (student_id,description,tmarks,omarks) VALUES ('$student','$description','$tmarks','$omarks') ";
	
	if ($conn->query($sql)===true){
		echo "<script> alert ('New Quiz added successfully');</script>";
	}
	else{
		echo "<script> alert ('ERROR');</script>";
	}
}
?>

<?php	
}

?>