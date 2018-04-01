<?php
  // Create connection
  $conn = mysqli_connect('localhost','root','purple95','phpblog');

  // Check connection
  if(mysql_connection_errno()){
    // Connection Failed
    echo 'Failed to connect to MYSQL'. mysql_connection_errno();

  }
  ?>