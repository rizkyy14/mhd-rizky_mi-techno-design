<?php 
session_start();
include '../koneksi.php';

$judulfoto = $_POST['judulfoto'];
$deskripsifoto = $_POST['deskripsifoto'];
$tanggalunggah = date('Y-m-d');
$divisi = $_POST['divisi'];
$foto = $_FILES['lokasifile']['name'];
$tmp = $_FILES['lokasifile']['tmp_name'];

// pindahkan file ke folder tujuan
if(move_uploaded_file($tmp, '../foto_kegiatan/'.$foto)){
  $sql = "INSERT INTO foto (judulfoto, deskripsifoto, lokasifile, divisi, tgl_unggah)
          VALUES ('$judulfoto','$deskripsifoto','$foto','$divisi','$tanggalunggah')";
  
  if (mysqli_query($koneksi,$sql)){
    echo"<script>alert('Foto berhasil disimpan!');window.location='tambah-foto.php';</script>";
  } else {
    echo"<script>alert('Gagal menyimpan ke database!');window.location='tambah-foto.php';</script>";
  }
} else {
  echo"<script>alert('Upload gagal!');window.location='tambah-foto.php';</script>";
}
?>
