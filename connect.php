<?php

$server = 'localhost';
$user = 'root';
$pass = 'butter';
$db = 'funkyCats';

// connect to database
$conn = new mysqli($server, $user, $pass, $db);

if($conn === false){
  die("ERROR: could not connect. " 
  . mysqli_connect_error());
}

?>