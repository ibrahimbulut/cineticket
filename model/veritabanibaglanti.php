<?php

$servername = "localhost";
  $username = "root";
  $password = "";
  $database = "cineticketdb";


  $connect = new mysqli($servername,$username,$password,$database);
  if($connect->connect_error)
  {
    die("Bağlantı başarısız".$connect->connect_error)."\n";
  }
    echo '';
       ?>
