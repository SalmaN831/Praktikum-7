<h2>List Mahasiswa</h2>
<!-- membuat tabel yang menampilkan data mahasiswa -->
<table border="1">
    <tr><th>NO</th><th>NIM</th><th>NAMA</th><th>GENDER</th><th>JURUSAN</th>
    <?php
    include 'koneksi.php'; //menghubunfkan dengan file koneksi.php
    $mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa"); //mengambil data dari tabel mahasiswa
    $no=1; //variabel no yang bernilai 1
    foreach ($mahasiswa as $row){ //perulangan untuk menampilkan data mahasiswa
        $jenis_kelamin = $row['jenis_kelamin']=='P'?'Perempuan':'Laki-laki'; //variabel jenis kelamin
        //menampilkan data mahasiswa
        echo "<tr>
            <td>$no</td>
            <td>".$row['nim']."</td>
            <td>".$row['nama']."</td>
            <td>".$jenis_kelamin."</td>
            <td>".$row['jurusan']."</td>
            </tr>";
        $no++; //nilai variabel no bertambah 1 setiap terjadi perulangan
    }
    ?>
</table>