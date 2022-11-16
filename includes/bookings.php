<link rel="stylesheet" href="./css/bookings-made.css">
<script src="./js/bookings-made.js" defer></script>

<?php
    include_once './db.inc.php';
    $query = "SELECT * FROM Booking WHERE date >= CURRENT_DATE ORDER BY date, time";
    $result = mysqli_query($conn, $query);

    echo "<button class='show-bookings'>Show Bookings</button>";

if (mysqli_num_rows($result) > 0){
    echo "<div class='bookings-made'>
        <div class='th'>Bookings till today</div>";

        while($row = mysqli_fetch_assoc($result)){
            $date = $row['date'];
            $time = $row['time'];

            echo "
                <div class='booking-bar'>
                    <div class='td'>$date</div class='td'>
                    <div class='td'>$time</div class='td'>
                </div>";
        }
    echo "</div>";
} else {
    echo "<div class='bookings-made no-bookings'>No bookings made</div>";
}

?>