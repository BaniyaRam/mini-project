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
            <input type="checkbox" name="bookingTime[]" class="btbox bt6" value='6-7am'>
            <label class="btlabel" >6:00am - 7:00am</label>
            <input type="checkbox" name="bookingTime[]" class="btbox bt7" value='7-8am'>
            <label class="btlabel">7:00am - 8:00am</label>
            <input type="checkbox" name="bookingTime[]" class="btbox bt8" value='8-9am'>
            <label class="btlabel">8:00am - 9:00am</label>
            <input type="checkbox" name="bookingTime[]" class="btbox bt9" value='9-10am'>
            <label class="btlabel">9:00am - 10:00am</label>
            <input type="checkbox" name="bookingTime[]" class="btbox bt9" value='10-11am'>
            <label class="btlabel">10:00am - 11:00am</label>
             <input type="checkbox" name="bookingTime[]" class="btbox bt9" value='11-12pm'>
            <label class="btlabel">11:00am - 12:00pm</label>
             <input type="checkbox" name="bookingTime[]" class="btbox bt9" value='12-1pm'>
            <label class="btlabel">12:00pm - 1:00pm</label><br><br>
             <input type="checkbox" name="bookingTime[]" class="btbox bt9" value='1-2pm'>
            <label class="btlabel">1:00pm - 2:00pm</label>
             <input type="checkbox" name="bookingTime[]" class="btbox bt9" value='2-3pm'>
            <label class="btlabel">2:00pm - 3:00pm</label>
            <input type="checkbox" name="bookingTime[]" class="btbox bt9" value='3-4pm'>
            <label class="btlabel">3:00pm - 4:00pm</label>
            <input type="checkbox" name="bookingTime[]" class="btbox bt9" value='4-5pm'>
            <label class="btlabel">4:00pm - 5:00pm</label>
            <input type="checkbox" name="bookingTime[]" class="btbox bt9" value='5-6pm'>
            <label class="btlabel">5:00pm - 6:00pm</label>
        </div>
        <br>
<input type="submit" value="Book Now" id="book_btn" name="book_btn" disabled="disabled">
        </form>
    </div>
    <?php } else {
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
