<?php
  // #General error checking in PHP
  // error_reporting(E_ALL); 
  // ini_set('display_errors', 1);

  // Called from connectDB.php
  require('config/config.php'); 
  require('config/connectDB.php');

  $query= 'Select * FROM posts ORDER BY created_at DESC';

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

    <?php include('inc/header.php'); ?>
      <div class="container">
        <h1>Posts</h1><br>
        <!-- Begin foreach loop -->
        <?php foreach($posts as $post) : ?>
          <div class="col-md-6" style="background-color: #f2f2f2">
            <h3><?php echo $post['title']; ?></h3>
            <small>Created on <?php echo $post['created_at']; ?> by
            <?php echo $post['author']; ?></small>
            <p><?php echo $post['body'];?></p>
            <!-- Buttone -->
            <a class="btn btn-default" style="background-color: #d9d9d9" href="post.php?posts_id=<?php echo $post['posts_id']; ?>">Read More</a>
          </div><br>
        <?php endforeach; ?>
        <!-- End foreach loop -->
      </div>
    <?php include('inc/footer.php'); ?>

  