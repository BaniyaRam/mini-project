<?php
include_once './db.inc.php';
session_start();

if(isset($_GET['booking_id'])){
    $id = $_SESSION['id'];
    $booking_id = $_GET['booking_id'];
    $query = "Delete from booking where booking_id=$booking_id and user_id=$id";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "done";
    }else {
        echo "$query";
    }
    

}