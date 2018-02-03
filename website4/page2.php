<?php 
    session_start();

    $name = $_SESSION['name'];
    $email = $_SESSION['email'];    

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP Sessions</title>
  <!-- <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css"> -->
</head>
<body>
  <h5>Thanks you <?php echo $name; ?>, You have subscribed with email <?php echo $email; ?></h5> 
  <a href="page3.php">Go to page 3</a> 
</body>
</html>