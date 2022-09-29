<?php
$servername = "localhost";
$database = "injection";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, $database);

if($conn->error){
    die("Connection failed: ".$conn->error);
}
?>