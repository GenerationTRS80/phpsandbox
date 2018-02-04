<?php 

  if(isset($_POST['submit'])){
    session_start(); // Start the session


    // Session[] variable created below works like a public variables
    $_SESSION['name'] = htmlentities($_POST['name']);
    $_SESSION['email'] = htmlentities($_POST['email']);   

    /*
    // Redirect from PHP
    header('Location: page2.php');
    */
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP Sessions</title>
  <!-- <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css"> -->
</head>
<body>
         
</body>
</html>