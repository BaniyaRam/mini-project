<?php
include_once '../db.inc.php';
$query = "SELECT * from booking";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cart.css">
    <script src="./js/cart.js"></script>
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
        $message = $status ? "Confirmed" : "Not Confirmed   <button onclick='observe($booking_id)'>Confirm</button>";
        echo "
        <tr>
            <td>$booking_id</td>
            <td>$user_id</td>
            <td>$time</td>
            <td>$date</td>
            <td>$message</td>
            <td>
            <button onclick='cancel($booking_id)' class='show_btn'>Cancel</button>
            </td>
        </tr>";
    }
}else {
    echo "No Booking";
}
?>

    </table>
</body>
</html>


<?php
if(isset($_GET['cancel'])){
    $booking_id = $_GET['cancel'];
    $query = "UPDATE booking SET status=1 where booking_id=$booking_id";
    $result = mysqli_query($conn, $query);

    if($result){
        echo 'done';
        header('Location: admin/booking?done');
    }else {
        echo 'failed';
    }
}