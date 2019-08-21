<?php
    require_once('../backend/config.php');
    if(!isset($_SESSION['id']) || !isset($_GET['action'])|| $_SESSION['level'] != 2) {
        header('location: ./');
    }
    require_once('../backend/models/User.php');

    switch($_GET['action']) {
        case 'create':
            $hash =  password_hash($_POST['pass'], PASSWORD_DEFAULT, ['cost' => 10]);
            $new_user = new User($_POST['username'], $_POST['email'], $hash, $_POST['firstname'], $_POST['lastname']);
            $new_user->create();
            $_SESSION['success'] = 'Usuario creado con éxito';
            header('location: ./');
            break;
        case 'edit':
            User::update_by_id($_GET['id'], $_POST['email'], $_POST['firstname'], $_POST['lastname']);
            if($_POST['pass'] != "") {
                $hash =  password_hash($_POST['pass'], PASSWORD_DEFAULT, ['cost' => 10]);
                User::update_password($_GET['id'], $hash);
            }
            header('location: ./');
            break;
        case 'delete':
            User::delete_by_id($_GET['id']);
            header('location: ./');
            break;
        default:
            $_SESSION['error'] = 'Acción inválida';
            header('location: ./');
            break;
    }
    
?>