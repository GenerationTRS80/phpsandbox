<?php

    $user= ['name' => 'Brad', 'email' => 'test@test.com', 'age' => 35];

    // Turn the array into a string
    $user= serialize($user);

    setcookie('user',$user,time() + (86400 * 30));

    $user= unserialize($_COOKIE['user']);

    echo print_r($user). '<br>';
    echo $user['email'];

?>