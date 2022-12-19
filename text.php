<?php
  $dPconfig['dbhost'] = 'localhost';
  $dPconfig['dbname'] = 'teamproject';
  $dPconfig['dbuser'] = 'root';
  $dPconfig['dbpass'] = 'hyeonji1030!';

  $db_host = $dPconfig['dbhost'];
  $db_user = $dPconfig['dbuser'];
  $db_pass = $dPconfig['dbpass'];
  $db_name = $dPconfig['dbname'];

  $connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

  if (mysqli_connect_errno()){
    printf("Connect failed: %s\n", mysqli_connect_errno());
    exit();
  }
  echo "<h2>접속</h2>";
  mysqli_query($connect, "set names utf8");

?>

