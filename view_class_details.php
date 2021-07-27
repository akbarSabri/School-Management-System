
<!DOCTYPE html>
<html lang="en">
<head>
  	<title> Class Details </title>
  	<?php include ('includes/links.php') ?>
</head> 
<body style="background-color: #222;">
	<?php include('includes/header.php') ?>
	<div class="container">
		<div class="row">
	    	<center>
	    		<div class="col-md-1">
	    			
	    		</div>
				<div>
					<button class="col-md-10 btn btn-primary btn-lg" type="submit"> Class Details </button> 
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
			        <th>Class Name </th>
					<th>Section </th>
					<th>Room </th>
				</tr>
    		</thead>
    		<tbody>
				<?php
						include ('Database/database.php');
						$sql = "SELECT * FROM class";
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
			         	<td><?php echo $row['class_id']; ?> </td>
			       		<td><?php echo $row['section']; ?> </td>      
						<td><?php echo $row['room']; ?> </td>
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

