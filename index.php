<?php

include_once './includes/navbar.php';

include_once './includes/body.php';

?>

<div class="login">
<form method="post">
<div>
    <div class="login-close close-btn">X</div>
    <label for="email">Email</label>
    <input type="text" name="email" required placeholder="Enter Email" >
</div><br>
<div>
    <label for="password">Password</label>
    <input type="password" id="password" name="password" required placeholder="Enter password" >
</div>
<div>
    <input type="checkbox" id="check_btn" name="check_btn">Show Password
</div>
<input  type="submit" name="login_submit">
</form>
</div>


<div class="register">
    <div class="reg-close close-btn">X</div>
<form method="post">
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter Email" required>
    </div>
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Enter username" required >
    </div>
    <div>
        <label for="password">Phone Number</label>
        <input type="text" name="phone_number" maxlength='10' placeholder="Enter phone number" required>        
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter password" required>        
    </div>
    <div>
        <label for="re_password">Repeat Password</label>
        <input type="password" name="re_password" placeholder="Enter password">
    </div>
    <br><input type="submit" name="registration" value="Register">
   </form>
</div>

<script src="./js/popup.js"></script>