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
	<title> Add Class </title>
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
					<button class="col-md-10 btn btn-primary btn-lg"> Add Class </button>
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
    						<label style="color:white;"> Class Name </label>
    						<input type="text" class="form-control" name="cid">
  						</div>
  						<div class="form-group">
    						<label  style="color:white;"> Section </label>
    						<input type="text" class="form-control" name="sec">
  						</div>
  						<div class="form-group">
    						<label  style="color:white;"> Room </label>
    						<input type="text" class="form-control" name="r">
  						</div>
 						<button type="submit" class="btn btn-primary" name="sub12345">Add Class </button>
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
	
	$class = $_POST['cid'];
	$section = $_POST['sec'];
	$room = $_POST[r];
	
	$sql = "INSERT INTO class (class_id,section,room) VALUES ('$class','$section','$room') ";
	
	if ($conn->query($sql)===true){
		echo "<script> alert ('New Class added successfully');</script>";
	}
	else{
		echo "<script> alert ('ERROR');</script>";
	}
}
?>

<?php 
} 

?>