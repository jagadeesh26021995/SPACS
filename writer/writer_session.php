
<?php
    session_start();
    if(!isset($_SESSION["email"])) {
        header("Location: writer_login.php");
        exit();
    }
?>