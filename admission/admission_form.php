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
   <a href="../index.html"><img src="../logo.png" alt="Logo" width="200" height="40" class="d-inline-block me-2"></a>
   
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
				<p>Admission form 2025</p>
			</div>
			
			<!-- Admission from -->
			<div class="r_form">
				<form action ="form_action.php" method="POST" enctype="multipart/form-data" >
					<div class="input_wrap">
						<label for="yourname">Your Name</label>
						<div class="input_item">
							<i class="fa fa-user" id="icon"></i>
							<input type="text" name="name" class="input" id="yourname" placeholder="Enter the name"  value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ($_SESSION['user_name'] ?? 'Guest'); ?>" readonly>
						</div>
					<div class="input_wrap">
						<label for="emailaddress">Father Name</label>
						<div class="input_item">
							<i class="fa fa-user" id="icon"></i>
							<input type="text" name="fname" class="input" id="emailaddress" placeholder="Enter the Father Name" required>
						</div>
					</div>
					<div class="input_wrap">
						<label for="emailaddress">Mother Name</label>
						<div class="input_item">
							<i class="fa fa-user" id="icon"></i>
							<input type="text" name="mname" class="input" id="emailaddress" placeholder="Enter the Father Name" required>
						</div>
					</div>
					<div class="input_wrap">
						<label for="emailaddress">Email Address</label>
						<div class="input_item">
							<i class="fa fa-envelope" id="icon"></i>
							<input type="text" name="email" class="input" id="emailaddress" placeholder="Enter the Email ID" required>
						</div>
					</div>
					<div class="input_wrap">
						<label for="emailaddress">Address</label>
						<div class="input_item">
							<i class="fa fa-user" id="icon"></i>
							<textarea type="text" name="address" class="input" id="emailaddress" placeholder="Enter the Address" required></textarea>
						</div>
					</div>

					<div class="input_wrap">
						<label for="phone">Phone</label>
						<div class="input_item">
							<i class="fa fa-phone-square" id="icon"></i>
							<input type="number" name="mobile" class="input" id="phone" placeholder="Enter the Mobile number" required>
						</div>
					</div>
					<div class="input_wrap">
						<label>Gender</label>
						<div class="input_radio">
							<div class="input_radio_item">
								<input type="radio" id="male" name="gender" class="radio" value="Male" checked>
								<label for="male" class="radio_mark">
									<ion-icon class="i" name="male-sharp"></ion-icon>
								Male</label>
							</div>
							<div class="input_radio_item">
								<input type="radio" id="female" name="gender" class="radio" value="Female">
								<label for="female" class="radio_mark">
									<ion-icon class="i" name="female-sharp"></ion-icon>
									Female</label>
							</div>
							<div class="input_radio_item">
								<input type="radio" id="others" name="gender" class="radio" value="Others">
								<label for="others" class="radio_mark">
									<ion-icon class="i" name="male-female-sharp"></ion-icon>
									Others</label>
							</div>
						</div>
					</div>
				
					<div class="input_wrap">
					<label>Category</label>
					   <div class="col-sm-8">
                         <select name="category"  class="form-control" required>
                           <option value="">Select your category</option>
                           <option value="SC">ST</option>
                           <option value="ST">SC</option>
                           <option value="OBC">OBC</option>
                           <option value="General">General</option>
                        </select>
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
					<select id="course" name="course" class="input" required>
					<option value="select"> Select the Course</option>
					<option value="bca"> BCA</option>
					<option value="bscit">Bsc IT</option>
					<option value="bscca&it">Bsc CA & IT</option>
					</select>
					</div>
				</div>

				<!-- <div class="input_wrap">
    <label for="marksheet">12th Marksheet</label>
    <div class="input_item">
        <i class="fa fa-file" id="icon"></i>
        <input type="file" name="marksheet" class="input" id="marksheet" required>
    </div>
</div> -->

<div class="input_weap">
    <div class="col-sm-6">
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group" style="float: right;">
                    <label for="photo" class="label">Photo</label>
                    <div id="photo-preview"
                        style="border: 1px solid black; height: 150px; width: 150px; background: #F5FAFF;">
                        <img id="output" width="150" height="150" style="display: none;" />
                    </div>
                    <input type="file" name="image" id="photo" class="form-control" accept="image/*"
                        style="width: 150px;" onchange="loadFile(event, 'output')" required>
                    <button type="button" onclick="clearFile('photo', 'output')">Clear</button>
                </div>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group" style="float: right;">
                    <label class="label">Signature</label>
                    <div id="signature-preview"
                        style="border: 1px solid black; height: 120px; width: 150px; background: #F5FAFF;">
                        <img id="outputs" width="150" height="120" style="display: none;" />
                    </div>
                    <input type="file" id="signature" name="simage" class="form-control" accept="image/*"
                        style="width: 150px;" onchange="loadFile(event, 'outputs')" required>
                    <button type="button" onclick="clearFile('signature', 'outputs')">Clear</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function loadFile(event, outputId) {
        var output = document.getElementById(outputId);
        var reader = new FileReader();
        reader.onload = function () {
            output.src = reader.result;
            output.style.display = 'block'; // Show the image
        };
        reader.readAsDataURL(event.target.files[0]);
    }

    function clearFile(inputId, outputId) {
        var input = document.getElementById(inputId);
        var output = document.getElementById(outputId);

        input.value = ""; // Reset file input
        output.src = ""; // Clear image preview
        output.style.display = "none"; // Hide image
    }
</script>
<br>
<div class = "input_weap"style="border: 2px solid black;padding:10px; text-align: center;border-radius: 25px;">
        <input type="checkbox" name="declare" required>
 I declare that I have read and filled the above information, so if the information given by me is incorrect, you have the right to cancel without informing me.
    </div>

					<br>

					<input type="submit" class="button" name="form_submit" value="Register Now">
					
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