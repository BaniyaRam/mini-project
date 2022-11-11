
<?php
if(isset($_SESSION['id']) && isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        $id = $_SESSION['id'];
        echo "<div class='remove'><span class='m1'>Welcome</span><span class='m2'>$username</span></div>";
} else {
}
    ?>
    <body>
        <div class="background-body">
            <img class="kicks" src="./assests/bimg1.jpg" />
        </div>  
    </body>
    <?php
?>
