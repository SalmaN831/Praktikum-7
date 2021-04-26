<?php
//mengaktifkan session php
session_start();
//menghubungkan dengan file koneksi.php
include 'koneksi.php';
//menangkap data dari inputan
$username=$_POST['username'];
$password=$_POST['password'];
//mencocokkan data inputan dengan data pada database
$data=mysqli_query($koneksi, "select * from admin where nama='$username' and password='$password'");
//menghitung data yang ada
$cek=mysqli_num_rows($data);
if($cek>0){ //jika cek lebih dari 0 maka halaman akan dialihkan ke tampilkontak.php
    $_SESSION['username']=$username;
    $_SESSION['status']="login";
    header("location:tampilkontak.php");
}
else{ //jika tidak maka halaman akan dialihkan ke index.php
    header("location:index.php");
}
?>