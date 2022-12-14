<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
      <!-- <link rel="stylesheet" href="background_styles.css"> -->
      <link rel="stylesheet" href="./css/styles.css">
      <link rel="stylesheet" href="./css/navbar.css">
      <script src="./js/script.js" defer></script>
      <script src="./js/navbar.js" defer></script>
      <title>Home</title>
    </head>
    <body>
    <nav class="navbar">
        <div><img class="logo" src = "logo.png"></div>
        <div class="logo-text-box">Miras<br><span>Futsal</span></div>
        <a href="#" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
        <div class="navbar-links">
          <ul>
            <li><a href="https://www.facebook.com/mirasfutsal" target="_blank">OUR FACEBOOK</a></li>
            <li><a href="index.php">HOME</a></li>
            <?php
            if (isset($_SESSION['username'])) {
                echo '<li><a href="booking.php">BOOKINGS</a></li>';
            }
?>
            <li><a href="contactus.php">ABOUT US</a></li>
            <?php
if (!isset($_SESSION["username"])) {
    echo '
    <li><a id="login-btn" href="login.php">LOGIN</a></li>
    <li><a id="register-btn" href="register.php">REGISTER</a></li>';
} else {
    echo '<li><a id="logout-btn" href="logout.php">LOGOUT</a></li>';
}
?>
          </ul>
        </div>
      </nav>
    </body>
</html>


