<?php
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // --- Sanitasi input ---
    $nama_divisi = mysqli_real_escape_string($koneksi, trim($_POST['nama_divisi']));
    $jumlah_anggota = mysqli_real_escape_string($koneksi, trim($_POST['jumlah_anggota']));

    // --- Upload logo ---
    $logo_divisi = $_FILES['logo_divisi']['name'] ?? '';
    $tmp = $_FILES['logo_divisi']['tmp_name'] ?? '';
    $path = "../logo_divisi/" . basename($logo_divisi);

    // --- Ambil program kerja (bisa lebih dari 1) ---
    $progja_array = isset($_POST['progja']) && is_array($_POST['progja']) 
        ? array_filter($_POST['progja'], fn($p) => trim($p) !== '') 
        : [];

    // --- Validasi wajib diisi ---
    if (empty($nama_divisi) || empty($jumlah_anggota)) {
        echo "<script>alert('⚠️ Pastikan semua field sudah diisi.'); history.back();</script>";
        exit;
    }

    // --- Upload file logo ---
    if (!empty($logo_divisi) && move_uploaded_file($tmp, $path)) {

        // === Simpan ke tabel divisi ===
        $query_divisi = "INSERT INTO divisi (nama_divisi, jumlah_anggota, logo_divisi)
                         VALUES ('$nama_divisi', '$jumlah_anggota', '$logo_divisi')";
        $result_divisi = mysqli_query($koneksi, $query_divisi);

        if ($result_divisi) {

            // === Simpan semua program kerja ke tabel progja ===
            foreach ($progja_array as $p) {
                $nama_progja = mysqli_real_escape_string($koneksi, trim($p));
                $query_progja = "INSERT INTO progja (nama_divisi, nama_progja)
                                 VALUES ('$nama_divisi', '$nama_progja')";
                $insert_progja = mysqli_query($koneksi, $query_progja);

                // Cek error per insert (debug jika gagal)
                if (!$insert_progja) {
                    echo "<script>alert('❌ Gagal menambahkan progja: " . mysqli_error($koneksi) . "');</script>";
                }
            }

            echo "<script>
                    alert('✅ Divisi dan Program Kerja berhasil disimpan!');
                    window.location='tambah-divisi.php';
                  </script>";

        } else {
            echo "<script>alert('❌ Gagal menyimpan data divisi: " . mysqli_error($koneksi) . "');</script>";
        }

    } else {
        echo "<script>alert('❌ Gagal upload logo. Pastikan file valid.'); history.back();</script>";
    }
}
?>
