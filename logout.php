<?php
    include __DIR__."\server\config.php";
    session_start();
    unset($_SESSION['fullname']);
    unset($_SESSION['id']);
    unset($_SESSION);
    session_destroy();
    header("Location: $website");
?>