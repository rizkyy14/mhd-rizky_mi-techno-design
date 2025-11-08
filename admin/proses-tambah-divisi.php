<?php
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_divisi = $_POST['nama_divisi'];
    $jumlah_anggota = $_POST['jumlah_anggota'];

    // === Upload logo ===
    $logo_divisi = $_FILES['logo_divisi']['name'];
    $tmp = $_FILES['logo_divisi']['tmp_name'];
    $path = "../logo_divisi/" . $logo_divisi;

    // === Tangani multiple progja ===
    // data dari <input name="progja[]">
    $progja_array = isset($_POST['progja']) ? array_filter($_POST['progja']) : [];

    if (move_uploaded_file($tmp, $path)) {
        // === Simpan ke tabel divisi ===
        $query_divisi = "INSERT INTO divisi (nama_divisi, jumlah_anggota, logo_divisi)
                         VALUES ('$nama_divisi', '$jumlah_anggota', '$logo_divisi')";
        $result_divisi = mysqli_query($koneksi, $query_divisi);

        if ($result_divisi) {
            // === Simpan semua progja ===
            foreach ($progja_array as $p) {
                $query_progja = "INSERT INTO progja (nama_divisi, nama_progja)
                                 VALUES ('$nama_divisi', '$p')";
                mysqli_query($koneksi, $query_progja);
            }

            echo "<script>
                    alert('Divisi dan Program Kerja berhasil disimpan!');
                    window.location='tambah-divisi.php';
                  </script>";
        } else {
            echo "<script>alert('Gagal menyimpan data divisi');</script>";
        }
    } else {
        echo "<script>alert('Gagal upload logo');</script>";
    }
}
?>
