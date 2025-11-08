<?php
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $divisi = mysqli_real_escape_string($koneksi, $_POST['divisi']);
    $nama_array = $_POST['nama_anggota'];
    $jabatan_array = $_POST['jabatan'];

    // Validasi
    if (count($nama_array) > 0 && isset($_FILES['foto_anggota'])) {

        $foto_names = $_FILES['foto_anggota']['name'];
        $foto_tmp = $_FILES['foto_anggota']['tmp_name'];

        // Pastikan jumlah foto = jumlah anggota
        if (count($foto_names) != count($nama_array)) {
            echo "<script>alert('⚠️ Jumlah foto harus sama dengan jumlah anggota!'); window.history.back();</script>";
            exit;
        }

        // Looping simpan data
        for ($i = 0; $i < count($nama_array); $i++) {
            $nama = mysqli_real_escape_string($koneksi, $nama_array[$i]);
            $jabatan = mysqli_real_escape_string($koneksi, $jabatan_array[$i]);
            $foto = basename($foto_names[$i]);
            $path = "../foto_anggota/" . $foto;

            if (move_uploaded_file($foto_tmp[$i], $path)) {
                $query = "INSERT INTO anggota (nama_anggota, jabatan, divisi, foto_anggota)
                          VALUES ('$nama', '$jabatan', '$divisi', '$foto')";
                mysqli_query($koneksi, $query);
            }
        }

        echo "<script>
                alert('✅ Semua data anggota berhasil disimpan!');
                window.location='tambah-anggota.php';
              </script>";
    } else {
        echo "<script>alert('⚠️ Data anggota tidak lengkap'); window.history.back();</script>";
    }
}
?>
