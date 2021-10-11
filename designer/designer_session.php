<?php
    session_start();
    if(!isset($_SESSION["email"])) {
        header("Location: designer_login.php");
        exit();
    }
?>