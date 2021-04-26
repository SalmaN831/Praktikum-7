<!DOCTYPE html>
<html>
    <head>
        <title>Form Input</title>
    </head>
    <body>
        <!-- membuat method post yang mengeksekusi file simpan.php -->
        <form method="post" action="simpan.php">
            <table>
                <tr>
                    <!-- membuat inputan teks untuk NIM -->
                    <td>NIM</td>
                    <td><input type="text" onkeyup="isi_otomatis()" name="nim"></td>
                </tr>
                <tr>
                    <!-- membuat inputan teksuntuk nama -->
                    <td>NAMA</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <!-- membuat inputan berupa radio button untuk jenis kelamin -->
                    <td>JENIS KELAMIN</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="L">Laki-laki
                        <input type="radio" name="jenis_kelamin" value="P">Perempuan
                    </td>
                </tr>
                <tr>
                    <!-- membuat inputan berupa select option untuk jurusan -->
                    <td>JURUSAN</td>
                    <td>
                        <select name="jurusan">
                            <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                            <option value="TEKNIK MESIN">TEKNIK MESIN</option>
                            <option value="TEKNIK KIMIA">TEKNIK KIMIA</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <!-- membuat inputan teks untuk alamat -->
                    <td>ALAMAT</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <!-- membuat button SIMPAN yang menyimpan data inputan -->
                    <td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>