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
  	<title> Student Details </title>
  	<?php include ('includes/links.php') ?>
</head>
<body style="background-color:#222;">
	<?php include('includes/header.php') ?>
	
	<div class="container">
		<div class="row">
	    	<center>
		    	<div class="col-md-1"> 

		    	</div>
				<div>
					<button class="col-md-10 btn btn-primary btn-lg"> Student Details </button>
					<br><br> 
					<br><br> 
				</div>
 	   		</center>
 	   		<div class="container-fluid" style="color: white;">
  				<table class="col-md-12 table table-bordered table-responsive">
					<thead>
				      	<tr>
				         	<th>#</th>
				         	<th>Student Id</th>
						 	<th>Student Password</th>
						 	<th>Student Name</th>
						 	<th>Student Email</th>
						 	<th>Guardian Email</th>
						 	<th>Student Mobile Number</th>
						 	<th>Guardian Mobile Number</th>
						 	<th>Date Of Birth</th>
						 	<th>Gender</th>
						 	<th>Batch</th>
						 	<th>Class</th>
						 	<th>Address</th>
						</tr>
				    </thead>
    				<tbody>
						<?php
								include ('Database/database.php');
								$sql = "SELECT * FROM student";
								$result = $conn->query($sql);
								$i=1;
								if ($result->num_rows > 0) {
				    				while($row = $result->fetch_assoc()) {
				     					
						?>
                   		<tr>
					  		<?php  
					  			$id = $row["id"] ; 
					  		?>
					        	<td><?php echo $i;?></td>
					         	<td><?php echo $row['student_id']; ?> </td>
					       		<td><?php echo $row['student_password']; ?> </td>      
								<td><?php echo $row['student_name']; ?> </td>      
								<td><?php echo $row['student_email']; ?> </td>   
								<td><?php echo $row['guardian_email']; ?> </td>        
								<td><?php echo $row['student_mobile']; ?> </td>      
								<td><?php echo $row['guardian_mobile']; ?> </td>      
								<td><?php echo $row['student_dob']; ?> </td>
								<td><?php echo $row['student_gender']; ?> </td>
								<td><?php echo $row['student_batch']; ?> </td>		
								<td><?php echo $row['student_semester']; ?> </td>      		
								<td><?php echo $row['student_address']; ?> </td>
						</tr>
						<?php 
							$i++;
					
						}
					}
			?>
	  				</tbody>
  				</table>
			</div>
		</div>
	</div>
	<br>
	
	<br>
	<div class="row">
  		<div class="col-md-12">	
			
		</div>
	</div>
</body>
</html>

<?php 
} 

?>