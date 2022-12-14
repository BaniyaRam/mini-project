<?php
include_once './db.inc.php';
include './includes/navbar.php';
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
    <script src="./js/cart.js"></script>
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Booking ID</th>
            <th>Time</th>
            <th>Date</th>
            <th>Status</th>
            <th>Cancel</th>
        </tr>
        <?php
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $booking_id = $row['booking_id'];
        $time = $row['time'];
        $date = $row['date'];
        $status = $row['status'];
        $message = $status ? 'Confirmed' : 'Not Confirmed';
        echo "
        <tr>
            <td>$booking_id</td>
            <td>$time</td>
            <td>$date</td>
            <td>$message</td>
            <td>";
            if(!$status){
                echo "<button onclick='cancel($booking_id)' class='show_btn'>Cancel</button>";
            }else {
                echo "<button 'class='show_btn' disabled>Cancel</button>";
            }
            echo "</td>
        </tr>";
    }
}else {
    echo "No Booking";
}
?>

    </table>
</body>
</html>