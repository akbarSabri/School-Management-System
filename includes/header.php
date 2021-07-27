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
				<div class="col-md-0">
					
				</div>

				<div class="col-md-10">
					<br>
					<nav class="navbar navbar-inverse">
					  	<div class="container-fluid">
					    	<div class="navbar-header">
					      		<a class="navbar-brand" href="admin_login.php" style="color: white;"> UCP School System </a>
					    	</div>
					    	<ul class="nav navbar-nav">
					      		<li class="active"><a href="admin_login.php" style="color: white;">Home</a></li>
					      		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="student_update.php" style="color: white;"> Student Update <span class="caret"></span></a>
					        	<ul class="dropdown-menu" style="background-color: #222;">
					          		<li><a href="add_student.php" style="color: grey;"> Add Student</a></li>
					          		<li><a href="delete_student.php" style="color: grey;"> Delete Student </a></li>
					          		<li><a href="view_student.php" style="color: grey;"> View Student </a></li>
					        	</ul>
					      		</li>
					      		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="faculty_update.php" style="color: white;"> Faculty Update <span class="caret"></span></a>
						        	<ul class="dropdown-menu" style="background-color: #222;">
						          		<li><a href="add_faculty.php" style="color: grey;"> Add Faculty</a></li>
						          		<li><a href="delete_faculty.php" style="color: grey;"> Delete Faculty </a></li>
						          		<li><a href="view_faculty.php" style="color: grey;"> View Faculty </a></li>
						        	</ul>
					      		</li>
					      		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="view_class.php" style="color: white;"> Classes <span class="caret"></span></a>
						        	<ul class="dropdown-menu" style="background-color: #222;">
						          		<li><a href="add_class.php" style="color: grey;"> Add Class</a></li>
						          		<li><a href="view_class_details.php" style="color: grey;"> View Classes </a></li>
						        	</ul>
					      		</li>
					      		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="view_class.php" style="color: white;"> Fee Report <span class="caret"></span></a>
						        	<ul class="dropdown-menu" style="background-color: #222;">
						          		<li><a href="add_fee.php" style="color: grey;"> Add Fee</a></li>
						          		<li><a href="view_fee.php" style="color: grey;"> View Fee </a></li>
						        	</ul>
					      		</li>
					      		<li><a href="character_certificate.php" style="color: white;"> Character Certificate </a></li>
					    	</ul>
					  	</div>
					</nav>
				</div>

				<div class="col-md-2">
					<br>
					<div class="dropdown">
						<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="width: 100%;"> <?php echo $_SESSION['username1']; ?> <span class="caret"></span></button>
	  					<ul class="dropdown-menu">
							<li> <a href="admin_setting.php"> <button class="btn btn-sm btn-primary" style="width: 100%;"> Setting </button> </a> </li>
							<li> <a href="logout.php"> <button class="btn btn-sm btn-primary" style="width: 100%;"> Logout </button> </a> </li>
	  					</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>