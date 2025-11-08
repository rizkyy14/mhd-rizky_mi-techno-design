<?php 
session_start();
include 'koneksi.php';

error_reporting(0);

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' AND password='$password' ");

$cek = mysqli_num_rows($sql);
/*Aksi Login */
if ($cek > 0){
    $data = mysqli_fetch_array($sql);

    $_SESSION['username'] = $data['username'];
    // $_SESSION['id_admin'] = $data['id_admin'];
    $_SESSION['status'] = 'login';
    echo "<script>
    alert('Login berhasil');
    location.href='admin-page.php';
    
    </script>";
}else{
    echo "<script>
    alert('Username atau Password salah!');
    location.href='loginadmin.php';
    
    </script>";
}

?>