<?php 
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);


$sql = mysqli_query($koneksi, "INSERT INTO admin VALUES('','$username','$password')");

if($sql){
    echo "<script>
    alert('Daftar Admin Berhasil');
    location.href='loginadmin.php';
    
    </script>";
}

?>