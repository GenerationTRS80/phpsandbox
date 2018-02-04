<?php 

    if(isset($_POST['submit'])){

      // Get username from the form
      
      $username = htmlentities($_POST['username']);

      // $username = 'test';

      // Third argument for the cookie is experation
      setcookie('username', $username, time()+3600);

      // Redirect from PHP using the function header(). 
      header('Location: page2.php');  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP Cookies</title>
  <!-- <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css"> -->
</head>
<body>
    <!-- Form begins here -->
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

    <input name="username" type="text"  placeholder="Enter User Name">

    <!-- Submit button -->
    <input name="submit" type="submit"  placeholder="Submit"> 
    <br>
    <h1><?php echo $username ?></h1>    
</body>
</html>