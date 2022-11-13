<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './vendor/PHPMailer/src/Exception.php';
require './vendor/PHPMailer/src/PHPMailer.php';
require './vendor/PHPMailer/src/SMTP.php';

?>
<link rel="stylesheet" href="./css/booking.css">
<link rel="stylesheet" href="./css/styles.css">
<script src='./js/booking.js' defer></script>
<?php
include_once './db.inc.php';
session_start();
// include './includes/navbar.php';
if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
    echo "
    <button> 
    <a class='show_btn' href='cart.php'>Show your booking</a>
    </button>";
    ?>
<div class="field-container">
<br>
    <form method="post">
        <label>Date<br><br><input type="date" name="date"
            min="<?php echo date("Y-m-d"); ?>" 
            class="selectDate" onchange="seeTime(this)">
        </label><br>
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
    $time = $_POST['bookingTime'];
    $user_id = $_SESSION['id'];
    foreach ($time as $t){
        $query = "INSERT INTO booking (time, date, user_id) VALUES ('$t', '$date', $user_id);";
        $result = mysqli_query($conn, $query);
    }
    if ($result) {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'samirparajuli2000@gmail.com';
        $mail->Password   = 'gukwmqubblvbhywb';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;
        $mail->setFrom('samirparajuli2000@gmail.com');
        $mail->addAddress('subasbaniya16@gmail.com');
        $mail->isHTML(true);
        $mail->Subject = "Booking Register";
        $times = implode(",", $time);
        $mail->Body = "Hello, Subash
                    USERID $user_id
                    Booked Time: $times";
        try {
            $mail->send();
            echo "<script>alert('Booking successfull');
            window.location.href = 'index.php'
            </script>";
        } catch (Exception $e) {
            echo "<script>alert('Something went wrong. Please try again');</script>";
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
    } else {
        echo "<script>alert('Failed')</script>";
    }
} ?>
