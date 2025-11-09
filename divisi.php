<?php
include 'koneksi.php';

// Ambil nama divisi dari URL, kalau nggak ada pakai default kosong
$namaDivisi = isset($_GET['nama']) ? urldecode($_GET['nama']) : '';
$namaDivisiEsc = mysqli_real_escape_string($koneksi, $namaDivisi);

// Query anggota & progja divisi ini
$queryAnggota = mysqli_query($koneksi, "SELECT * FROM anggota WHERE divisi='$namaDivisiEsc' ORDER BY id_anggota ASC");
$queryProgja  = mysqli_query($koneksi, "SELECT * FROM progja WHERE nama_divisi='$namaDivisiEsc' ORDER BY id_progja ASC");

// Ambil info divisi untuk header (logo, nama)
$queryInfoDivisi = mysqli_query($koneksi, "SELECT * FROM divisi WHERE nama_divisi='$namaDivisiEsc'");
$infoDivisi = mysqli_fetch_assoc($queryInfoDivisi);
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr" style="scroll-behavior: smooth">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--  
    Document Title
    =============================================
    -->
    <title>DIVISI</title>
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
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" />
    <link href="assets/lib/animate.css/animate.css" rel="stylesheet" />
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet" />
    <link href="assets/lib/flexslider/flexslider.css" rel="stylesheet" />
    <link href="assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet" />
    <link href="assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/navbar.css" />
    <!-- Main stylesheet and color file-->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet" />
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <!-- LOGO -->
            <a class="navbar-brand" href="index.html"> <img src="assets/images/logo mi putih.png" alt="Logo" class="img-fluid logo-navbar" /> </a>
          </div>

          <!-- MENU -->
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown">Divisi</a>
                <ul class="dropdown-menu">
                  <?php
                        $allDivisi = mysqli_query($koneksi, "SELECT * FROM divisi ORDER BY nama_divisi ASC");
                        while ($d = mysqli_fetch_assoc($allDivisi)) {
                            $namaLink = urlencode($d['nama_divisi']);
                            echo '<li><a href="divisi.php?nama='.$namaLink.'">'.$d['nama_divisi'].'</a></li>';
                        }
                        ?>
                </ul>
              </li>
              <li class="nav-item"><a href="index.php">Back</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <section class="home-section home-full-height bg-dark-30" id="home" data-background="assets/images/IMG_5388.jpg">
        <div class="titan-caption">
          <div class="caption-content">
            <?php if ($infoDivisi): ?>
                    <div class="font-alt mb-10 titan-title-size-4"><?= htmlspecialchars($infoDivisi['nama_divisi']) ?></div>
                    <div class="module-icon">
                        <img src="logo_divisi/<?= $infoDivisi['logo_divisi'] ?>" alt="Logo Divisi" style="height:150px;">
                    </div>
                <?php else: ?>
                    <div class="font-alt mb-10 titan-title-size-1">Divisi Tidak Ditemukan</div>
                <?php endif; ?>
          </div>
        </div>
      </section>

      <div class="main">
        <section class="module sliding-portfolio">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="module-title font-alt">Anggota</h2>
            </div>
          </div>
        </section>

         <div class="testimonials-slider pt-100 pb-140">
  <ul class="slides">
    <?php while ($anggota = mysqli_fetch_assoc($queryAnggota)): ?>
    <li>
      <div class="container">
        
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 text-center">
            <blockquote class="testimonial-text font-alt">
              <img src="foto_anggota/<?= $anggota['foto_anggota'] ?>" 
                   alt="<?= $anggota['nama_anggota'] ?>" 
                   class="img-fluid" style="max-height:500px; border-radius:10px;" />
            </blockquote>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-sm-4 col-sm-offset-4 text-center">
            <div class="testimonial-author">
              <div class="testimonial-caption font-alt">
                <div class="testimonial-title"><?= $anggota['nama_anggota'] ?></div>
                <div class="testimonial-title"><?= $anggota['jabatan'] ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </li>
    <?php endwhile; ?>
  </ul>
</div>

<section class="module" id="menu">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="module-title font-alt">Program Kerja</h2>
      </div>
    </div>

    <?php
    // Hanya tampilkan program kerja untuk divisi yang dipilih ($namaDivisiEsc)
    if (!empty($namaDivisiEsc)) {
        $queryProgja = mysqli_query($koneksi, "
          SELECT * FROM progja 
          WHERE TRIM(LOWER(nama_divisi)) = LOWER('$namaDivisiEsc')
          ORDER BY id_progja ASC
        ");

        if (mysqli_num_rows($queryProgja) > 0) {
            echo '<div class="row multi-columns-row">';
            while ($progja = mysqli_fetch_assoc($queryProgja)) {
                echo '
                <div class="col-sm-6">
                  <div class="menu">
                    <div class="row">
                      <div class="col-sm-12">
                        <h4 class="menu-title font-alt">' . htmlspecialchars($progja['nama_progja']) . '</h4>
                      </div>
                    </div>
                  </div>
                </div>';
            }
            echo '</div>';
        } else {
            echo '<p class="font-alt">Tidak ada program kerja untuk divisi ini.</p>';
        }
    }
    ?>
  </div>
</section>



          
        <div class="module-small bg-primary" id="bawah">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <div class="widget">
                  <img src="assets/images/logo mi putih.png" alt="" /><br />
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
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
