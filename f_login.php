<!DOCTYPE html>
<html lang="en">
<head>
	<title> Faculty </title>  
  	<?php include ('includes/links.php') ?>
</head>
<body>
	<div class="col-md-4">
		<div class="well well-md" style="background-color: #222;">
			<center>
		  		<h2><b style="color:white;"> Faculty Login </b></h2>
		  		<br>

		  		<div>
		    		<img class="img img-circle" src="img/My-Profile-red.ico"  style="width: 25%;"> 
		 	 	</div>
		  		<br>

				<form role="form" method="post">
					<div class="form-group">  
				 		<label> <h4><b style="color: white;"> Username </b></h4> </label>
				    	<input type="text" class="form-control" name="e2">
				  	</div>
				  	<div class="form-group">
				    	<label> <h4><b style="color: white;"> Password </b></h4> </label>
				    	<input type="password" class="form-control" name="p2">
				  	</div>
				   <button type="submit" class="btn btn-primary" name="log2"><b> Login </b></button>
				</form>
		  		<br>
			</center>
		</div>
	</div>
</body>
</html>

<?php
include ('Database/database.php');
if (isset($_POST['log2'])) {
	$e2 = $_POST['e2'];
	$p2 = $_POST['p2'];
	
	$sql = "SELECT faculty_id, faculty_password FROM faculty WHERE faculty_id='$e2' ";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	        $pass = $row["faculty_password"];
		 	if($p2==$pass)
		 	{
			 	$_SESSION['username2'] = $e2;
			 	echo "<script> window.open('faculty_login.php','_self')</script>";
			}
		 	else 
		 	{
			 	echo "<script> window.open('index.php','_self')</script>";	 
		 	}
		}
	}
}
?>