<?php
$host ="localhost";
$dbname ="lawyer";
$username ="root";
$password ="";
  
 $conn = mysqli_connect(hostname:$host, database:$dbname, username:$username, password:$password);
 if(mysqli_connect_errno()){
      die("Connection erro: " . mysqli_connect_error());
 }
 ?>