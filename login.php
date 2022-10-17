<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js/login.js" defer></script>
    <title>Login</title>
</head>
<body>
    <div class="login">
        <form method="post">
        <div>
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
        <input type="submit" name="login_submit">
        </form>
    </div>
</body>
</html>


<?php
session_start();
include_once 'db.inc.php';

if(isset($_POST['login_submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users where email='$email';";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        while($row=mysqli_fetch_assoc($result)){
            if(($row['password']) == $password){
                $_SESSION['email'] = $row['email'];
                $_SESSION['username'] = $row['username'];
                echo '<script>alert("Login Successfully")</script>';
                sleep(2);
                header('Location: http://localhost/project/index.php');
            }else {
                echo "Incorrect password";
            }
        }
    }else {
        echo "user not found";
    }


}
?>