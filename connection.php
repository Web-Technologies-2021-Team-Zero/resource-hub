<?php
$servername = "localhost";
$username = "root";
$password = "@Myvisioninitiative2021";
$database = "resource_hub";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>