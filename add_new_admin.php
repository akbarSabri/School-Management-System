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
	<title> Add Admin </title>
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
					<button class="col-md-10 btn btn-primary btn-lg"> Add Admin </button>
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
    						<label style="color:white;"> Admin Id </label>
    						<input type="text" class="form-control" name="n">
  						</div>
  						<div class="form-group">
    						<label  style="color:white;"> Password </label>
    						<input type="password" class="form-control" name="p">
  						</div>
 						<button type="submit" class="btn btn-primary" name="sub1">Add Admin</button>
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
if (isset($_POST['sub1'])){
	include('Database/database.php');
	
	$name = $_POST['n'];
	$password = $_POST['p'];
	
	$sql = "INSERT INTO administrator (username,password) VALUES ('$name','$password') ";
	
	if ($conn->query($sql)===true){
		echo "<script> alert ('New Admin added successfully');</script>";
	}
	else{
		echo "<script> alert ('ERROR');</script>";
	}
}
?>

<?php 
} 

?>