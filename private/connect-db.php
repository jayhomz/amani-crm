<?php

  $host = "localhost";
  $username = "root";
  $password = "";
  $db = "amani";

  $connect = mysqli_connect($host, $username, $password, $db);

  if(mysqli_connect_error($connect)) {
    die("Something went wrong, please try again later or contact the admin");   
  }

?>