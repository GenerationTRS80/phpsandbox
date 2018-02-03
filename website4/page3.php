<?php 
    session_start();

    // print_r() will show the array
    print_r($_SESSION);


    //  Use isset to check for empty session, if empty then enter a value of guest
    $name = isset($_SESSION['name']) ? $_SESSION['name']: 'Guest';
    // $name = $_SESSION['name'];

    $name = isset($_SESSION['email']) ? $_SESSION['email']: 'Not Subscribed';
   // $email = $_SESSION['email'];  


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP Sessions</title>
  <!-- <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css"> -->
</head>
<body>
  <h1>Hello <?php echo $name; ?> </h1> 

</body>
</html>