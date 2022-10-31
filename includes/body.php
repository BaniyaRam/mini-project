<?php
if(isset($_SESSION['id']) && isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        $id = $_SESSION['id'];
        echo "<div class='remove'><span class='m1'>Welcome</span><span class='m2'>$username</span></div>";
} else {
}
    ?>
        <div class="slider">
            <a href="#"><img class="img1 images" src="./includes/image1.jpg"></a>
            <a href="#"><img class="img2 images" src="./includes/image2.jpg"></a>
            <a href="#"><img class="img3 images" src="./includes/image3.jpg"></a>
            <a href="#"><img class="img4 images" src="./includes/image4.jpg"></a>
            <a href="#"><img class="img5 images" src="./includes/image5.jpg"></a>
        </div>
    <?php
?>
