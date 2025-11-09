<?php
include '../koneksi.php';


$divisi = $_POST['divisi'];
$nama_anggota = $_POST['nama_anggota'];
$jabatan = $_POST['jabatan'];


if (count($nama_anggota) === count($jabatan) && count($jabatan) === count($_FILES['foto_anggota']['name'])) {
    for ($i = 0; $i < count($nama_anggota); $i++) {
        $nama = mysqli_real_escape_string($koneksi, $nama_anggota[$i]);
        $jab = mysqli_real_escape_string($koneksi, $jabatan[$i]);


        $fotoName = $_FILES['foto_anggota']['name'][$i];
        $tmpName = $_FILES['foto_anggota']['tmp_name'][$i];


        $folder = "../foto_anggota/";


        $uniqueName = time() . "_" . basename($fotoName);
        $targetFile = $folder . $uniqueName;

        if (move_uploaded_file($tmpName, $targetFile)) {

            $query = "INSERT INTO anggota (nama_anggota, jabatan, divisi, foto_anggota)
                      VALUES ('$nama', '$jab', '$divisi', '$uniqueName')";
            mysqli_query($koneksi, $query);
        }
    }

    echo "<script>alert('Data anggota berhasil disimpan!'); window.location='../admin-page.php';</script>";
} else {
    echo "<script>alert('Jumlah input tidak sesuai.'); window.history.back();</script>";
}
?>
