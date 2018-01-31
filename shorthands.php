<?php

 $loggedIn = false;

//  if($loggedIn){
//    echo 'You are logged in';
//  } else{
//    echo 'You are NOT logged in';
//  }

// 
// #Shorthand  conditional if statement

//  echo ($loggedIn) ? 'You ARE logged in' : 'You are NOT logged in';

//  $isRegistered = ($loggedIn == true) ? true : false;
//  echo $isRegistered;

// # Shorthand conditional nested statements
//  $age=8;
//  $score=12;

//  echo 'Your score is: ' .($score >10 ? ($age > 10 ? 'Average':'Exceptional'):($age > 10 ? 'Horriable':'Average'));

?>

<!--Shorthand conditional statement with Embedded in HTML -->

<!-- <div>
  <?php if($loggedIn) { ?>
    <h1>Welcome User</h1>
 <?php } else {?>
  <h1>Welcome Guest</h1>
 <?php } ?>
</div> -->


<div>
  <?php if($loggedIn): ?>
    <h1>Welcome User</h1>
 <?php endif; ?>
</div>
