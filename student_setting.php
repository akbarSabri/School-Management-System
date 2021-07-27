<?php 
session_start ();

if (!isset($_SESSION['username3']))
{
	header ("location: index.php");
}
else
{
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> Change Password </title>
  	<?php include ('includes/links.php') ?>	
</head>
<body style="background-color:#222;">
	<?php include('includes/header2.php') ?>
	<div class="container">
		<div class="container">
			<div class="row">
			    <center>
			    	<div class="col-md-1">
			    		
			    	</div>
					<div>
						<button class="col-md-10 btn btn-primary btn-lg"> Change Password </button>
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
					<?php
						include ('Database/database.php');
						$edit_id = $_SESSION['username3'];

						$sql = "SELECT * FROM student WHERE student_id='$edit_id'";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
	    					while($row = $result->fetch_assoc()) { 
					?>

					<form role="form" method="post">
  						<div class="form-group">
						    <label  style="color:white;"> Old Password: </label>
						    <input type="text" class="form-control" name="nnn" value="<?php echo $row['student_password'] ; ?>" >
  						</div>
  						<div class="form-group">
						    <label  style="color:white;"> New Password: </label>
						    <input type="password" class="form-control" name="p">
  						</div>
 						<button type="submit" class="btn btn-primary" name="sub7">Submit</button>
    				</form>


					<?php
						}
					}
					?>
				</div>
			</div>
			<div class="col-md-3">
				
			</div>
		</div>
	</div>
</body>
</html>

<?php 
if (isset($_POST['sub7']) ){
	include('Database/database.php');
	$password = $_POST['p'];
	
	$sql = "UPDATE student set  student_password='$password' where student_id='$edit_id'";

	if ($conn->query($sql)===true){
		echo "<script> alert ('Password has been changed successfully ');</script>";
	}
	else{
		echo "<script> alert ('ERROR');</script>";
	}
}
?>

<?php
}

?>