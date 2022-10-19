<?php
   error_reporting(0); 
   $hostname = "localhost";
   $user = "root";
   $password = "";
   $database_name = "postest5_db";

   $koneksi = mysqli_connect($hostname,$user,$password,$database_name);

   if(!$koneksi) {
      die("gagal terhubung ke database". mysqli_connect_error());
   }
?>