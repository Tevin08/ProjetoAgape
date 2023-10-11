<?php
    session_start();
    session_destroy();
    header('location: ../logindoador.php');
    exit;
?>