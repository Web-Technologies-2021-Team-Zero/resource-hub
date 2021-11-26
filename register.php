<?php include('server.php') ?>
<?php
    if (isset($_POST['reg_user'])) {
        echo "Server register";
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $yeargroup = mysqli_real_escape_string($conn, $_POST['yeargroup']);
        $major = mysqli_real_escape_string($conn, $_POST['major']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
        if (empty($username)) { array_push($errors, "Username is required"); }
        if (empty($email)) { array_push($errors, "Email is required"); }
        if (empty($yeargroup)) { array_push($errors, "Yeargroup is required"); }
        if (empty($major)) { array_push($errors, "Major is required"); }
        if (empty($password_1)) { array_push($errors, "Password is required"); }
        if ($password_1 != $password_2) {
            array_push($errors, "The two passwords do not match");
        }

        $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($conn, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        
        if ($user) { // if user exists
            if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
            }

            if ($user['email'] === $email) {
            array_push($errors, "email already exists");
            }
        }
        if (count($errors) == 0) {
            $password = md5($password_1);//encrypt the password before saving in the database

            $query = "INSERT INTO `users` (username, email, yeargroup, major, password) 
                    VALUES('$username', '$email', '$yeargroup', '$major', '$password')";
            mysqli_query($conn, $query);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('Location: http://localhost/team/team-project/backend/login.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link href="./styles/register.css" rel="stylesheet" type="text/css" />
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
                    <div class="username" >
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" value="<?php echo $username; ?>"/> 
                        <small id="error1"></small>
                    </div>
                    <br>
                    <div class="email">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" value="<?php echo $email; ?>" />
                        <small id="error2"></small>
                    </div>
                    <div class="yeargroup">
                        <label for="yeargroup">Year group (2022, 2023, 2024, 2025)</label>
                        <input type="text" id="yeargroup" name="yeargroup" value="" />
                        <small id="error3"></small>
                    </div>
                    <div class="major">
                        <label for="major">Major (CE, EE, ME, MIS, CS, BA etc.)</label>
                        <input type="text" id="major" name="major" value=""/>
                        <small id="error4"></small>
                    </div>
                    <div class="password">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password_1" value=""/>
                        <small id="error5"></small>
                    </div>
                    <div class="confirmpassword">
                        <label for="confirmpassword">Confirm Password</label>
                        <input type="password" id="confirmpassword" name="password_2" value=""/>
                        <small id="error6"></small>
                    </div>
                    <div class="button-container">
                        <input type="submit" id="signup-button" name="reg_user" value="Sign Up" >
                    </div>
                    <div class="contact-admin">
                        Already have an account? <a href="login.php">Login</a><br>
                        <a style="padding-top: 30px" href="index.php">Go back home</a>
                    </div>
                </form>
            </div>
        </div>
    </div> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./scripts/signup.js"></script>
</body>
</html>