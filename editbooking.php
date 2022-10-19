<?php
include_once './includes/db.inc.php';
session_start();


$id = $_SESSION['id'];
$query = "Delete from booking where id=$id";
$result = mysqli_query($conn, $query);
if()


?>