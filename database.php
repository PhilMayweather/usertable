<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "Articles";

$conn = new mysqli($servername, $username, $password, $database);
    if($conn->connect_error){
        die('There was an error:' . $conn->connect_error);
    }
?>