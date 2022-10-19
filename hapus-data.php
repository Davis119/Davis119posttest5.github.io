<!DOCTYPE html>
<html>
<body>
<h2 align="center">HAPUS DATA MAHASISWA</h2>
<link rel="stylesheet" type="text/css"
href="style6.css">


<form method="post" action="" align="center">
  <label for="nama">Nama Lengkap:</label><br>
  <input type="text" name="nama"><br>
  
  <br><label for="nim">Nim:</label><br>
  <input type="text" name="nim"  ><br>
  
  <p>Kelas:</p>
  
  <input type="radio" name="kelas" value="A">
  <label for="a">A</label><br>
  <input type="radio" name="kelas" value="B">
  <label for="b">B</label><br>
  <input type="radio" name="kelas" value="C">
  <label for="c">C</label><br>

  <br><label for="prodi">Prodi:</label>
  <br><select name="prodi">
    <option value="informatika">Informatika</option>
    <option value="sistem informasi">Sistem Informasi</option>
  </select><br>
  
  <br><button type="submit" name="submit">HAPUS</button>
</form>

<?php
include "koneksi.php";

if(isset($_POST['submit'])){
    mysqli_query($koneksi, "delete from mahasiswa");

    echo "
    <script>
    alert('Data Dihapus')
    </script>
    ";
}
?>

</body>
</html>