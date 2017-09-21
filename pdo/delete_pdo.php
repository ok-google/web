<?php
  include "koneksi.php";
  $npm = $_GET['npm'];

  $query = "DELETE FROM mahasiswa WHERE npm = ?";
  $aksi = $koneksi->prepare($query);
  $values = array($npm);

  $aksi->execute($values);

  if($aksi){
    header("location:view_mahasiswa.php");
  }

 ?>
