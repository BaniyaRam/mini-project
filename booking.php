<link rel="stylesheet" href="./css/booking.css">
<script src='./js/booking.js' defer></script>
<?php
include_once './db.inc.php';
include './includes/navbar.php';
if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
    echo "
    <button> 
    <a class='show_btn' href='cart.php'>Show your booking</a>
    </button>";
    ?>
<div class="field-container">
<br><br>
    <form method="post">
        <label>Date<br><input type="date" name="date" 
            min="<?php echo date("Y-m-d"); ?>" 
            class="selectDate" onchange="seeTime(this)">
        </label><br><br>
        <label>Time</label><br>
        <div class="bookingTimes">
        <?php
            date_default_timezone_set('Asia/Kathmandu');
    $open_time = strtotime("6:00");
    $close_time = strtotime("19:00");
    $now = time();
    for ($i=$open_time; $i<$close_time; $i+=3600) {
        $schedule_time = date('H:i', $i)." - ".date('H:i', $i+3600);
        // if( $i < $now) continue;
        echo "<label class='btlabel' for='bookingTime'>
                <input type='checkbox' name='bookingTime[]' class='btbox' value='$schedule_time'/>
                    $schedule_time
              </label>";
    }
    ?>

        </div>
        <br>
        <input type="submit" value="Book Now" id="book_btn" name="book_btn" disabled="disabled">
        </form>
    </div>
    <?php 
    } else {
        header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
    }

if (isset($_POST['book_btn'])) {
    $date = $_POST['date'];
    $time = implode(",", $_POST['bookingTime']);
    $user_id = $_SESSION['id'];

    $query = "INSERT INTO booking (time, date, user_id) VALUES ('$time', '$date', $user_id);";
    print_r($query);

    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script>
        alert('Booking success')
        window.location.href = 'index.php'
        </script>";
    } else {
        echo "<script>alert('Failed')</script>";
    }
} ?>
