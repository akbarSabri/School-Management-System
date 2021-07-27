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
	<title> Delete Faculty </title>  
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
				<button class="col-md-10 btn btn-primary btn-lg"> Delete Faculty </button> 
			</div>
	 	</div>

	 	<br><br>
	 	<div class="container">
 			<div class="row"> 
				<div class="col-md-4">
					
				</div>
 				<div class="col-md-4"> 
					<div class="well well-lg" style="background-color: #222;">
						<form role="form" method="post">
  							<div class="form-group">
    							<label style="color: white;"> Faculty Id </label>
    							<input type="text" class="form-control" name="s12">
  							</div>
							<?php
								error_reporting(0);
 								echo  "<button type='submit' name='s101' class='btn btn-md btn-danger'>Delete</button>" ; 
							?>
						</form>
					</div>
  				</div>
				<div class="col-md-4">
					
				</div>
 			</div>
		</div>
		<?php 
			include ('Database/database.php');
			if (isset($_POST['s101'])) {
				$user = $_POST['s12'];	

				$sql = "SELECT * FROM faculty WHERE faculty_id='$user' ";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						$id = $row["id"] ;
						$delete_id = $id;

						$sql = "DELETE FROM faculty WHERE 	id='$delete_id'";
						if ($conn->query($sql) === TRUE) { 
		?>
	
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					
				</div>
				<div class="col-md-4">
					<div class="alert alert-danger alert-dismissible fade in">
						<a href="#" class="close" data-dismiss="alert" aria-label="close"> &times; </a>
						<strong> Data has been deleted successfully. </strong>
				    </div> 
				</div>
				<div class="col-md-4">
					
				</div>
			</div>
		</div>
		<?php
			} 
			else
			{
		?>

		<div class="container">
			<div class="row">
				<div class="col-md-4">
					
				</div>
				<div class="col-md-4">
					<div class="alert alert-danger alert-dismissible fade in">
						<a href="#" class="close" data-dismiss="alert" aria-label="close"> &times; </a>
						<strong> ERROR </strong>
			    	</div>
				</div>
				<div class="col-md-4">
					
				</div>
			</div>
		</div>
		<?php
			}
		}
	}
}
?>

</body>
</html>

<?php
}

?>