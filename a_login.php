<!DOCTYPE html>
<html lang="en">
<head>
	<title> Admin </title>  
  	<?php include ('includes/links.php') ?>
</head>
<body>
	<div class="col-md-4">
		<div class="well well-md" style="background-color: #222;">
			<center>
		  		<h2><b style="color: white;"> Administrator Login </b></h2>
		  		<br>
	  			<div>
	     			<img class="img img-circle" src="img/admin.png"  style="width: 25%;"> 
	  			</div>
	  			<br>
				<form role="form" method="post">
					<div class="form-group">  
				 		<label> <h4><b style="color: white;"> Username </b></h4> </label>
				    	<input type="text" class="form-control" name="e3">
				  	</div>
				  	<div class="form-group">
				    	<label> <h4><b style="color: white;"> Password </b></h4> </label>
				    	<input type="password" class="form-control" name="p3">
				  	</div>
				   	<button type="submit" class="btn btn-primary" name="log3"><b> Login </b></button>
				</form>
	  			<br>
			</center>
		</div>
	</div>
</body>
</html>

<?php
include ('Database/database.php');
if (isset($_POST['log3'])){
	$e3 = $_POST['e3'];
	$p3 = $_POST['p3'];
	
	$sql = "SELECT id,username, password FROM administrator WHERE username='$e3' ";
	$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $pass = $row["password"];
		$id = $row["id"];
	 if($p3==$pass)
	 {
		 $_SESSION['username1'] = $e3;
		 $_SESSION['id'] = $id;
		 echo "<script> window.open('admin_login.php','_self')</script>";	 
	 } 
	 else 
	 {
		 echo "<script> window.open('index.php','_self')</script>";
	 }
	}	
}
}
?>	 