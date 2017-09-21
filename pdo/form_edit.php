<?php
  include "koneksi.php";
  $npm = $_GET['npm'];
  $query = "SELECT * FROM mahasiswa WHERE npm = '$npm'";
  $aksi = $koneksi->query($query);
  $row = $aksi->fetchObject();
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>EDIT</title>
   </head>
   <body>
     <form action = "update_pdo.php" method="POST">
       <table>
         <input type="hidden" name = "npm" value="<?php echo ($row->npm); ?>" > </input>

         <tr>
           <td> NAMA </td>
           <td> <input type="text" name = "nama" value="<?php echo ($row->nama); ?>"> </input>
         </tr>

         <tr>
           <td> Jurusan </td>
           <td> <select name = "jurusan" value="<?php echo ($row->jurusan); ?>">
                   <option value = "Informatika"> Informatika </option>
                   <option value = "SI"> SI </option>
                   <option value = "SK"> SK </option>
         </tr>

         <tr>
           <td> Tanggal Lahir </td>
           <td> <input type="teks" name = "tanggal_lahir" value="<?php echo ($row->tanggal_lahir); ?>"> </input>
         </tr>

         <tr>
           <td> email </td>
           <td> <input type="email" name = "email" value="<?php echo ($row->email); ?>"> </input>
         </tr>

       </table>
       <button type="submit"> Submit Boss </button>
     </form>
   </body>
 </html>
