<?php
session_start();
require_once './db.inc.php';
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];

    if(empty($username) && empty($password) && empty($email) && empty($phone_number) && empty($repassword)){
        echo '<pre style="color:red">please fill the form</pre>';
    } else {
        $hashed_password = md5($password);
        $query = "INSERT INTO users (username, email, `password`, phone_number) VALUES ('$username', '$email', '$hashed_password', '$phone_number');";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "<script>alert('Register Successfull')</script>";
            sleep(3);
            header('Location: index.php');
        } else {
            echo "Failed";
        }
    }
}
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="vh-100 d-flex justify-content-center align-items-center ">
            <div class="col-md-5 p-5 shadow-sm border rounded-5 border-primary bg-white">
                <h2 class="text-center mb-4 text-primary">Register Form</h2>
                <form method="POST" class='registerForm' action='register.php'>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="email form-control border border-primary" id="InputEmail" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputusername" class="form-label">Username</label>
                        <input type="text" name="username" class="username form-control border border-primary" id="inputusername" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputphone" class="form-label">Phone Number</label>
                        <input type="text" maxlength='10' pattern="[0-9]{10}" name="phone_number" class="phone form-control border border-primary" id="inputphone" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputpassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="password form-control border border-primary" id="inputpassword1" required>
                    </div>

                    <div class="mb-3">
                        <label for="inputpassword2" class="form-label">Re Passowrd</label>
                        <input type="password" name="repassword" class="repassword form-control border border-primary" id="inputpassword2" required>
                    </div>

                    <div class="d-grid">
                        <input value='Register' class="register btn btn-primary" type="submit" name="register"/>
                    </div>
                </form>
                <div class="mt-3">
                    <p class="mb-0  text-center">Have an account? <a href="login.php"
                            class="text-primary fw-bold">Login</a></p>
                </div>
            </div>
        </div>
    </body>

</html>