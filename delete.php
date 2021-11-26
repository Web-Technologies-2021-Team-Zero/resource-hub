<?php
    require __DIR__ . "./database/controllers/input_controller.php";
    
    $username = $_GET["user"]; 

    if(isset($_POST['confirmation'])){
        $isConfirmed = $_POST['confirmation'];
        if($isConfirmed == "yes") {
            $id = $_GET['itemToDelete'];
            $location_array = getLocation($id)->fetch_array(MYSQLI_ASSOC);; 
            $location = $location_array['location'];
            if(unlink($location)){                    
                $result = deleteFile($id); 
                if ($result) {
                    echo "Delete successful"; 
                } else {
                    echo "Delete failed";
                }
                header("location: ./myFiles.php?user=$username");
            }
        } else {
            header("location: ./myFiles.php?user=$username");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./styles/upload.css">
    <style>
        
    </style>
    <title>Resource Hub | Team Zero </title>
</head>
<body>

    <div class="container">
        <form   action="" method="POST" enctype="multipart/form-data" onsubmit="return validateForm(event);">
           <h1 id="icon"><span>Confirm Delete</span></h1>	
            <div class="form" id="form">
                <label for="confirmdelete">Are you sure you want to delete?</label>
                <select id="confirmdelete" name="confirmation">
                    <option value="">Choose option</option>
                    <option value="yes">yes</option>
                    <option value="no">no</option>
                </select>
                <small id='success'></small>
                <input type="submit" id='submitBtn' name="submit" value="Proceed">
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>
</html>