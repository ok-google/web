<?php
  $host = "localhost"; //isi dari var host bisa : 127.0.0.1
  $dbname = "belajar";
  $user = "root";
  $pass = "";


  try {
    $koneksi = new PDO("mysql:host=".$host.";"."dbname=".$dbname, $user, $pass );
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch (Exception $e) {
    echo $e->getMessage();
  }
