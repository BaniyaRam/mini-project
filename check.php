<?php

include_once './db.inc.php';
session_start();

$date = $_GET['date'];
$query = "select * from booking where date='$date'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result)> 0) {
    while ($row=mysqli_fetch_assoc($result)) {
        echo $row['time'].',';
    }
}
