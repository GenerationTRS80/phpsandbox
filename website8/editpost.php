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
      $udpate_id== mysqli_real_escape_string($conn,$_POST['update_id']);
      $title = mysqli_real_escape_string($conn,$_POST['title']);
      $body = mysqli_real_escape_string($conn,$_POST['body']);
      $author = mysqli_real_escape_string($conn,$_POST['author']);

      // Database transaction: insert into DB table POSTS
      $query="UPDATE posts SET
          title='$title',
          body='$body',
          author='$author'
            WHERE id = {$udpate_id}";


      if(mysqli_query($conn,$query)){
        header('Location: '.ROOT_URL.'');
      } else {
        echo 'ERROR: '. mysqli_error($conn);
      }

  }

   // get ID  << Get the current post selected with a query
  if (isset($_GET['posts_id']))
  {
    $id=mysqli_real_escape_string($conn,$_GET['posts_id']);
  }


  // Create query with where clause 
  $query= 'Select * FROM posts WHERE posts_id = '.$id;

  // Get Results
  $result = mysqli_query($conn,$query);

  // >> Fetch Data <<
  $post = mysqli_fetch_assoc($result);

  # Show what is in $posts object as string
  var_dump($post);  


  //   $title= $post['title'];
 
  // if (isset($_GET['author']))
  // {
  //   $author=$post['author'];;
  // }

  // if (isset($_GET['body']))
  // {
  //   $body= $post['body'];
  // }

  // Free results - Close recordset
  mysqli_free_result($result);

  // Close connection
  mysqli_close($conn);

  ?>

    <?php include('inc/header.php'); ?>
      <div class="container">
        <h1>Edit Post</h1><br>
        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
          <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value=<?php echo $post['title']; ?>>
          </div>
          <div class="form-group">
            <label>Author</label>
            <input type="text" name="author" class="form-control" value=<?php echo $post['author']; ?>>
          </div>
          <div class="form-group">
            <label>Body</label>
            <textarea name="body" class="form-control"><?php echo $post['body']; ?></textarea>
          </div>
          <!-- Hidden value -->
          <input type=hidden name="update_id" value="<?php echo $post['posts_id']; ?>">
          <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </form>
      </div>
    <?php include('inc/footer.php'); ?>