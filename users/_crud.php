<?php
    require_once('../backend/config.php');
    if(!isset($_SESSION['id'])) {
        header('location: '.$_BASE_URL.'login.php');
    }
    require_once('../backend/models/User.php');
?>