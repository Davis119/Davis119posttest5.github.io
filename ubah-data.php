<?php
include "koneksi.php";
$sql=mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id='$_GET[id]'");
$data=mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html>
<body>
<h2 align="center">TAMBAH DATA MAHASISWA</h2>
<link rel="stylesheet" type="text/css"
href="style6.css">


<form method="post" action="" align="center">
  <label for="nama">Nama Lengkap:</label><br>
  <input type="text" name="nama" value="<?php echo $data['nama']; ?>"><br>
  
  <br><label for="nim">Nim:</label><br>
  <input type="text" name="nim"  value="<?php echo $data['nim']; ?>"><br>
  
  <p>Kelas:</p>
  
  <input type="radio" name="kelas" value="<?php echo $data['kelas']; ?>">
  <label for="a">A</label><br>
  <input type="radio" name="kelas" value="<?php echo $data['kelas']; ?>">
  <label for="b">B</label><br>
  <input type="radio" name="kelas" value="<?php echo $data['kelas']; ?>">
  <label for="c">C</label><br>

  <br><label for="prodi">Prodi:</label>
  <br><select name="prodi" value="<?php echo $data['prodi']; ?>">
    <option value="informatika">Informatika</option>
    <option value="sistem informasi">Sistem Informasi</option>
  </select><br>
  
  <br><button type="submit" name="submit">TAMBAH</button>
</form>

<?php
include "koneksi.php";

if(isset($_POST['submit'])){
    mysqli_query($koneksi, "UPDATE mahasiswa SET
    nama = '$_POST[nama]',
    nim = '$_POST[nim]',
    kelas = '$_POST[kelas]',
    prodi = '$_POST[prodi]',
    where nama = '$_GET[nama]'");

    echo "Data Telah diubah";
    echo "<meta http-equiv=refresh content=1;URL='data-mahasiswa.php'>";
}
?>

</body>
</html>