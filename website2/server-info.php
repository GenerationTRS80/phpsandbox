<?php
/*
   Create an associative arry 
      1) Client Info
      2) Server info-->

*/

  # $_SERVER SUPERGLOBAL

  // Create Server Array
  # The name of the server host under which the current script is executing.
  # $server = The Host server name.

  $server = [
      // Set server name to the super global
      'Host Server Name' => $_SERVER['SERVER_NAME'],
      'Host Header' => $_SERVER['HTTP_HOST'],
      'Server Software' => $_SERVER['SERVER_SOFTWARE']
  ];

  $hostName = $server['Host Server Name'];
  $hostHeader = $server['Host Header'];
  $serverSoftware = $server['Server Software'];

  echo "Server Name = $hostName <br><br> Host Header = $hostHeader  <br><br>";
  echo "Server Software = $serverSoftware <br><br>";

  // Create Client Array



?>