<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login_pages.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form id="loginForm" action="actions/login.php" method="post" onsubmit="myFunction()">
            <div class="input-group">
                <label for="username"> <ion-icon name="person-circle-outline"></ion-icon> Email ID</label>
                <input type="text" id="email" name="email" placeholder="username">
            </div>
            <div class="input-group">
                <label for="password"><ion-icon name="shield-half-outline"></ion-icon> Password</label>
                <input type="password" id="password" name="password" required placeholder="Password">
            </div>
            
            <div class="button-group">
                <button type="submit" name="login">Login</button>
                <button type="reset">reset</button>
            </div>
        </form>
        <div style="margin-top:12px;">
            Don't have an account? <a href="sign_page.html" style="color: blue;" onsubmit="myFunction()">Sign up</a>
        </div>
    </div>

    <!-- <script>
        function myFunction() {
alert("Succeful Login . ...");
        }
     </script> -->
</body>

</html>