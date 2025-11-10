-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Nov 2025 pada 04.29
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmps_mi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(0, 'adm-kii', '202cb962ac59075b964b07152d234b70'),
(1, 'adm-rizky', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `album`
--

CREATE TABLE `album` (
  `id_album` int(5) NOT NULL,
  `nama_album` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_album` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `nama_anggota` varchar(100) NOT NULL,
  `divisi` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `foto_anggota` varchar(255) DEFAULT NULL,
  `id_anggota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`nama_anggota`, `divisi`, `jabatan`, `foto_anggota`, `id_anggota`) VALUES
('Alifa Qadri', 'BPH (Badan Pengurus Harian)', 'Ketua Himpunan', 'bg-alifa.JPG', 5),
('M. Hafizh Batubara', 'BPH (Badan Pengurus Harian)', 'Wakil Ketua Himpunan', 'bg-hafiz.JPG', 6),
('Mauliza Azizah Rachman', 'BPH (Badan Pengurus Harian)', 'Sekretaris Umum', '1762643792_IMG_4028.JPG', 7),
('Syafitri Uswatun Hasanah', 'BPH (Badan Pengurus Harian)', 'Wakil Sekretaris Umum', '1762643792_IMG_4031.JPG', 8),
('Amira Nadhifa N', 'BPH (Badan Pengurus Harian)', 'Bendahara Umum', '1762643792_IMG_4032.JPG', 9),
('Umi Nurfadillah S', 'BPH (Badan Pengurus Harian)', 'Wakil Bendahara Umum', '1762643792_IMG_4034.JPG', 10),
('M. Ibnu Tawakal', 'BPH (Badan Pengurus Harian)', 'Kontrol Internal', '1762643792_IMG_4038.JPG', 11),
('Mariska Siagian', 'BPH (Badan Pengurus Harian)', 'Kontrol Internal', '1762643792_IMG_4024.JPG', 12),
('Zaky Farhan Sitorus', 'Internal', 'Kepala Divisi Internal', '1762738966_IMG_4042 (1).JPG', 13),
('Chrisaondy Hutabarat', 'Internal', 'Ketua Tim Advokasi Hubungan Mahasiswa', '1762738966_IMG_4060.JPG', 14),
('Tri Septian Tarigan', 'Internal', 'Anggota Tim Advokasi Hubungan Mahasiswa', '1762738966_IMG_4046.JPG', 15),
('Johannes Mario Rafael Sibarani', 'Internal', 'Anggota Tim Advokasi Hubungan Mahasiswa', '1762738966_IMG_4050.JPG', 16),
('Holikristin Br Ginting', 'Internal', 'Anggota Tim Advokasi Hubungan Mahasiswa', '1762738966_IMG_4054.JPG', 17),
('Lettyciya Laura Siagian', 'Internal', 'Ketua Tim Keagamaan', '1762738966_IMG_4044.JPG', 18),
('Egi Syahputra', 'Internal', 'Anggota TIm Keagamaan', '1762738966_IMG_4052.JPG', 19),
('Bima Shakti', 'Eksternal', 'Kepala Divisi Eksternal', '1762741904_bima-eks.JPG', 20),
('Tongku Guru Siregar', 'Eksternal', 'Ketua Tim Hubungan Luar Prodi', '1762741904_tongku-eks.JPG', 21),
('M. Hilmi Syuhada', 'Eksternal', 'Anggota Tim Hubungan Luar Prodi', '1762741904_hilmi-eks.JPG', 22),
('Dwika Br Naibaho', 'Eksternal', 'Anggota Tim Hubungan Luar Prodi', '1762741904_dwika-eks.jpg', 23),
('M. Rizky Ramadhan', 'Eksternal', 'Anggota Tim Hubungan Luar Prodi', '1762741904_rizky-eks.JPG', 24),
('Dita Liana', 'Eksternal', 'Ketua Tim Riset Analisis Kebijakan', '1762741904_dita-eks.JPG', 25),
('Sindy Syahfitri', 'Eksternal', 'Anggota Tim Riset Analisis Kebijakan', '1762741904_sindy-eks.JPG', 26),
('Rachel Sagita Sibarani', 'PSDM', 'Kepala Divisi PSDM', '1762742500_rachel-psdm.JPG', 27),
('Hanna Pati Lopian', 'PSDM', 'Ketua Tim Quality Assurance', '1762742500_hanna-psdm.JPG', 28),
('Shindy Aprilia', 'PSDM', 'Anggota Tim Quality Assurance', '1762742500_shindy-psdm.JPG', 29),
('Valencia Anbarina', 'PSDM', 'Ketua Tim Program', '1762742500_valen-psdm.JPG', 30),
('Rahmadsyah Irawan', 'PSDM', 'Anggota Tim Program', '1762742500_rahmad-psdm.JPG', 31),
('Clara Sinta Limbong', 'PSDM', 'Anggota Tim Program', '1762742500_clara-psdm.JPG', 32),
('Mutiara Sianturi', 'PSDM', 'Ketua Tim HRD', '1762742500_muti-psdm.JPG', 33),
('Rara Triya Amanda', 'PSDM', 'Anggota Tim HRD', '1762742500_rara-psdm.JPG', 34),
('Rendy Krisna', 'Iptek', 'Kepala Divisi IPTEK', '1762743586_rendy-iptek.JPG', 35),
('Randy Karna', 'Iptek', 'Ketua Tim Multimedia', '1762743586_randy-iptek.JPG', 36),
('Dedy Hutahean Putra', 'Iptek', 'Anggota Tim Multimedia', '1762743586_dedy-iptek.JPG', 37),
('Sekarissa Ramadhani Suriadi', 'Iptek', 'Anggota Tim Multimedia', '1762743586_rissa-iptek.jpg', 38),
('May Helena Tamba', 'Iptek', 'Anggota Tim Multimedia', '1762743586_may-iptek.jpg', 39),
('Hatta Fahriza', 'Iptek', 'Ketua Tim Content Creator', '1762743586_hatta-iptek.jpg', 40),
('Silvika Zachry', 'Iptek', 'Anggota Tim Content Creator', '1762743586_silvika-iptek.jpg', 41),
('Sukma Andini', 'Iptek', 'Anggota Tim Content Creator', '1762743586_sukma-iptek.jpg', 42),
('Riah Ulina Hutasoit', 'BUsiness Development', 'Kepala Divisi Business Development', '1762744908_riah-bd.JPG', 43),
('Hepyana Daulay', 'BUsiness Development', 'Ketua Tim Product Development', '1762744908_hepyana-bd.jpg', 44),
('Kyla Hulwani', 'BUsiness Development', 'Anggota Tim Product Development', '1762744908_kyla-bd.jpg', 45),
('Musbar Muliansyah Syahputra', 'BUsiness Development', 'Anggota Tim Product Development', '1762744908_musbar-bd.JPG', 46),
('Fensia Emanuela', 'BUsiness Development', 'Anggota Tim Product Development', '1762744908_fencia-bd.JPG', 47),
('Yohana Fransiska', 'BUsiness Development', 'Ketua Tim Sales Executive', '1762744908_yohana-bd.JPG', 48),
('Nurul Inayah', 'BUsiness Development', 'Anggota Tim Sales Executive', '1762744908_naya-bd.JPG', 49),
('Nabila Azzahro', 'BUsiness Development', 'Anggota Tim Sales Executive', '1762744908_nabila-bd.jpg', 50);

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisi`
--

CREATE TABLE `divisi` (
  `nama_divisi` varchar(50) NOT NULL,
  `jumlah_anggota` int(3) DEFAULT NULL,
  `logo_divisi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `divisi`
--

INSERT INTO `divisi` (`nama_divisi`, `jumlah_anggota`, `logo_divisi`) VALUES
('BPH (Badan Pengurus Harian)', 8, 'LOGO KABINET UTAMA.png'),
('BUsiness Development', 9, 'DIVISI BISNIS DEVELOPMENT.png'),
('Eksternal', 7, 'DIVISI EKSTERNAL.png'),
('Internal', 8, 'DIVISI INTERNAL.png'),
('Iptek', 8, 'DIVISI IPTEK.png'),
('PSDM', 8, 'DIVISI PSDM.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL,
  `judulfoto` varchar(100) DEFAULT NULL,
  `deskripsifoto` text DEFAULT NULL,
  `lokasifile` varchar(255) DEFAULT NULL,
  `divisi` varchar(50) DEFAULT NULL,
  `tgl_unggah` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `foto`
--

INSERT INTO `foto` (`id_foto`, `judulfoto`, `deskripsifoto`, `lokasifile`, `divisi`, `tgl_unggah`) VALUES
(7, 'Rules MI Birthday', 'Di balik barisan kode dan lembar tugas,\r\nada tawa, semangat, dan cerita kita sebagai satu keluarga.\r\n\r\nMI Birthday hadir bukan sekadar menjadi hal baru tapi momen untuk saling mengingatkan bahwa kita pernah berjalan bersama,\r\nmenumbuhkan mimpi,\r\ndan terus melangkah dalam satu Nama: Manajemen Informatika.\r\n\r\n<script>\r\n// MI Birthday 2025 Caption\r\nconsole.log(\"🎂 Welcome to: MI BIRTHDAY 2025\");\r\nconsole.log(\"Status : Ulang tahun ✅\");\r\nconsole.log(\"User : Mahasiswa Informatika\");\r\nconsole.log(\"Mood : Overclocked to Celebrate! 🎉\");\r\n</script>\r\n\r\n#miunggul##ManajemenInformatika#MI#HMPSMI#MIBirthday2025', 'mibirthday.png', 'Internal', '2025-11-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `nim` int(11) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `status` enum('0','proses','selesai') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `progja`
--

CREATE TABLE `progja` (
  `id_progja` int(11) NOT NULL,
  `nama_divisi` varchar(50) DEFAULT NULL,
  `nama_progja` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `progja`
--

INSERT INTO `progja` (`id_progja`, `nama_divisi`, `nama_progja`) VALUES
(5, 'Internal', 'Halo MI'),
(6, 'Internal', 'Infaq Jumat'),
(7, 'Internal', 'Bukber MI'),
(8, 'Internal', 'Classmet MI'),
(9, 'Internal', 'Mading Digital'),
(10, 'Internal', 'Kelas Inspirasi'),
(11, 'Internal', 'MI Birthday'),
(12, 'Internal', 'PMB'),
(13, 'Internal', 'Sahabat MI'),
(14, 'Eksternal', 'MI GOES TO SCHOOL'),
(15, 'Eksternal', 'MI EXPLORE'),
(16, 'Eksternal', 'MI CARE & SHARE'),
(17, 'Eksternal', 'KI CUP'),
(18, 'Eksternal', 'ANALISIS & RISET KEBIJAKAN'),
(19, 'Iptek', 'TechTainment'),
(20, 'Iptek', 'MI TECHNO DESIGN FEST'),
(21, 'PSDM', 'WORKSHOP'),
(22, 'PSDM', 'MENTORING CLASS'),
(23, 'PSDM', 'AMBIS'),
(24, 'PSDM', 'LEAD EDUCATION'),
(25, 'BUsiness Development', 'Studentpreneur Fair'),
(26, 'BUsiness Development', 'TAKJIL CORNER'),
(27, 'BUsiness Development', 'Fair Growth');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_tanggapan` date DEFAULT NULL,
  `tanggapan` text DEFAULT NULL,
  `id_admin` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_album`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `fk_divisi` (`divisi`);

--
-- Indeks untuk tabel `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`nama_divisi`);

--
-- Indeks untuk tabel `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `fk_foto` (`divisi`) USING BTREE;

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indeks untuk tabel `progja`
--
ALTER TABLE `progja`
  ADD PRIMARY KEY (`id_progja`),
  ADD KEY `nama_divisi` (`nama_divisi`);

--
-- Indeks untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`),
  ADD KEY `fk_tanggapan` (`id_pengaduan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `progja`
--
ALTER TABLE `progja`
  MODIFY `id_progja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `fk_divisi` FOREIGN KEY (`divisi`) REFERENCES `divisi` (`nama_divisi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `fk_berita` FOREIGN KEY (`divisi`) REFERENCES `divisi` (`nama_divisi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `progja`
--
ALTER TABLE `progja`
  ADD CONSTRAINT `progja_ibfk_1` FOREIGN KEY (`nama_divisi`) REFERENCES `divisi` (`nama_divisi`);

--
-- Ketidakleluasaan untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD CONSTRAINT `fk_tanggapan` FOREIGN KEY (`id_pengaduan`) REFERENCES `pengaduan` (`id_pengaduan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
