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
	<title> All Admins </title>  
  	<?php include ('includes/links.php') ?>	
</head>
<body style="background-color:#222;">
	<?php include('includes/header.php') ?>
	<br>
	<div class="container" style="color:white;">
		<button class="col-md-12 btn btn-lg btn-primary"> All Administrators </button>
		<br><br><br><br>
  		<table class="table table-bordered">
    		<thead>
      			<tr>
         			<th> # </th>
         			<th>Username:</th>
		 			<th>Password:  </th>
		
				</tr>
    		</thead>
    		<tbody>
				<?php 
					include ('Database/database.php');

					$sql = "SELECT * FROM administrator ";
					$result = $conn->query($sql);
					
					$i=1;
					if ($result->num_rows > 0) {
    					while($row = $result->fetch_assoc()) {
				?>
      			<tr>
					<?php   
						$id = $row["id"] ; 
					?>
					<td> <?php echo $i; ?> </td>
					<td> <?php echo $row["username"] ; ?> </td>
			        <td> <?php echo $row["password"] ; ?> </td>
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