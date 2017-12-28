<?php

  // Single line comment
  # Single line comment
  /*
   multi line comment
  */

  #Varialbes
  /*
    - Prefix $
    - Start with only letter or underscore
    - Use only letter, numbers and underscore in variables name
    - Case sensitive
  */

  #DATATYPE
  /*
    - Strings
    - Integers
    - Floats (decimals)
    - booleans
    - Arrays
    - Objects
    - NULL
    - Resource
    - Concatenate Note: use double quote around variables to concatenate or use      period between the varialbes
    - Escape charachter use \ to make a hyphen work as in 'They\'re here'.

  */

  $Output = 'Hello World output';
  $num1 = 4;
  $num2 = 6;
  $sum = $num1+$num2;

  $string1 = 'Hello';
  $string2 = 'World';
  $greeting1 = $string1 . ' and ' . $string2;
  $greeting2 = "$string1 + $string2";

  $string3  = 'They\'re here';
  $string4  = "They\"re here";
  $stringConcatenate = "$string3 and $string4";

  $float1 = 4.4;
  $boolean1 = true;
  // echo $stringConcatenate;
  // echo $sum;

  //Constants -- Note: Case sensitive unless 3rd parameter is set to true
  Define('GREETING','Greeting Everyone nOt Case sEnsitive',true);

  echo Greeting
?>


<!-- <h1><?php 
  echo 'Hello World';
?></h1> -->