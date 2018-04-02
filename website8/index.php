<?php
  // #General error checking in PHP
  // error_reporting(E_ALL); 
  // ini_set('display_errors', 1);

  // Called from connectDB.php
  require('config/connectDB.php');

  $query= 'Select * FROM posts';

  // Get Results
  # This is like open recordset in ADODB wth $conn being the connection object coming from require()
  $result = mysqli_query($conn,$query);

  // >> Fetch Data <<
  #NOTE: MYSQLI_ASSOC is an associative arry
  $posts = mysqli_fetch_all($result,MYSQLI_ASSOC);

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
      <h1>Posts</h1>
        <?php foreach($posts as $post) : ?>
          <div class="well">
            <h3><?php echo $post['title']; ?></h3>
            <small>Created on <?php echo $post['created_at']; ?> by
            <?php echo $post['author']; ?></small>
            <p><?php echo $post['body'];?></p>
            <!-- bootstrap class of btn btn-btn-default -->
            <a class="btn btn-default" href="post.php?id=<?php echo $post['posts_id']; ?>">Read More</a>
          </div>
        <?php endforeach; ?>
      </div>
    </body>
  </html>

  