<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
</head>
<body>
	<br>
	<div class="container">
		<div class="well well-sm" style="background-color: #222;">
			<div class="row">
				<div class="col-md-2">
					
				</div>

				<div class="col-md-7">
					<br>
					<nav class="navbar navbar-inverse">
					  	<div class="container-fluid">
					    	<div class="navbar-header">
					      		<a class="navbar-brand" href="student_login.php" style="color: white;"> UCP School System </a>
					    	</div>
					    	<ul class="nav navbar-nav">
					      		<li class="active"><a href="student_login.php">Home</a></li>
					      		<li><a href="view_attendence.php" style="color: white;"> View Attendence </a></li>
					      		<li><a href="view_marks.php" style="color: white;"> View Marks </a></li>
					    	</ul>
					  	</div>
					</nav>
				</div>

				<div class="col-md-2">
					<br>
					<div class="dropdown">
						<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="width: 100%;"> <?php echo $_SESSION['username2']; ?> <span class="caret"></span></button>
	  					<ul class="dropdown-menu">
							<li> <a href="student_setting.php"> <button class="btn btn-sm btn-primary" style="width: 100%;"> Change Password </button> </a> </li>
							<li> <a href="logout.php"> <button class="btn btn-sm btn-primary" style="width: 100%;"> Logout </button> </a> </li>
	  					</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>