<?php 
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "futsal";

$conn = new mysqli($severname, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

echo "Successfully connected";

?>