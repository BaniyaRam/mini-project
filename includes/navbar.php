<?
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="background_styles.css">
      <link rel="stylesheet" href="./css/styles.css">
      <script src="./js/script.js" defer></script>
      <script src="./js/navbar.js" defer></script>
      <title>Responsive Navbar</title>
    </head>
    <body>
      <nav class="navbar">
        <div class="brand-title">MIRAS FUTSAL</div>
        <a href="#" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
        <div class="navbar-links">
          <ul>
            <li><a href="https://www.facebook.com/mirasfutsal" target="_blank">OUR FACEBOOK</a></li>
            <li><a href="#">HOME</a></li>
            <li><a href="booking.php">BOOKINGS</a></li>
            
            <li><a href="#">LIVE EVENTS</a></li>
            <li><a href="contact-us.php">CONTACT US</a></li>
            <?php
            if(!isset($_SESSION["login"])){
              echo '<li><a id="login-btn" href="login.php">LOGIN</a></li>';
            }else {
              echo '<li><a id="logout-btn" href="logout.php">LOGOUT</a></li>';
            }
            ?>
          </ul>
        </div>
      </nav>
    </body>
</html>
