<?php
    require __DIR__ . "./database/controllers/input_controller.php";

    session_start();

    $username = "";
    $email    = "";
    $yeargroup    = "";
    $major    = "";
    $errors = array(); 

    // connect to the database
    $conn = mysqli_connect('localhost', 'root', '12345678', 'resource_hub');

    // REGISTER USER
    if (isset($_POST['reg_user'])) {
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
            $password = md5($password_1);
            $query = "INSERT INTO `users` (username, email, yeargroup, major, password) VALUES('$username', '$email', '$yeargroup', '$major', '$password')";
            mysqli_query($conn, $query);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header("location: ./login.php");
        }
    }

    // LOGIN USER
    if (isset($_POST['login_user'])) {
        $errors = array(); 
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
      
        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }
        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $results = mysqli_query($conn, $query);
            if (mysqli_num_rows($results) == 1) {
              $_SESSION['username'] = $username;
              $_SESSION['success'] = "You are now logged in";
              header("location: ./dashboard.php?user=$username");
            } else {               
                echo '<script>alert("Wrong credentials")</script>';
                header('location: ./login.php');
            }
        }
    }
    
?>