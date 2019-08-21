<?php
    require_once('../config.php');
    if(!isset($_SESSION['id'])) {
        header('location: '.$_BASE_URL);
    }
    session_destroy();
    header('location: '.$_BASE_URL.'login.php');
?>