<?php if(isset($_POST['submit'])){
        session_start(); // Start the session

    // Session[] variable created below works like a public variables
    $_SESSION['name'] = htmlentities($_POST['name']);
    $_SESSION['email'] = htmlentities($_POST['email']);   

    // Redirect from PHP using the function header(). 
    header('Location: page2.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP Sessions</title>
  <!-- <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css"> -->
</head>
<body>
    <!-- Form begins here -->
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <!-- <input name="name" type="text" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>"> -->
    <input name="name" type="text"  placeholder="Enter Name">

    <!-- NOTE: You can NOT use validation with type=email. To use Filter_var you need for type to be TEXT -->
    <input name="email" type="email"  placeholder="Enter Email Address">

    <!-- Submit button -->
    <input name="submit" type="submit"  placeholder="Submit">       
</body>
</html>