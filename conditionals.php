<?php

  #CONDITIONALS

  /* Different types of comparison operators
      ==  Match values
      === Match value and data type
      <   Less than
      >   Greater than
      <=  Greater than equal too
      =>  Less than equal too
      !=
      !==

  */

  /*
    $num = 6;
    // $num ='5';

    if($num ==5){
    // if($num!=5){
      // if($num===5){
      echo '5 passed';
      } else if ($num ==6){
          echo '6 passed';
      }
     else{
      echo 'Does NOT pass';
    }

    */

    // # *** Nest if statements ***

    // $num = 1;

    // if($num >4){
    //   if($num <10){
    //     echo "$num passed";
    //   }else{
    //     echo "$num is too large DID NOT PASS";
    //   }
    // }else{
    //   echo "$num is too LOW did not pass";
    // }

    /*
      LOGICAL Operators

      and &&
      or ||
      xor

    */


    //   $num = 11;
    //   $num = 2;  

    //   $num = 11;
    // // # Example of AND
    // // if($num >4 and  $num <10){
    // // # Example of OR
    // //   if($num >4 ||  $num <10){
    //  # Example of XOR I has to be only 1 is true but not both being true 
    // if($num >4 XOR $num <10){       
    //   echo "$num passed";     
    // } else {
    //   echo "$num failed";
    // }

    # *** SWITCHES

    $favColor = 'black';

    switch($favColor){
      case 'red':
        echo 'Fav color is red';
        break;
      case 'blue':
        echo 'Fav color is blue';
        break;
      case 'green':
        echo 'Fav color is green';
        break;
      default:
        echo 'Fav color is something else';
        break;
    }

?>