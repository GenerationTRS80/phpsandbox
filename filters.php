<?php

  // # Check for posted data
  // # Check to see if the data exists with filter_has_var()
  // # Note: If use use INPUT_GET. You will have a data found response when you cllick on submit
  // if(filter_has_var(INPUT_POST,'data')){

  //     echo 'Data Found';
  // }else{
  //   echo 'NO DATA!';
  // }

  if(filter_has_var(INPUT_POST,'data')){
    if(filter_input(INPUT_POST,'data',FILTER_VALIDATE_EMAIL)){
      echo 'Email is valid';
    } else {
      echo 'Email is NOT Valid';
    } 
  }

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <input type="text" name="data">
  <button type="submit">Submit</button>
</form>