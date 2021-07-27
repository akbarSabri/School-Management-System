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
  	<title> Marks Details </title>
  	<?php include ('includes/links.php') ?>
</head> 
<body style="background-color: #222;">
	<?php include('includes/header2.php') ?>
	<div class="container">
		<div class="row">
	    	<center>
	    		<div class="col-md-1">
	    			
	    		</div>
				<div>
					<button class="col-md-10 btn btn-primary btn-lg" type="submit"> Marks Details </button> 
				</div>
 	   		</center>
		</div>
	</div>
	<br>
	<div class="container-fluid" style="color: white;">
		<br>
  		<table class="table table-bordered">
    		<thead>
      			<tr>
			        <th> # </th>
			        <th>Student ID </th>
					<th>Description </th>
					<th>Total Marks </th>
					<th>Obtained Marks </th>
				</tr>
    		</thead>
    		<tbody>
				<?php
						include ('Database/database.php');
						$sql = "SELECT * FROM marks";
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
			       		<td><?php echo $row['description']; ?> </td>      
						<td><?php echo $row['tmarks']; ?> </td>
						<td><?php echo $row['omarks']; ?> </td>
				</tr>
				<?php 
					$i++;
			
				}
			}
	?>
	  		</tbody>
  		</table>
	</div>
</body>
</html>

<?php 
} 

?>