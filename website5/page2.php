<!-- Check to see if cookies is set -->

<?php 

    setcookie('username','Frank',time() + (86400 * 30));

    // // To unset or Delete the cookie above you need to set the time in the past
    // // Note: -3600 set time back an hour
    // setcookie('username','Frank',time() - 3600);

    // Check for set cookies
    $countK=count($_COOKIE);

    if($countk=1){
        echo 'There is ' .count($_COOKIE). ' cookie saved <br>';

    } elseif($countK>0) {
        echo 'There is ' .count($_COOKIE). ' cookie saved <br>';

    } else {
        echo 'There are no cookies saved <br>';
    }

    
    if(isset($_COOKIE['username'])){
      echo 'User '. $_COOKIE['username'] . ' is set <br>';

    } else {
        echo 'User is not set';

    }


    ?>