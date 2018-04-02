<?php
  // #General error checking in PHP
  // error_reporting(E_ALL); 
  // ini_set('display_errors', 1);

  // Create connection
  $conn = mysqli_connect('localhost','root','purple95','phpblog');

  // Check connection
  # NOTE: Make sure you have mysqli and NOT mysql
  if(mysqli_connect_errno()){
    // Connection Failed
    echo 'Failed to connect to MYSQL'. mysql_connection_errno();

  }