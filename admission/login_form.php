<?php
@include 'config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    
    if (!empty($email) && !empty($password)) {
        $select = "SELECT * FROM user_form WHERE email = '$email'";
        $result = mysqli_query($conn, $select);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);

            // Check password
            if (md5($password) === $row['password']) {  
                $_SESSION['user_name'] = $row['name'];
                header('Location: user_page.php');
                exit();
            } else {
                $error = "Incorrect email or password!";
            }
        } else {
            $error = "User does not exist!";
        }
    } else {
        $error = "Email and password are required!";
    }
}
?>
 





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login_form.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form id="loginForm" action="" method="post">
           <div class="php1" > <?php
                if(isset($error)){
                    echo '<span class="error-msg">'.$error.'</span>';
                }
            ?>
            </div>
            <div class="input-group">
                <label for="email"><ion-icon name="person-circle-outline"></ion-icon> Email ID</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="input-group">
                <label for="password"><ion-icon name="shield-half-outline"></ion-icon> Password</label>
                <input type="password" id="password" name="password" required placeholder="Enter your password">
            </div>
            <div class="button-group">
                <button type="submit" name="submit">Login</button>
                <button type="reset">Reset</button>
            </div>
        </form>
        <div style="margin-top:12px;">
            Don't have an account? <a href="register_form.php" style="color: blue;">register now</a>
        </div>
    </div>
</body>
</html>
