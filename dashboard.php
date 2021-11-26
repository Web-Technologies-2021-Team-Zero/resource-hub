<?php require __DIR__ . "./database/controllers/input_controller.php"; ?> <?php 

    function displayData($row) {
        $id = $row[0];
        echo "<tr>"; 
        echo "<td>"; 
        echo $row[1]; 
        echo "</td>"; 
        echo "<td>"; 
        echo $row[2]; 
        echo "</td>"; 
        echo "<td>"; 
        echo $row[3]; 
        echo "</td>"; 
        echo "<td>"; 
        echo "<a href='download.php?id=$id' class='btn-tertiary'>Download</a>"; 
        echo "</td>"; 
        echo "</tr>";
    }

    if(isset($_GET['user'])) {
        $username = $_GET['user'];
    }

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
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="./styles/dashboard.css" rel="stylesheet">

    <title>Resource Hub | Team Zero</title>
    
</head>
<!-- <body onload="test()"> -->
<body>
    <nav class="nav-bar">
        <img src="./images/logo_v1.JPG" alt="Resource hub logo" style="height:100px">
        <a href="login.php" class="btn-logout">Logout</a>
    </nav>
    <div class="main-content">
        <div class="wrapper">
            <h1>All Files</h1>
            <div>
                <div class="btn-group">
                    <div >
                        <form method="post" action="">
                            <select name="course" id="selectcourse" class="btn btn-secondary btn-sm dropdown-toggle" onchange="this.form.submit()">
                                <option value="">Browse Courses</option>
                                <option value="View all courses">View all courses</option>
                                <option value="Embedded Systems">Embedded Systems</option>
                                <option value="Web Tech">Web Technologies</option>
                                <option value="Data Structures and Algorithms">Data Structures and Algorithms</option>
                                <option value="System Dynamics">System Dynamics</option>
                                <option value="FDE">FDE</option>
                            </select>
                        </form>
                    </div>
                </div>
                <div class="up-btns">
                    <?php echo "<a href='upload.php?user=$username' class='btn-primary'>Upload</a>"; ?>
                    <?php echo "<a href='myFiles.php?user=$username' class='btn-primary'>My Files</a>"; ?>
                </div>
            </div>
            <br><br>
            <table id="display" style="width: 100%;">
                <tr>
                    <th>File name</th>
                    <th>Uploaded by</th>
                    <th>Course</th>
                    <th>Actions</th>
                </tr>
                <?php 
                    if (isset($_POST["course"])) {
                        $course = $_POST["course"];
                        $results = getByCourse($course); 
                        if ($results) {
                            $row = $results->fetch_array(MYSQLI_NUM); 
                            while($row) {
                                displayData($row); 
                                $row = $results->fetch_array(MYSQLI_NUM);
                            }
                        } else {
                            echo "Not working";
                        }  
                    }
                ?>
            </table>
            <div class="clearfix"></div>
        </div>
    </div>        
    <div style="clear: both;"></div>
    <br> 
    <br>
    <div class="footer">
        <div class="wrapper">
            <p class="text-center"> &copy; 2021 All rights reserved. Resource Study Hub. Developed by - <a href="https://github.com/Web-Technologies-2021-Team-Zero/team-project" target="_blank" class="footer-link">Team Zero</a> </p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./scripts/mainpage.js"></script>
</body>
</html>