<?php
  // #General error checking in PHP
  // error_reporting(E_ALL); 
  // ini_set('display_errors', 1);

  // Called from connectDB.php
  require('config/config.php'); 
  require('config/connectDB.php');

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