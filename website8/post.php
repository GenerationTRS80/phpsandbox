<?php
  #General error checking in PHP
  error_reporting(E_ALL); 
  ini_set('display_errors', 1);

  // Called from connectDB.php
  require('config/config.php'); 
  require('config/connectDB.php');


  // Check for DELETE submit 
  if(isset($_POST['delete'])){

    // Delete post where posts_id = delete_id
    $delete_id= mysqli_real_escape_string($conn,$_POST['delete_id']);

    echo "DeleteID = $delete_id<br>";

    // Database transaction: insert into DB table POSTS
    $query="DELETE FROM posts WHERE posts_id = {$delete_id}";

    if(mysqli_query($conn,$query)){
      header('Location: '.ROOT_URL.'');
    } else {
      echo 'ERROR: '. mysqli_error($conn);
    }

  }

  // get ID  << Get the current post selected with a query
  # Remove dangerous charachter  mysqli_real_escape_string()
  # https://phillipnb.wordpress.com/2010/11/26/undefined-index-and-_get/
  if (isset($_GET['posts_id']))
  {
    $id=mysqli_real_escape_string($conn,$_GET['posts_id']);
  }

    // Create query with where clause 
  $query= 'Select * FROM posts WHERE posts_id = '.$id;

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

    <?php include('inc/header.php'); ?>
      <div class="container">
      <!-- Button -->
      <a class="btn btn-default" style="background-color: #d9d9d9" href="<?php echo ROOT_URL;?>">Back</a>
      <h1><?php echo $posts['title']; ?></h1>
      <!-- <h1><?php echo ROOT_URL;?>editpost.php?posts_id=<?php echo $posts['posts_id']; ?></h1> -->
        <small>Created on <?php echo $posts['created_at']; ?> by
        <?php echo $posts['author']; ?></small>
        <p><?php echo $posts['body'];?></p>
        <hr>

        <!-- Delete post -->
        <form class="pull-right" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
          <input type="hidden" name="delete_id" value="<?php echo $post['posts_id']; ?>">
          <input type="submit" name="delete" value="Delete" class="btn btn-danger">
        </form>
        <!-- Fixed reference to editpost by removing "" from href=""-->
        <a class="btn btn-default" style="background-color: #d9d9d9" href=<?php echo ROOT_URL;?>editpost.php?posts_id=<?php echo $posts['posts_id']; ?>>Edit Post</a>
        </div>
    <?php include('inc/footer.php'); ?>
