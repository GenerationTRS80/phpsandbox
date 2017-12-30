<?php
/*
   Create an associative arry 
      1) Client Info
      2) Server info-->

*/

  # $_SERVER SUPERGLOBAL

  // ***  Create Server Array   ***
  # The name of the server host under which the current script is executing.
  # $server = The Host server name.

  $server = [
      // Set server name to the super global
      'Host Server Name' => $_SERVER['SERVER_NAME'],
      'Host Header' => $_SERVER['HTTP_HOST'],
      'Server Software' => $_SERVER['SERVER_SOFTWARE'],
      'Document Root' => $_SERVER['DOCUMENT_ROOT'],
      'Current Page' => $_SERVER['PHP_SELF'],
      'Script Name' => $_SERVER['SCRIPT_NAME'], 
      'Absolute Path' => $_SERVER['SCRIPT_FILENAME']     
  ];

  $hostName = $server['Host Server Name'];
  $hostHeader = $server['Host Header'];
  $serverSoftware = $server['Server Software'];
  $documentRoot = $server['Server Software'];
  $currentPage = $server['Current Page'];
  $scriptName = $server['Script Name'];
  $absolutePath = $server['Absolute Path'];

  // echo "Server Name = $hostName <br><br> Host Header = $hostHeader  <br><br>";
  // echo "Server Software = $serverSoftware <br><br>";
  // echo "Document Root = $documentRoot <br><br>";
  // echo "Current Page = $currentPage <br><br>";
  // echo "Script Name = $scriptName <br><br>";
  // echo "Absolute Path = $absolutePath <br><br>";
  //
  // print_r($server);

  // *** Create Client Array ***
  $client = [
    'Client System Info' => $_SERVER['HTTP_USER_AGENT'],
    'Client IP' => $_SERVER['REMOTE_ADDR'],
    'Remote Port' => $_SERVER['REMOTE_PORT']
  ];

  // print_r($client);




?>