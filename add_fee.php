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
	<title> Add fee </title>
  	<?php include ('includes/links.php') ?>
</head>
<body style="background-color:#222;">
	<?php include('includes/header.php') ?>
	<div class="container">
		<div class="container">
			<div class="row">
	    		<center>
	    		<div class="col-md-1">
	    			
	    		</div>
				<div>
					<button class="col-md-10 btn btn-primary btn-lg"> Add Fee </button>
				</div>
 	   			</center>
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
    						<label style="color:white;"> Student Id </label>
    						<input type="text" class="form-control" name="sid">
  						</div>
  						<div class="form-group">
    						<label  style="color:white;"> Month </label>
    						<input type="text" class="form-control" name="mon">
  						</div>
  						<div class="form-group">
    						<label  style="color:white;"> Fee </label>
    						<input type="text" class="form-control" name="fe">
  						</div>
 						<button type="submit" class="btn btn-primary" name="sub1234">Add Fee </button>
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
if (isset($_POST['sub1234'])){
	include('Database/database.php');
	
	$id = $_POST['sid'];
	$month = $_POST['mon'];
	$fee = $_POST['fe'];
	
	$sql = "INSERT INTO fee (student_id,month,fee) VALUES ('$id','$month','$fee') ";
	
	if ($conn->query($sql)===true){
		echo "<script> alert ('New Fee added successfully');</script>";
	}
	else{
		echo "<script> alert ('ERROR');</script>";
	}
}
?>

<?php 
} 

?>