<?php
    require_once('config/config.php');
    require_once(__DIR__.'/models/User.php');
    
    $newUser = new User("bbelmar", "boris123");
    $newUser->create();

    $users = User::get_all();

    foreach($users as $row) {
        foreach($row as $key => $value) {
            echo $key." : ".$value." ";
        }
        echo "<br>";
    }
?>