<?php
include '../koneksi.php';

// Ambil data divisi dari tabel divisi
$divisi = mysqli_query($koneksi, "SELECT nama_divisi FROM divisi ORDER BY nama_divisi ASC");
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--  
    Document Title
    =============================================
    -->
    <title>Tambah Anggota</title>
    <!--  
    Favicons
    =============================================
    -->

    <link rel="manifest" href="/manifest.json" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href="../assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Template specific stylesheets-->
    <link href="../https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet" />
    <link href="../https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet" />
    <link href="../https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" />
    <link href="../assets/lib/animate.css/animate.css" rel="stylesheet" />
    <link href="../assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="../assets/lib/et-line-font/et-line-font.css" rel="stylesheet" />
    <link href="../assets/lib/flexslider/flexslider.css" rel="stylesheet" />
    <link href="../assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="../assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet" />
    <link href="../assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet" />
    <link href="../assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet" />
    <!-- Main stylesheet and color file-->
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/nav2.css" />
    <link id="color-scheme" href="../assets/css/colors/default.css" rel="stylesheet" />
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <!-- LOGO -->
            <a class="navbar-brand" href="#"> <img src="../assets/images/logo mi putih.png" alt="Logo" class="img-fluid logo-navbar" /> </a>
          </div>

          <!-- MENU -->
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="nav-item"><a href="../admin-page.php">Home</a></li>
              <li class="nav-item"><a href="tambah-divisi.php">Data Divisi</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="main">
        <section class="module  contact-page-header bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">INPUT ANGGOTA</h2>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <h4 class="font-alt">Form Pengisian Data Anggota</h4>
                <br />
                <form method="post" action="proses-tambah-anggota.php" enctype="multipart/form-data">
                  
                  <div class="form-group">
                    <label>Divisi</label>
                    <select class="form-control" name="divisi" required>
                      <option value="">-- Pilih Divisi --</option>
                      <?php while ($d = mysqli_fetch_assoc($divisi)): ?>
                        <option value="<?= htmlspecialchars($d['nama_divisi']) ?>">
                          <?= htmlspecialchars($d['nama_divisi']) ?>
                        </option>
                      <?php endwhile; ?>
                    </select>
                  </div>

                  <div id="anggota-wrapper">
                    <div class="anggota-item row" style="margin-bottom: 10px">
                      <div class="col-md-4">
                        <input type="text" style="text-transform: none" class="form-control" name="nama_anggota[]" placeholder="Nama Anggota" required />
                      </div>
                      <div class="col-md-4">
                        <input type="text"style="text-transform: none" class="form-control" name="jabatan[]" placeholder="Jabatan" required />
                      </div>
                      <div class="col-md-4">
                        <input type="file" class="form-control foto-input" name="foto_anggota[]" accept="image/*" required />
                        <img class="preview-img" style="display:none; margin-top:5px; max-width:100px; border-radius:5px; text-transform:none;">
                      </div>
                    </div>
                  </div>

                  <button type="button" class="btn btn-success btn-sm" onclick="tambahAnggota()">+ Tambah Anggota</button>
                  <button type="button" class="btn btn-danger btn-sm" onclick="hapusAnggota()">- Hapus Anggota</button>
                  <hr />

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-round">Simpan</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
        <div class="module-small bg-primary" id="bawah">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <div class="widget">
                  <img src="../assets/images/logo mi putih.png" alt="" /><br />
                  <h1 class="font-alt">HMPS MANAJEMEN INFORMATIKA</h1>
                  <h4>Jalan Almamater No. 1, Kampus USU Padang Bulan, Medan, Sumatera Utara - 20155</h4>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="widget">
                  <h3 class="font-alt">Links</h3>
                  <ul class="icon-list">
                    <li><a href="#home">Home</a></li>
 <li><a href="#about" class="section-scroll">Tentang Kami</a></li>
                  <li><a href="divisi.php?nama=BPH+%28Badan+Pengurus+Harian%29" target="_blank" class="section-scroll">Divisi</a></li>
                  <li><a href="#struktur" class="section-scroll">Struktur Organisasi</a></li>
                  <li><a href="gallery.php" class="section-scroll">Gallery</a></li>
                  <li><a href="https://www.instagram.com/mipolmed/" target="_blank">Instagram</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer bg-primary">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12 text-center">
                <p class="copyright font-alt">&copy; 2025&nbsp;<a href="index.html">HMPS MI</a>, All Rights Reserved</p>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <div class="scroll-up">
        <a href="#totop"><i class="fa fa-angle-double-up"></i></a>
      </div>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="../assets/lib/jquery/dist/jquery.js"></script>
    <script src="../assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/lib/wow/dist/wow.js"></script>
    <script src="../assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="../assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="../assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="../assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="../assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="../assets/lib/smoothscroll.js"></script>
    <script src="../assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="../assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDK2Axt8xiFYMBMDwwG1XzBQvEbYpzCvFU"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/showimage.js"></script>
 <script>
      // Fungsi nambah anggota baru
      function tambahAnggota() {
        const wrapper = document.getElementById('anggota-wrapper');
        const div = document.createElement('div');
        div.className = 'anggota-item row';
        div.style.marginBottom = '10px';
        div.innerHTML = `
          <div class="col-md-4">
            <input type="text" style="text-transform: none" class="form-control" name="nama_anggota[]" placeholder="Nama Anggota" required>
          </div>
          <div class="col-md-4">
            <input type="text" style="text-transform: none" class="form-control" name="jabatan[]" placeholder="Jabatan" required>
          </div>
          <div class="col-md-4">
            <input type="file" style="text-transform: none" class="form-control foto-input" name="foto_anggota[]" accept="image/*" required>
            <img class="preview-img" style="display:none; margin-top:5px; max-width:100px; border-radius:5px;">
          </div>`;
        wrapper.appendChild(div);
      }

      // Fungsi hapus anggota terakhir
      function hapusAnggota() {
        const wrapper = document.getElementById('anggota-wrapper');
        if (wrapper.children.length > 1) {
          wrapper.removeChild(wrapper.lastElementChild);
        }
      }

      // Fungsi preview gambar (real-time)
      document.addEventListener('change', function(e) {
        if (e.target.classList.contains('foto-input')) {
          const file = e.target.files[0];
          const preview = e.target.parentElement.querySelector('.preview-img');

          if (file) {
            const reader = new FileReader();
            reader.onload = function(event) {
              preview.src = event.target.result;
              preview.style.display = 'block';
            };
            reader.readAsDataURL(file);
          } else {
            preview.src = '';
            preview.style.display = 'none';
          }
        }
      });
    </script>

  </body>
</html>
