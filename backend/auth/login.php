<?php 
    require_once('../config.php');
    if(isset($_POST['pass']) && isset($_POST['username'])) {
        $message = '';
        require_once('../models/User.php');

        $user = User::get_by_username($_POST['username']);

        if($user['usr_pass'] == $_POST['pass']) {
            $_SESSION['id'] = $user['usr_id'];
            $_SESSION['username'] = $user['usr_username'];
            $_SESSION['email'] = $user['usr_email'];
            $_SESSION['firstname'] = $user['usr_firstname'];
            $_SESSION['lastname'] = $user['usr_lastname'];
            $_SESSION['errors'] = NULL;
            header('location: '.$_BASE_URL);
        } else {
            $_SESSION['errors'] = 'Los datos no son correctos';
            header('location: '.$_BASE_URL.'login.php');
        }
    }
?>