
<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link href="./styles/login.css" rel="stylesheet" type="text/css" />
    <title>Resource Hub | Team Zero</title>
</head>
<body>
    <div class="main-container" >
        <div class="login-container">
            <div class="login"> 
                <form action="server.php" method="post">
                <?php include('errors.php'); ?>
                    <div class="logo">
                        <img src="./images/logo_v1.JPG" alt="Logo" id="login-logo" />
                    </div>
                    <div class="email">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" />
                        <small id="error1"></small>
                    </div>
                    <div class="password">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" />
                        <small id="error2"></small>
                    </div>
                    <div class="button-container">
                        <input type="submit" id="signup-button" name="login_user" value="Login">
                    </div>
                    <div class="contact-admin">
                        Don't have an account? <a href="register.php">Sign Up</a><br /><br />
                    </div>
                </form>
            </div>
        </div>
    </div> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./scripts/login.js"></script>
</body>
</html>