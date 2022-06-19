<?php
session_start();
if(isset($_SESSION['username'])){
    echo '<h1> welcom'.$_SESSION['username'].'</h1>';
    echo '<a href="logout.php">logout</a>';
}else{
    echo '<h1> welcome guest <h1>';
    echo '<a href="http://localhost:81/php-crash/13_sessions.php">home</a>';
}