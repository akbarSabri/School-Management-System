<?php 
session_start ();

if (!isset($_SESSION['username1'])){
	header ("location: index.php");
}
else
{
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> Add Faculty </title>  
  	<?php include ('includes/links.php') ?>
</head>
<body style="background-color: #222;">
	<div class="container">
		<?php include ('includes/header.php') ?>

		<br><br>
		<div class="row">
			<div class="col-md-1"> 

			</div>
			
			<div>
				<button class="col-md-10 btn btn-primary btn-lg"> Add Faculty </button> 
			</div>
	 	</div>
	 	<br><br>

	 	<div class="row">
			<div class="col-md-3">
				
			</div>
			<div class="col-md-6">
    			<div class="well well-lg" style="background-color: #222;">   
					<form role="form" method="post">
  						<div class="form-group">
					    	<label style="color: white;"> Faculty Id </label>
					    	<input type="text" class="form-control" name="n" required>
					  	</div>
					  	<div class="form-group">
					    	<label  style="color:white;"> Password: </label>
					    	<input type="password" class="form-control" name="p">
					  	</div>
					  	<div class="form-group">
					    	<label style="color: white;"> Name </label>
					    	<input type="text" class="form-control" name="fn">
					  	</div>
					   	<div class="form-group">
					    	<label style="color: white;"> Email address </label>
					    	<input type="email" class="form-control" name="e">
					  	</div>
					 	<div class="form-group">
					    	<label style="color: white;"> Mobile Number </label>
					    	<input type="text" class="form-control" name="m">
					  	</div>
  						<div>
					    	<b style="color: white;"> Gender </b>
					    	<br>
					    	<input type="radio" name="gender" value="male"> <b style="color: white;"> Male </b> &nbsp &nbsp 
							<input type="radio" name="gender" value="female"> <b style="color: white;"> Female </b>
					  	</div>
  						<br>
					   	<div class="form-group">
					    	<label style="color: white;"> Address </label>
					    	<input type="text" class="form-control" name="a">
					  	</div>
					 	<div class="form-group">
					    	<label style="color: white;"> Subject 1 </label>
					    	<input type="text" class="form-control" name="s1">
					  	</div>
					   	<div class="form-group">
					    	<label style="color: white;"> Subject 2 </label>
					    	<input type="text" class="form-control" name="s2">
					  	</div>
					   	<div class="form-group">
					   		<label style="color: white;"> Subject 3 </label>
					    	<input type="text" class="form-control" name="s3">
					  	</div>
					   	<div class="form-group">
					   	 	<label style="color: white;"> Salary </label>
					    	<input type="text" class="form-control" name="fs">
					  	</div>
 						<button type="submit" class="btn btn-primary" name="sub1"> Submit </button>
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
	$fn = $_POST['fn'];
	$email = $_POST['e'];
	$mobile = $_POST['m'];
	$gender = $_POST['gender'];
	$address = $_POST['a'];
	$address2 = $_POST['a2'];
	$subject1 = $_POST['s1'];
	$subject2 = $_POST['s2'];
	$subject3 = $_POST['s3'];
	$salary = $_POST['fs']; 
	
	$sql = "INSERT INTO faculty (faculty_id,faculty_password, faculty_email, faculty_mobile,faculty_gender,
	faculty_address,faculty_subject1,faculty_subject2,faculty_subject3,salary)
	VALUES ('$name','$password' ,'$email','$mobile','$gender','$address','$subject1','$subject2','$subject3','$salary') ";
	
	if ($conn->query($sql)===true)
	{
		echo "<script> alert ('New Faculty Added Successfully');</script>";
	}
	else
	{
		echo "<script> alert ('ERROR');</script>";
	}
}
?>

<?php 
}

?>