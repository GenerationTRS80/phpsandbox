<?php

  // # Check for posted data
  // # Check to see if the data exists with filter_has_var()
  // # Note: If use use INPUT_GET. You will have a data found response when you cllick on submit
  // if(filter_has_var(INPUT_POST,'data')){

  //     echo 'Data Found';
  // }else{
  //   echo 'NO DATA!';
  // }


  // if(filter_has_var(INPUT_POST,'data')){
  //     # Put the value that is in POST data and put it into variable
  //     $email= $_POST['data'];
  //     echo "Var exists <br>";

  //   #Check to see if inputted email is valid
  //   if(filter_input(INPUT_POST,'data',FILTER_VALIDATE_EMAIL)){
  //     echo "Inputted Email $email is valid";

  //   } else {
  //     echo "Inputted Email $email is NOT Valid <br><br>";

  //     #Remove illegal character with in an email - FILTER_SANITIZE_EMAIL'
  //     $email = filter_var($email, FILTER_SANITIZE_EMAIL);
     
  //     #Validate the Sannitized email
  //     if(filter_var($email,FILTER_VALIDATE_EMAIL)){
  //       echo "Filtered $email is a valid email <br>";
  //     }else{
  //       echo "Filtered $email is NOT valid email <br>";      
  //     }
  //   } 
  // }

  #FILTER_VALIDATE_BOOLEAN
  #FILTER_VALIDATE_EMAIL
  #FILTER_VALIDATE_FLOAT
  #FILTER_VALIDATE_INT
  #FILTER_VALIDATE_IP
  #FILTER_VALIDATE_REGEXP  
  #FILTER_VALIDATE_UPL 

  #FILTER_SANITIZE_EMAIL
  #FILTER_SANITIZE_ENCODED 
  #FILTER_SANITIZE_NUMBER_FLOAT
  #FILTER_SANITIZE_NUMBER_INT
  #FILTER_SANITIZE_SPECIAL_CHARS  Note: Prevent people from inserting special charachters
  #FILTER_SANITIZE_STRING
  #FILTER_SANITIZE_URL

  // $var = '29';
  // $var = 'test';

  // #Validate Integer
  // if(filter_var($var,FILTER_VALIDATE_INT)){
    
  //   echo "$var is a number";
  // } else{

  //   echo "$var is NOT a number";   
  // }

  // #Remove all letters leave only integers
  // $var = '12324rt23';
  // $var = var_dump(filter_var($var,FILTER_SANITIZE_NUMBER_INT));
  // echo "Only Integers $var <br><br>";

  // $var = '<script>alert(1)</script>';
  // echo $var;
  // //echo "With Scripts $var";
  // $var = filter_var($var,FILTER_SANITIZE_SPECIAL_CHARS);
  
  // #Filter Array
  //   $filters = array(
  //     "data" => FILTER_VALIDATE_EMAIL,
  //     "data2" => array(
  //       "filter" => FILTER_VALIDATE_INT,
  //       "options" => array(
  //         "min_range" => 1,
  //         "max_range" => 100
  //       )
  //     )
  //   );

  //   print_r(filter_input_array(INPUT_POST,$filters));

 # Validate array/fields with filters
  $arr = array(
    "name" => "Phil Seiersenn",
    "age" => "153",
    "email" => "phil@pseiersen..com"
  );

  #Validation on input fields
  $filters = array(
    "name" => array(
      "filter" => FILTER_CALLBACK,
      "options" => "ucwords"  //Capilize first letter of everyword
    ),
    "age" => array(
      "filter" => FILTER_VALIDATE_INT,
      "options" => array(
        "min_range" => 1,
        "max_range" => 120
      )
    ),
    "email" => FILTER_VALIDATE_EMAIL
  );

  print_r(filter_var_array($arr,$filters));

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <input type="text" name="data">
  <br><br>
  <input type="text" name="data2">
  <button type="submit">Submit</button>
</form>