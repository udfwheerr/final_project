<?php
$dbhost = 'localhost';
$user= 'root';
$password = '';
$dbname = 'meditation';
$connect = mysqli_connect($dbhost, $user, $password, $dbname);
if (!$connect){
  die( "Connection failed: " . mysqli_connect_error());
}
else{
  
}


?>