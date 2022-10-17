<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
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
    <br><input type="submit" name="registration">
   </form> 
</body>
</html>

<?php
session_start();
include './db.inc.php';
if(isset($_POST['registration'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];

    $query = "INSERT INTO users (username, email, `password`) VALUES ('$username', '$email', '$password', $phone_number)";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "<script>alert('Register Successfull')</script>";
        sleep(3); 
        header('Location: http://localhost/project/index.php');
    } else {
        echo "Failed";
    }


}
?>