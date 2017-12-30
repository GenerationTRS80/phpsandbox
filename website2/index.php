<?php include('server-info.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>System Info</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Server and File Info</h1>
     <!-- If there is a server then -->
    <?php if($server): ?>
      <ul class="list-group">
        <?php foreach($server as $key => $value): ?>
          <li class="list-group-item">
            <strong><?php echo $key; ?>: </strong>
            <?php echo $value; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <br><br>
    <h1>Client and File Info</h1>
    <?php if($client): ?>
      <ul class="list-group">
        <?php foreach($client as $key => $value): ?>
          <li class="list-group-item">
            <strong><?php echo $key; ?>: </strong>
            <?php echo $value; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div>
</body>
</html>