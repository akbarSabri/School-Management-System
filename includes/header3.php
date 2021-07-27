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
				<div class="col-md-1">
					
				</div>

				<div class="col-md-9">
					<br>
					<nav class="navbar navbar-inverse">
					  	<div class="container-fluid">
					    	<div class="navbar-header">
					      		<a class="navbar-brand" href="faculty_login.php" style="color: white;"> UCP School System </a>
					    	</div>
					    	<ul class="nav navbar-nav">
					      		<li class="active"><a href="faculty_login.php" style="color: white;">Home</a></li>
					      		<li><a href="mark_attendence.php" style="color: white;"> Mark Attendence </a></li>
					      		<li><a href="grade_marks.php" style="color: white;"> Grade Marks </a></li>
					      		<li><a href="view_marks1.php" style="color: white;"> View Marks </a></li>
					    	</ul>
					  	</div>
					</nav>
				</div>

				<div class="col-md-2">
					<br>
					<div class="dropdown">
						<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="width: 100%;"> <?php echo $_SESSION['username2']; ?> <span class="caret"></span></button>
	  					<ul class="dropdown-menu">
							<li> <a href="faculty_setting.php"> <button class="btn btn-sm btn-primary" style="width: 100%;"> Change Password </button> </a> </li>
							<li> <a href="logout.php"> <button class="btn btn-sm btn-primary" style="width: 100%;"> Logout </button> </a> </li>
	  					</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>