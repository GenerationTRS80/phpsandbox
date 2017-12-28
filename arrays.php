<?php

#Arrays - Variables that hold multiple values

/*
    - Indexed
    - Associate
    - Mult-Dimensional

*/

// Indexed
$testarry = array('Kevin','Jeremy','Sarah');
$numericarray = array(0,1,2);
$cars = ['Honda','Toyota','Ford'];
$cars[3] ='Chevy';
// Add to array
$cars[] = 'bmw';

  // echo $testarry[3];
  // echo $numericarray[0];
  // echo $cars[4];

// Count functions
// $countAry = count($cars);
//  echo $countAry;

// Show whole array
// print_r($cars);

// Show data type in array
// var_dump($cars);

// *** Associative array ***
$people = array('Brad'=> 35, 'Jose'=>32,'William'=>37);
$people['Jill']=42;
// echo $people['Jill'];
// print_r($people);
// var_dump($people);

$ids = [22 => 'Brad',44 =>'Jose', 63 =>'Willam'];
// echo $ids[63];

// *** Multi dimensional arrays ***
$cars = array(
  array('Honda',20,10),
  array('Toyota',30,20),
  array('Ford',23,12)
);

// 2 sets of brackets when echoing out
echo $cars[1][0];
echo $cars[1][2];


?>