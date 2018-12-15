<?php
  $conn=new mysqli("localhost","root","123456","lifeartesanal","3306");
  //$conn=new mysqli('fdb23.your-hosting.net','2874441_gdlwebcamp','edwisanti22','2874441_gdlwebcamp','3306');
 //$conn=new mysqli('hl103.lucushost.org:2083','wnxxqdol_admin','Edwisanti22','wnxxqdol_gdlwebcamp','3306');
  if($conn->connect_error){
    echo $error -> $conn->connect_error;
  }
 ?>
