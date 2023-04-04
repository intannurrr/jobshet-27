<?php

$server = "localhost";   //sesuaikan dengan nama server
$user = "root";          //sesuaikan username phpmyadmin
$password = "";          //sesuaikan password phpmyadmin
$database = "db_siswa";  //sesuaikan nama database
$con = mysqli_connect($server, $user , $password , $database);

if (mysqli_connect_errno()) {
   echo "gagal terhubung Mysqli: " . mysqli_connect_errno();
}