<!DOCTYPE html>
<html lang="en">
<head>
	<title> Student </title>  
  	<?php include ('includes/links.php') ?>
</head>
<body>
	<div class="col-md-4">
		<div class="well well-md" style="background-color: #222;">
			<center>
			    <h2><b style="color: white;"> Student Login </b></h2>
			    <br>
			    
			    <div>
			    	<img class="img img-circle" src="img/My-Profile-green.ico" style="width: 25%;">
			    </div>
			 	<br>

				<form role="form" method="post">
			  		<div class="form-group">  
			 			<label> <h4><b style="color: white;"> Username </b></h4> </label>
			    		<input type="email" class="form-control" name="e1">
			  		</div>
			  		<div class="form-group">
			    		<label> <h4><b style="color: white;"> Password </b></h4></label>
			    		<input type="password" class="form-control" name="p1">
			  		</div>
			   		<button type="submit" class="btn btn-primary" name="log1"><b> Login </b></button>
				</form>
				
			  	<br>
			</center>
		</div>
	</div>
</body>
</html>

<?php
include ('Database/database.php');
if (isset($_POST['log1'])) {
	$e1 = $_POST['e1'];
	$p1 = $_POST['p1'];
	
	$sql = "SELECT id, student_id , student_password FROM student WHERE student_id='$e1'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	        $pass =  $row["student_password"];
			if($p1==$pass){
				$_SESSION['username3'] = $e1;
				echo "<script> window.open('student_login.php','_self')</script>"; 
			}
			else{
				echo "<script> window.open('index.php','_self')</script>";		
			}
		}
	}
}
?>