<html>
<head>
</head>
<body>
    <h1>Halaman Login</h1>
    <!-- membuat form dengan method post yang mengeksekusi file cetaktugas.php -->
    <form method="post" action="cetaktugas.php">
        <table>
            <tr>
                <!-- membuat inputan teks untuk username -->
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <!-- membuat inputan teks untuk password -->
                <td>Password</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <!-- membuat button login -->
                <td></td>
                <td><input type="submit" name="login" value="Login"></td>
            </tr>
        </table>
    </form>
</body>
</html>