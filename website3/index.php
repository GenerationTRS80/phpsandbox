<?php

  // Message Variables
    $msg ='';
    $msgClass ='';


  # Check for submit
  if(filter_has_var(INPUT_POST,'submit')){
    // echo 'Submitted';

    # Get form Data
    # NOTE: Use htmlspecialchars() to prevent the running of malicious code
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    # Check Required fields 1) NOT Empty Name, Email, Message
    if(!empty($name) && !empty($email) && !empty($message)){

      // # Passed -- Not empty

      # Validate EMAIL, IF NOT valid then TRUE
      if(filter_var($email,FILTER_VALIDATE_EMAIL)){

          # Passed
          // echo 'EMAIL PASSED';  
          # Set up Recipient Email
          $toEmail = 'phil@pseiersen.com';
          $subject = "Contact request from $name";
          $body = '
              <h2>Contact Request</h2>
              <h4>Name</h4><p>"$name"</p>
              <h4>Email</h4><p>"$Email"</p>
              <h4>Message</h4><p>"$message"</p>
          ';

          // Set Headers 
          # Note: dot . is concatenate
          #       dot equal .= is append
          #       \r\n is carriage return and new line
          $headers = "MIME-Version: 1.0" . "\r\n";
          $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

          // Additional Header
          $headers .= "From: " .$name. "<" .$email. ">". "\r\n";

          if(mail($toEmail, $subject, $body, $headers)){
              
              echo 'EMAIL Sent';  
              $msg='Your email has been sent';
              $msgClass = 'alert-success';           
          } else {

            // FAIL to send msg
              echo 'EMAIL NOT Sent';   
              $msg='Your email was not sent';
              $msgClass = 'alert-danger';          

          }

      } else {

        # Failed
        echo 'FAILED EMAIL';   
        $msg='Please use a valid email addres';
        $msgClass = 'alert-danger';
      }


    }else{
      //Failed
      $msg='Please fill in all the field';
      $msgClass = 'alert-danger';
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>
<body>
  <nav class="nav navbar-default">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">My Website</a>
      </div>
    </div>
  </nav>
  <div class="container">

  <!-- Show Error Msg below -->
    <?php if($msg != ''): ?>
      <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    <?php endif; ?>

    <!-- Form begins here -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <div class="form-group">
        <label>Name</label>

        <!-- Make the form retain the values inputted by using isset($_POST['name']) -->
        <input name="name" type="text" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">

      </div>
      <div class="form-group">
        <label>Email</label>

        <!-- NOTE: type=textneeds to be text for email NOTE type=email -->
        <!-- Make the form retain the values inputted by using isset($_POST['email']) -->
        <input name="email" type="text" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">

      </div>
      <div class="form-group">
        <label>Message</label>

        <!-- Make the form retain the values inputted by using isset($_POST['message']) -->        
        <textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
      </div>
      <br>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
</html>