<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$database = "lifeartesanal";
$port = "3306";
//$servername = "fdb23.your-hosting.net";
//$username = "2874441_lifeartesanal";
//$password = "life1234";
//$database = "2874441_lifeartesanal";
//$port = "3306";
  $conn=new mysqli($servername, $username, $password, $database, $port);
  //$conn=new mysqli('fdb23.your-hosting.net','2874441_gdlwebcamp','edwisanti22','2874441_gdlwebcamp','3306');
 //$conn=new mysqli('hl103.lucushost.org:2083','wnxxqdol_admin','Edwisanti22','wnxxqdol_gdlwebcamp','3306');
  if($conn->connect_error){
    echo $error -> $conn->connect_error;
  }
 ?>
