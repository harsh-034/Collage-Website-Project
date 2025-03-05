<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admission form- GGU</title>
    <link rel="shortcut icon" href="image/favicon.ico" type="image/svg+xml">
    <link rel="stylesheet" href="css/stayle.css">
  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	
	<section class="header">
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container">
		<a class="navbar-brand fw-bold d-flex align-items-center" href="#">
    <img src="../logo.png" alt="Logo" width="200" height="40" class="d-inline-block me-2">
   
</a><!-- logo -->
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav"> 
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						
					</li>
					<li class="nav-item">
                  <a class="nav-link fw-bold text-white bg-gradient bg-dark px-3 py-2 rounded">
                   <span class="text-info">Welcome</span>  
                   <span class="text-warning"><?php echo $_SESSION['user_name'] ?? 'Guest'; ?></span>
                 </a>
               </li>
               <li class="nav-item">
						<a class="btn btn-outline-danger me-2" href="../index.html">Home</a>
					</li>
					<li class="nav-item">
						<a class="btn btn-outline-primary me-2" href="login_form.php">Login</a>
					</li>
					<li class="nav-item">
						<a class="btn btn-outline-warning me-2" href="register_form.php">Register</a>
					</li>
					<li class="nav-item">
						<a class="btn btn-outline-danger" href="logout.php">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>


   

	<div class="wrapper">
		<div class="r_form_wrap">
			
			<div class="title">
				<p>Admission form</p>
			</div>
			
			<!-- Admission from -->
			<div class="r_form">
				<form method="post" onsubmit="sendmail(); reset(); return false;">
					<div class="input_wrap">
						<label for="yourname">Your Name</label>
						<div class="input_item">
							<i class="fa fa-user" id="icon"></i>
							<input type="text" name="your name" class="input" id="yourname" placeholder="Enter the name" required>
						</div>
					</div>
					<div class="input_wrap">
						<label for="emailaddress">Email Address</label>
						<div class="input_item">
							<i class="fa fa-envelope" id="icon"></i>
							<input type="text" name="email address" class="input" id="emailaddress" placeholder="Enter the Email ID" required>
						</div>
					</div>

					<div class="input_wrap">
						<label for="phone">Phone</label>
						<div class="input_item">
							<i class="fa fa-phone-square" id="icon"></i>
							<input type="number" name="phone" class="input" id="phone" placeholder="Enter the Mobile number" required>
						</div>
					</div>
					<div class="input_wrap">
						<label>Gender</label>
						<div class="input_radio">
							<div class="input_radio_item">
								<input type="radio" id="male" name="gender" class="radio" value="male" checked>
								<label for="male" class="radio_mark">
									<ion-icon class="i" name="male-sharp"></ion-icon>
								Male</label>
							</div>
							<div class="input_radio_item">
								<input type="radio" id="female" name="gender" class="radio" value="female">
								<label for="female" class="radio_mark">
									<ion-icon class="i" name="female-sharp"></ion-icon>
									Female</label>
							</div>
							<div class="input_radio_item">
								<input type="radio" id="others" name="gender" class="radio" value="others">
								<label for="others" class="radio_mark">
									<ion-icon class="i" name="male-female-sharp"></ion-icon>
									Others</label>
							</div>
						</div>
					</div>
	
					<div class="input_wrap">
						<label for="dob">Date Of Birth</label>
						<div class="input_item">
							<i class="fa fa-calendar" id="icon"></i>
							<input type="date" name="dob" class="input" id="dob" required>
						</div>
					</div>

					<div class="input_wrap">
						<label for="course">Course</label>
						<div class="input_item">
							<i class="fa fa-caret-square-o-down" aria-hidden="true"id="icon" ></i>
					<select id="course" name="cars" class="input" required>
					<option value="select"> Select the Course</option>
					<option value="bca"> BCA</option>
					<option value="bscit">Bsc IT</option>
					<option value="bscca&it">Bsc CA & IT</option>
					</select>
					</div>
					</div>


					<div class="input_wrap">
						<label for="file">12th Marksheet</label>
						<div class="input_item">
							<i class="fa fa-file" id="icon"></i>
							<input type="file" name="file" class="input" id="file" required>
						</div>
					</div>

					<div class="input_wrap">
						<label for="password">Password</label>
						<div class="input_item">
							<i class="fa fa-key" id="icon"></i>
							<input type="password" name="password" class="input" id="password" placeholder="Enter the password" >
						</div>
					</div>
					<div class="input_wrap">
						<label for="confirmpassword">Confirm Password</label>
						<div class="input_item">
							<i class="fa fa-check-circle" id="icon"></i>
							<input type="password" name="confirm password" class="input" id="confirmpassword" placeholder="Enter the confirm password">
						</div>
					</div>

					
					<input type="submit" class="button" value="Register Now">
					
					<div ></div>
					<input type="reset" class="clear_ad" value="Clear">
					
				</form>
			</div>
	
		</div>
	</div>
	</section>
	<div class="none_div">

	</div>
	<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
	</body>
	<!-- Javascript for this Web page -->
	<script src=" https://smtpjs.com/v3/smtp.js"></script>
	<script>
		function sendmail(){
		Email.send({}).then(
	message => alert("Thanks for filling out our form!")
);
		}
	</script>

</script>
</html>