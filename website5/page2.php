<!-- Check to see if cookies is set -->

<?php 

    setcookie('username','Frank',time() + (86400 * 30));

    // To unset the cookie above you need to set the time in the past
    // Note: -3600 set time back an hour
    setcookie('username','Frank',time() - 3600);

    if(isset($_COOKIE['username'])){
      echo 'User '. $_COOKIE['username'] . ' is set <br>';

    } else {
        echo 'User is not set';

    }


    ?>