<?php
include_once './db.inc.php';
session_start();
$id = $_SESSION['id'];
$query = "SELECT * from booking where user_id=$id";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/cart.css">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Booking ID</th>
            <th>UserId</th>
            <th>Time</th>
            <th>Date</th>
            <th>Status</th>
            <th>Cancel</th>
        </tr>
        <?php
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $booking_id = $row['booking_id'];
        $user_id = $row['user_id'];
        $time = $row['time'];
        $date = $row['date'];
        $status = $row['status'];
        echo "
        <tr>
            <td>$booking_id</td>
            <td>$user_id</td>
            <td>$time</td>
            <td>$date</td>
            <td>$status</td>
            <td><a href='cancel.php'>Cancel</a></td>
        </tr>";
    }
}else {
    echo "error";
}
?>

    </table>
</body>
</html>