<?php
if(isset($_SESSION['id']) && isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        $id = $_SESSION['id'];
        echo "Welcome, $username";
}else {
    echo "Login first";
}