<?php
  #LOOPS - Execute code set number of times

  /*

    For 
    While
    Do..While
    Foreach

    */

    # For Loop
    # @params - init, conditions, inc

    // for($i=5;$i<10;$i++)
    // {
    //   // Concatenate with double quotes
    //   echo "Number $i";
    //   // Add line breac with HTML line break
    //   echo '<br>';
    // }

    # While Loop
    # @params - condition
    # Note: Setting the Variable is set outside the loop

    // $i =0;

    // while($i <10){
    //   echo $i;
    //   echo '<br>';
    //   //Increment in the loop
    //   $i++;
    // }

    // # Do - While
    // # @params - conditions

    // $i = 0;

    // do{
    //     echo "Do $i";
    //     echo '<br>';
    //     $i++;
    // }

    // // Set the condition with the while
    // while($i<10);

    // # **** For each loop for arrays
    // $people = array('Brad','Jose','William');

    // foreach($people as $person){

    //   echo "For each $person";
    //   echo '<br>';
    // }

    $people = array('Brad'=> 'brad@gmail.com','Jose'=> 'jose@gmail.com','William' => 'william@gmail.com');

    foreach($people as $person => $email){

      echo "$person: $email";
      echo '<br>';

    }


?>