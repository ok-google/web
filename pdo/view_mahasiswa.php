<?php
  include "koneksi.php";

  $query = "SELECT * FROM mahasiswa";
  $aksi = $koneksi->query($query);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>View</title>
  </head>
  <body>
    <a href="tambah_data.php">Tambah Data bosku !!!</a>
    <table border = "1">
      <thead>
          <th> NPM </th>
          <th> Nama </th>
          <th> Jurusan </th>
          <th> Tanggal Lahir </th>
          <th> Email </th>
          <th> Edit </th>
          <th> Hapus </th>
      </thead>

      <tbody>
          <?php
            while ($row = $aksi->fetchObject()){
              echo '<tr>';
                echo '<td>'.$row->npm.'</td>';
                echo '<td>'.$row->nama.'</td>';
                echo '<td>'.$row->jurusan.'</td>';
                echo '<td>'.$row->tanggal_lahir.'</td>';
                echo '<td>'.$row->email.'</td>';
                echo '<td> <a href ="form_edit.php?npm='.$row->npm.'"> Edit </td>';
                echo '<td> <a href ="delete_pdo.php?npm='.$row->npm.'"> Hapus </td>';
              echo '<tr>';
            }
           ?>
      </tbody>
    </table>
  </body>
</html>
