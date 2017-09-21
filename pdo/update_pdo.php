<?php
  include "koneksi.php";

  $npm = $_POST['npm'];
  $nama = $_POST['nama'];
  $jurusan = $_POST['jurusan'];
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $email = $_POST['email'];


  $query = "UPDATE mahasiswa SET nama = ?, jurusan = ?, tanggal_lahir = ?, email = ? WHERE npm = ?";
  $aksi = $koneksi->prepare($query);
  $values = array($nama, $jurusan, $tanggal_lahir, $email, $npm);

  $aksi->execute($values);

  if($aksi){
    header("location:view_mahasiswa.php");
  }
 ?>
