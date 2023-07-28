<?php
include("connection.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="main.css">
    <script defer src="index.js"></script>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="./registration.php" method="POST">
                <h1>Create Account</h1>
                <input type="email" class="inputField" placeholder="Email" name="r_email" required />
                <input type="password" class="inputField" placeholder="Password" name="r_password" required />
                <span>or use your email for registration</span>

                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google"></i></a>
                    <a href="#" class="social"><i class="fab fa-github"></i></a>
                </div>
                <input id="btn" type="submit" name="registration" value="Sign up"></input>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="./login.php" method="POST">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google"></i></a>
                    <a href="#" class="social"><i class="fab fa-github"></i></a>
                </div>
                <span>or use your account</span>
                <input type="email" class="inputField" placeholder="Email" name="l_email" required />
                <input type="password" class="inputField" placeholder="Password" name="l_password" required />
                <a href="#" style="color: rgb(192, 191, 191);">Forgot your password?</a>
                <input id="btn" type="submit" name="login" value="Login"></input>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
</body>
</html>