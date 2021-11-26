<?php
    include_once (dirname(__FILE__)).'.\database\controllers\input_controller.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="./styles/index.css" rel="stylesheet" type="text/css" />

    <title>Resource Hub | Team Zero</title>
</head>
<body onload="">
    <nav>
        <a href="index.php"><img src="./images/logo_v1.JPG" alt="Resource hub logo"></a>
            
        <span>
            <a href="login.php">Login</a>
            <a href="register.php">Sign Up</a>
        </span>
    </nav>
    <div style="clear: both;"></div>
    <main>

        <section class="container-carousel">
            <div id="carouselExampleControls" class="carousel slide .active bg-color" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100 carousel-img" src="./images/image2.jpg" alt="First slide">
                    <div class="carousel-caption heading">
                        <h5 id="hello">Created by you, for you</h5>
                        <p id="get-resources">...get all your resources on the go...</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                        <img class="d-block w-100 carousel-img" src="./images/image4.jpg" alt="Second slide">
                        <div class="carousel-caption heading">
                            <h5 id="hello2">All your resources in one place</h5>
                            <p id="get-resources2"><a href="signup.php">Register Now</a></p>
                        </div>
                  </div>
                  <div class="carousel-item">
                        <img class="d-block w-100 carousel-img" src="./images/library1.jpg" alt="Third slide">
                        <div class="carousel-caption heading">
                            <h5 id="hello3">Oh, you already have an account?</h5>
                            <p id="get-resources3"><a href="login.php">Log in now</a></p>
                        </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </section> 
        <section class="description">
            <div>
                <h1>Ashesi Resource Hub</h1>
                <h3><em>Your "one-stop-shop" for resources on-the-go</em></h3><br>
                <p>
                    So, you want to get some study material, other than lecture slides, textbooks and online material/links?
                    <br><br>
                    <em style="color: #800000;">Look no further!</em>
                    <br><br>
                    Here is the place where you will find any documents that have been shared by your peers and your seniors who have 
                    passed through the same courses before you.<br><br>
                    How amazing is that? No calling or texting your seniors asking for past notes and any material you would need.<br><br> 
                    <em style="color: #800000;">Why?</em> <br><br>
                    Because they would have uploaded all the material and you can find it all in one place! <br><br>
                    <em style="color: #800000;">Where?</em> <br><br>
                    Here. <br><br>
                    <em style="color: #800000;">So, can I ask what you are still waiting for?</em> &#128579; <br><br> 
                    <a href="register.php" id="register-btn">Get Started</a>
                    <a href="login.php" id="signup-btn"> Log in </a>
                </p>
            </div>
        </section>      
    </main>
    <div class="footer-container">
        <footer>
            <div class="footer-content">
                <a href="index.php"><img src="./images/logo_v1.JPG" alt="Resource Hub Logo"></a>
            </div>
            <div class="footer-links">
                <a href="login.php">Login to my account</a>
                <a href="signup.php">Register for an account</a>
                <a href="https://github.com/Web-Technologies-2021-Team-Zero/team-project" target="_blank">Check Out Project Repository</a>
                <span>&copy; 2021 Team Zero - CS341 Web Technologies</span>
            </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./scripts/index.js"></script>
</body>
</html>