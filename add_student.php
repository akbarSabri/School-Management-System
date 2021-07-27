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
	<title> Add Student </title>  
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
				<button class="col-md-10 btn btn-primary btn-lg"> Add Student </button> 
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
    						<label style="color: white;"> Student Id </label>
    						<input type="text" class="form-control" name="user" required>
  						</div>
  						<div class="form-group">
						    <label style="color: white;"> Password </label>
						    <input type="password" class="form-control" name="p">
						</div>
						<div class="form-group">
							<label style="color: white;"> Student Name </label>
						    <input type="text" class="form-control" name="sn">
						</div>
					    <div class="form-group">
					    	<label style="color: white;"> Father Name </label>
					    	<input type="text" class="form-control" name="fn">
					  	</div>
					  	<div class="form-group">
						    <label style="color: white;"> Student Email </label>
					    	<input type="email" class="form-control" name="se">
					  	</div>
					  	<div class="form-group">
					    	<label style="color: white;"> Student Mobile Number </label>
					    	<input type="text" class="form-control" name="sm">
					  	</div>
					    <div class="form-group">
					    	<label style="color: white;"> Guardian Email </label>
					    	<input type="email" class="form-control" name="fe">
					  	</div>
					  	<div class="form-group">
					    	<label style="color: white;"> Guardian Mobile Number </label>
					    	<input type="text" class="form-control" name="fm">
					  	</div>
					  	<div class="form-group">
					    	<label style="color: white;"> Date Of Birth </label>
					    	<input type="date" class="form-control" name="dob">
					  	</div>
					  	<div class="form-group">
							<label style="color: white;"> Address </label>
						    <input type="text" class="form-control" name="sa">
						</div>

						<div>
							<b style="color: white;"> Gender </b>
							<br>
						    <input type="radio" name="gender" value="male"> <b style="color: white;"> Male </b> &nbsp &nbsp
							<input type="radio" name="gender" value="female"> <b style="color: white;"> Female </b>
						</div>
  						<br>
						<div class="form-group">
							<label for="sel1" style="color: white;"> Class </label>
						  	<select class="form-control" name="sc">
								<?php for($i=1; $i<=10; $i++)
								{
									?>
									<option  value="<?php echo $i; ?>"> <?php echo $i; ?></option>
								<?php
								}	
								?>
							</select>
						</div>
						<div class="form-group">
							<label style="color: white;"> Section </label>
						    <input type="text" class="form-control" name="sb">
						</div>
					  	<div class="form-group">
					    	<label style="color: white;"> Date Of Addmission</label>
					    	<input type="date" class="form-control" name="doa">
					  	</div>
 						<button type="submit" class="btn btn-primary" name="submit786"> Submit </button>
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

if(isset($_POST['submit786']) )
{
	include('Database/database.php');
	
	$user =     $_POST['user'];
	$password = $_POST['p'];
	$sname =    $_POST['sn'];
	$fname =   $_POST['fn'];
	$semail =   $_POST['se'];
	$femail =  $_POST['fe'];
	$smobile = $_POST['sm'];
	$fmobile = $_POST['fm'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$sfaculty = $_POST['sf'];
	$sbatch = $_POST['sb'];
	$saddress = $_POST['sa'];
	$sclass = $_POST['sc'];
	$doa = $_POST['doa'];	
	
	$sql = "INSERT INTO student ( 
	
	student_id,
	student_password,
	student_name,
	student_email,
	guardian_email,
	student_mobile,
	guardian_mobile,
	student_dob,
	student_gender,
	student_batch,
	student_semester,
	student_address)
		
	VALUES (
	'$user',
	'$password',
	'$sname',
	'$semail',	
	'$femail',
	'$smobile',
	'$fmobile',
	'$dob',
	'$gender',
	'$sbatch',
	'$sclass',
	'$saddress'
	) ";
	
	if ($conn->query($sql)===true){
		echo "<script> alert ('Student Added Successfully');</script>";
	}
	else{
		echo "<script> alert ('ERROR');</script>";
	}	
}
?>

<?php
}

?>