<?php
  #General error checking in PHP
  error_reporting(E_ALL); 
  ini_set('display_errors', 1);

  // Called from connectDB.php
  require('config/config.php'); 
  require('config/connectDB.php');

  // Check for submint
  if(isset($_POST['submit'])){
      // Get form data
      $title = mysqli_real_escape_string($conn,$_POST['title']);
      $body = mysqli_real_escape_string($conn,$_POST['body']);
      $author = mysqli_real_escape_string($conn,$_POST['author']);

      // Database transaction: insert into DB table POSTS
      $query="INSERT INTO posts(title,body,author) VALUES('$title','$body','$author')";

      if(mysqli_query($conn,$query)){
        header('Location: '.ROOT_URL.'');
      } else {
        echo 'ERROR: '. mysqli_error($conn);
      }

  }

  ?>

    <?php include('inc/header.php'); ?>
      <div class="container">
        <h1>Add Posts</h1><br>
        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
          <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
          </div>
          <div class="form-group">
            <label>Author</label>
            <input type="text" name="authhhor" class="form-control">
          </div>
          <div class="form-group">
            <label>Body</label>
            <input type="text" name="body" class="form-control">
          </div>
          <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </form>
      </div>
    <?php include('inc/footer.php'); ?>