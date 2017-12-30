<?php
  
  /*
  *** USING SUPERGLOBALS ****
  Superglobals — Superglobals are built-in variables that are always available in all scopes
  */

  // GET is within URL POST uses the header

  //Check to see if the name exists
  if(isset($_GET['name'])){
    // htmlentities - removes the power of the openning and close HTML brackets. This is done for security purposes
    $name1 = htmlentities($_GET['name']);   
    $email1 = htmlentities($_GET['email']);

    // echo "Name = $name1 <br> Email = $email1";
    // Print out the array
    // print_r($_GET);
  }

  // // Use POST 
  // if(isset($_POST['name'])){
  //   // htmlentities - removes the power of the openning and close HTML brackets. This is done for security purposes
  //   $name1 = htmlentities($_POST['name']);   
  //   $email1 = htmlentities($_POST['email']);

  //   echo "Name = $name1 <br> Email = $email1<br>";
  //   // Print out the array
  //    print_r($_POST);
  // }

  // Use REQUEST 
  // NOTE: REQUEST will work with POST or GET

  // if(isset($_REQUEST['name'])){
  //   // htmlentities - removes the power of the openning and close HTML brackets. This is done for security purposes
  //   $name1 = htmlentities($_REQUEST['name']);   
  //   $email1 = htmlentities($_REQUEST['email']);

  //   echo "Name = $name1 <br> Email = $email1<br>";
  //   // Print out the array
  //    print_r($_REQUEST);
  // } 

  // // Another SUPERGLOBAL
  // echo $_SERVER['QUERY_STRING'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Website</title>
</head>
<body>
  <form method="GET" action="get_post.php">
    <div>
      <label>Name</label><br>
      <input type="text" name="name">
    </div>
    <div>
      <label>Email</label><br>
      <input type="text" name="email">
    </div>
    <input type="submit" value="Submit">
  </form>
  <ul>
    <li>
      <a href="get_post php?name=Brad">brad</a>
    </li>
    <li>
      <a href="get_post php?name=Steve">Steve</a>
    </li>
  </ul>
  <h1><?php echo "{$name1}'s Profile"; ?><h1>
</body>
</html>