<?php
require __DIR__ . "./database/controllers/input_controller.php";
require __DIR__ . "./connection.php";



if (isset($_GET['id'])) {

    $id = $_GET['id'];

   $location_array = getLocation($id)->fetch_array(MYSQLI_ASSOC);; 
    $location = $location_array['location'];

    if (file_exists($location)) {

        header('Content-Description: File Transfer');

        header('Content-Type: application/octet-stream');

        header('Content-Disposition: attachment; filename=' . basename($location));

        header('Expires: 0');

        header('Cache-Control: must-revalidate');

        header('Pragma: public');

        header('Content-Length: ' . filesize($location));

        readfile($location);

        $newCount = $file['downloads'] + 1;

        $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";

        mysqli_query($conn, $updateQuery);

        exit;

    }

 

}