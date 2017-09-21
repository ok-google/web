<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tambah Data</title>
  </head>
  <body>
    <form action = "insert_pdo.php" method="POST">
      <table>
        <tr>
          <td> NPM </td>
          <td> <input type="text" name = "npm" placeholder=" Masukan NPM"> </input>
        </tr>

        <tr>
          <td> NAMA </td>
          <td> <input type="text" name = "nama" placeholder=" Masukan Nama"> </input>
        </tr>

        <tr>
          <td> Jurusan </td>
          <td> <select name = "jurusan">
                  <option value = "Informatika"> Informatika </option>
                  <option value = "SI"> SI </option>
                  <option value = "SK"> SK </option>
        </tr>

        <tr>
          <td> Tanggal Lahir </td>
          <td> <input type="teks" name = "tanggal_lahir" placeholder="yyyy-mm-dd"> </input>
        </tr>

        <tr>
          <td> email </td>
          <td> <input type="email" name = "email" placeholder=" Masukan E-mail"> </input>
        </tr>

      </table>
      <button type="submit"> Submit Boss </button>
    </form>
  </body>
</html>
