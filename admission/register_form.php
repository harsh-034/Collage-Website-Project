<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Form Login</title>
    <link rel="stylesheet" href="register_form.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>

    <div class="login-container">
        <div>
            <h2>Sign up</h2>
            <h4>It' free and only takes a minute</h4>
            <form action="" method= "post"  onsubmit="myFunction()">
                <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
                <div class="input-group">
                    <label for="fristname">First Name</label>
                    <input type="text" id="firstname" name="name" placeholder="First name" required>
                </div>
               
                <div class="input-group">
                    <label for="Email">Email ID</label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required placeholder="Password">
                </div>
                <div class="input-group">
                    <label for="password">confirm password</label>
                    <input type="password" id="password" name="cpassword" required placeholder="confirm your password">
                </div>
                <div class="input-group">
                <select name="user_type">
                    <option value="male">Male</option>
                    <option value="Female">Female</option>
                 </select>
                  </div>
                  <div class="button-group">
                    <button type="submit" name="submit" value="register now">Login</button>
                    <button type="reset">reset</button>
                </div>
                <div style="margin-top:12px;">
                    Already have an accoun? <a href="login_form.php" style="color: blue;">Login Hare</a>
                </div>
                <div style="margin-top:12px;">
                    By clicking the Sign Up button, you agree to our<a href="https://support.google.com/chrome/answer/6130773?hl=en" style="color: blue;"> Terms </a> and <a href="https://support.google.com/chrome/answer/6130773?hl=en" style="color: blue;">condtion </a>
                </div>
            </form>
        </div>
    </div>
    <!-- <script>
        function myFunction() {
alert("Thank you! Your new account is created. ...");
        }
     </script> -->
    </body>
</html>