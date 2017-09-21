<?php
  include "koneksi.php";

  $npm = $_POST['npm'];
  $nama = $_POST['nama'];
  $jurusan = $_POST['jurusan'];
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $email = $_POST['email'];


  $query = "INSERT INTO mahasiswa(npm, nama, jurusan, tanggal_lahir, email) VALUES (?, ?, ?, ?, ?)";
  $aksi = $koneksi->prepare($query);
  $values = array($npm, $nama, $jurusan, $tanggal_lahir, $email);

  $aksi->execute($values);

  if($aksi){
    header("location:view_mahasiswa.php");
  }
 ?>
