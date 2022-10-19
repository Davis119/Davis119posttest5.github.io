<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Kelas</th>
            <th>Prodi</th>
            <th>Aksi</th>
        </tr>

        <?php

        include "koneksi.php";
        $no=1;
        $ambildata = mysqli_query($koneksi, "select * from mahasiswa");
        while ($tampil = mysqli_fetch_array($ambildata)){
            echo "
            <tr>
                 <td>$no</td>
                 <td>$tampil[nama]</td>
                 <td>$tampil[nim]</td>
                 <td>$tampil[kelas]</td>
                 <td>$tampil[prodi]</td>
                 <td><a href='ubah-data.php?nama=$tampil[nama]'> UBAH </a></td> 
            </tr>";

            $no++;
        }
        ?>
    </table>
    <a href="tambah-data.php">Tambah</a>
</body>    
</html>