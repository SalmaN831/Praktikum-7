<!DOCTYPE html>
<html>
    <head>
        <title>Form Input</title>
    </head>
    <body>
        <!-- membuat form dengan method post yang mengeksekusi file simpankontak.php -->
        <form method="post" action="simpankontak.php">
            <table>
                <tr>
                    <!-- membuat inputan teks untuk id -->
                    <td>ID</td>
                    <td><input type="text" onkeyup="isi_otomatis()" name="id"></td>
                </tr>
                <tr>
                    <!-- membuat inputan teks untuk nama -->
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <!-- membuat inputan berupa radio button untuk jenis kelamin -->
                    <td>Jenis Kelamin</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="L">Laki-laki
                        <input type="radio" name="jenis_kelamin" value="P">Perempuan
                    </td>
                </tr>
                <tr>
                    <!-- membuat inputan teks untuk email -->
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <!-- membuat inputan berupa select option untuk alamat -->
                    <td>Alamat</td>
                    <td>
                        <select name="alamat">
                            <option value="gedeg">Gedeg</option>
                            <option value="sooko">Sooko</option>
                            <option value="puri">Puri</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <!-- membuat inputan berupa select option untuk kota -->
                    <td>Kota</td><td>
                        <select name="kota">
                            <option value="Surabaya">Surabaya</option>
                            <option value="Mojokerto">Mojokerto</option>
                            <option value="Sidoarjo">Sidoarjo</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <!-- membuat inputan berupa text area untuk pesan -->
                    <td>Pesan</td>
                    <td><textarea name="pesan" cols="45" rows="5" align="center"></textarea></td>
                </tr>
                <tr>
                    <!-- membuat button simpan yang akan menyimpan inputan-->
                    <td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>