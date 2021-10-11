<?php
    session_start();
    if(!isset($_SESSION["email"])) {
        header("Location: marketer_login.php");
        exit();
    }
?>