<?php

  # Function - A block of code that can be recalled repleatedly

  /*
    Camel Case - MyFunction()
    Lower Case - my_function()
    Pascal Case - MyFunction()

  */

  // function simpleFunction(){
  //   echo 'Hello World';
  // }

  // // Call the function to run the code
  // simpleFunction();

  // Function with parameters
  function sayHello($name='Hello World'){
    echo "Hello $name<br>";
  }

  // // call function using parameter
  // sayHello('Frank');
  // sayHello();

  // // Return value
  // function addNumbers($num1,$num2){
  //   $total=$num1+$num2;
  //   return "Total Value = $total";
  // }

  // $returnTotal = addNumbers(4,6);

  // echo $returnTotal;

  // Passing a variable by reference
  $myNum = 10;

  function addFive($num){
    // Add five to the number var
    $num += 5;
  }

  // Pass values by reference using the apersand &
  function addTen(&$num){
    $num += 10;
  }

  addFive($myNum);

  echo "Value: $myNum<br>";

  addTen($myNum);

  echo "Value: $myNum<br>";

?>