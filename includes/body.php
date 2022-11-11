<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <?php
        if(isset($_SESSION['id']) && isset($_SESSION['username'])){
            $username = $_SESSION['username'];
            $id = $_SESSION['id'];
            echo "<span class='name'>Welcome $username,</span>";
        } 
        ?>
    </main>
    <div class="gallery">
        <div class="title">
            <h1>Our Gallery</h1>
        </div>
        <div class="container">
            <figure>
                <img src="./assests/IMG_5710.JPG" alt="photo">
            </figure>
            <figure>
                <img src="./assests/IMG_5726.JPG" alt="photo">
            </figure>
            <figure>
                <img src="./assests/IMG_5726.JPG" alt="photo">
            </figure>
            <figure>
                <img src="./assests/IMG_5726.JPG" alt="photo">
            </figure>
            <figure>
                <img src="./assests/IMG_5726.JPG" alt="photo">
            </figure>
        </div>
    </div>
</body>
</html>