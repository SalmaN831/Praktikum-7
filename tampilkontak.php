<h2>Daftar Kontak</h2>
<!-- membuat tabel yang menampilkan data kontak -->
<table border="1">
    <tr><th>NO</th><th>ID</th><th>NAMA</th><th>JENIS KELAMIN</th><th>EMAIL</th><th>ALAMAT</th><th>KOTA</th><th>PESAN</th>
    <?php
    include 'koneksikontak.php'; //menghubungkan dengan file koneksikontak.php
    $kontak = mysqli_query($koneksi, "SELECT * FROM kontak"); //mengambil data dari tabel kontak
    $no=1; //variabel no bernilai 1
    foreach ($kontak as $row){ //perulangan untuk menampilkan data kontak
        //menampilkan data kontak
        echo "<tr>
            <td>$no</td>
            <td>".$row['id']."</td>
            <td>".$row['nama']."</td>
            <td>".$row['jkel']."</td>
            <td>".$row['email']."</td>
            <td>".$row['alamat']."</td>
            <td>".$row['kota']."</td>
            <td>".$row['pesan']."</td>
            </tr>";
        $no++; //nilai variabel no bertambah 1 setiap terjadi perulangan
    }
    ?>
</table>