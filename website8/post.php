<?php
  #General error checking in PHP
  error_reporting(E_ALL); 
  ini_set('display_errors', 1);

  // Called from connectDB.php
  require('config/connectDB.php');

  // Initialize variable
  $id=0;

  // get ID  << Get 
  # Remove dangerous charachter  mysqli_real_escape_string()
  if (isset($_GET['posts_id']))
  {
    $id=mysqli_real_escape_string($conn,$_GET['posts_id']);
  }

  // Added Where clause for post.php
  $query= 'Select * FROM posts WHERE id='.$id;

  // Get Results
  # This is like open recordset in ADODB wth $conn being the connection object coming from require()
  $result = mysqli_query($conn,$query);

  // >> Fetch Data <<
  #NOTE: MYSQLI_ASSOC is an associative arry
  #$posts = mysqli_fetch_all($result,MYSQLI_ASSOC);  <--- This line is used in index.php

  #Turn post into an associative arry
  $posts = mysqli_fetch_assoc($result);

  // # Show what is in $posts object as string
  // var_dump($posts);  

  // Free results - Close recordset
  mysqli_free_result($result);

  // Close connection
  mysqli_close($conn);

  ?>

  <!DOCTYPE html>
    <html>
      <head>
        <title>PHP mySQL Blog</title>
        <!-- Correct reference to bootswatch framework Cerulean -->
        <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
      </head>
    <body>
      <div class="container">
      <h1><?php echo $posts['title']; ?></h1>
        <small>Created on <?php echo $posts['created_at']; ?> by
        <?php echo $posts['author']; ?></small>
        <p><?php echo $posts['body'];?></p>
      </div>
    </body>
  </html>
