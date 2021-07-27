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
  	<title> Faculty Details </title>
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
					<button class="col-md-10 btn btn-primary btn-lg"> Faculty Details </button>
					<br><br> 
					<br><br> 
				</div>
 	   		</center>
 	   		<div class="container-fluid" style="color: white;">
  				<table class="col-md-12 table table-bordered table-responsive">
					<thead>
				      	<tr>
				         	<th>#</th>
				         	<th>Faculty Id</th>
						 	<th>Faculty Password</th>
						 	<th>Faculty Email</th>
						 	<th>Faculty Mobile number</th>
						 	<th>Faculty Gender</th>
						 	<th>Faculty Address</th>
						 	<th>Faculty Subject 1</th>
						 	<th>Faculty Subject 2</th>
						 	<th>Faculty Subject 3</th>
						 	<th>Salary</th>
						</tr>
				    </thead>
    				<tbody>
						<?php
								include ('Database/database.php');
								$sql = "SELECT * FROM faculty";
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
					         	<td><?php echo $row['faculty_id']; ?> </td>
					       		<td><?php echo $row['faculty_password']; ?> </td>      
								<td><?php echo $row['faculty_email']; ?> </td>      
								<td><?php echo $row['faculty_mobile']; ?> </td>   
								<td><?php echo $row['faculty_gender']; ?> </td>        
								<td><?php echo $row['faculty_address']; ?> </td>      
								<td><?php echo $row['faculty_subject1']; ?> </td>      
								<td><?php echo $row['faculty_subject2']; ?> </td>      
								<td><?php echo $row['faculty_subject3']; ?> </td>
								<td><?php echo $row['salary']; ?> </td>
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