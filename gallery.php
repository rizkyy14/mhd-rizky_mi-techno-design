<?php
include 'koneksi.php'
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
    <title>MI TECNO TES</title>
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
                <a class="dropdown-toggle" href="#" data-toggle="dropdown">Home</a>
                <ul class="dropdown-menu">
                  <li><a href="#about" class="section-scroll">Tentang Kami</a></li>
                  <li><a href="#dokumentasi" class="section-scroll">Dokumentasi Kegiatan</a></li>
                  <li><a href="divisi.php?nama=BPH+%28Badan+Pengurus+Harian%29" target="_blank" class="section-scroll">Divisi</a></li>
                  <li><a href="#anggota" class="section-scroll">Anggota</a></li>
                  <li><a href="#progja" class="section-scroll">Program Kerja</a></li>
                  <li><a href="#kontak" class="section-scroll">Kontak</a></li>
                  <li><a href="https://www.instagram.com/mipolmed/" target="_blank">Instagram</a></li>
                </ul>
              </li>
              <li class="nav-item"><a href="loginadmin.php" target="_blank">Login Admin</a></li>
              <li class="nav-item"><a href="tulis-pengaduan.php" target="_blank">Pengaduan</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <section class="home-section home-full-height bg-dark-30" id="home" data-background="assets/images/DSC02009.jpg">
        <div
          class="video-player"
          data-property="{videoURL:'https://www.youtube.com/watch?v=bNucJgetMjE', containment:'.home-section', startAt:18, mute:false, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:25}"
        ></div>
        <div class="video-controls-box">
          <div class="container">
            <div class="video-controls"><a class="fa fa-volume-up" id="video-volume" href="#">&nbsp;</a><a class="fa fa-pause" id="video-play" href="#">&nbsp;</a></div>
          </div>
        </div>
        <div class="titan-caption">
          <div class="caption-content">
            <div class="font-alt mb-10 titan-title-size-1">Kabinet Evolutionnaire</div>
            <div class="font-alt titan-title-size-4">HMPS</div>
            <div class="font-alt mb-10 titan-title-size-3">Manajemen Informatika</div>
            <div class="font-alt mb-30 titan-title-size-1">2024/2025</div>
          </div>
        </div>
      </section>
      <div class="main">
        <div class="container mt-80" id="gallery">
  <h2 class="text-center font-alt mb-60" style="color:#555;">Galeri Kegiatan HMPS MI</h2>
  
  <div class="row multi-columns-row">
    <?php
      $query = mysqli_query($koneksi, "
        SELECT foto.*, divisi.nama_divisi 
        FROM foto 
        INNER JOIN divisi ON foto.divisi = divisi.nama_divisi
        ORDER BY foto.tgl_unggah DESC
      ");

      while($data = mysqli_fetch_array($query)){
    ?>
    <div class="col-sm-6 col-md-4 mb-40">
      <div class="post">
        <div class="post-thumbnail">
          <img src="foto_kegiatan/<?php echo $data['lokasifile']; ?>" 
               alt="<?php echo $data['judulfoto']; ?>" 
               class="img-responsive img-rounded"
               style="width:100%; height:250px; object-fit:cover;">
        </div>
        <div class="post-header text-center bg-dark" style="padding:15px; border-radius:0 0 10px 10px; color:#e8d5c1;">
          <h4 class="post-title text-uppercase" style="margin-bottom:5px;"><?php echo $data['judulfoto']; ?></h4>
          <p style="font-size:13px; color:#ccc;"><?php echo $data['deskripsifoto']; ?></p>
          <span class="label label-primary" style="font-size:12px;"><?php echo $data['nama_divisi']; ?></span>
          <p style="margin-top:5px; font-size:12px; color:#aaa;"><?php echo date('d M Y', strtotime($data['tgl_unggah'])); ?></p>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>
<section class="module" id="progja">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Latest blog posts</h2>
                <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
              </div>
            </div>
            <div class="row multi-columns-row post-columns">
                 <?php
               $query = mysqli_query($koneksi, "
               SELECT foto.*, divisi.nama_divisi 
             FROM foto 
               INNER JOIN divisi ON foto.divisi = divisi.nama_divisi
             ORDER BY foto.tgl_unggah DESC
              ");

                while($data = mysqli_fetch_array($query)){
                  ?>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-20">
                  <div class="post-thumbnail">
                    <img src="foto_kegiatan/<?php echo $data['lokasifile']; ?>" alt="<?php echo $data['judulfoto']; ?>" />
                  </div>
                  <div class="post-header font-alt">
                    <h4 class="post-title"><?php echo $data['judulfoto']; ?></h4>
                    <div class="post-meta"><?php echo $data['judulfoto']; ?></div>
                  </div>
                  <div class="post-entry">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                  </div>
                  <div class="post-more"><a class="more-link" href="">Read more</a></div>
                </div>
              </div>
              <?php } ?>
            </div>
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
                    <li><a href="#">Realistic Business Card Mockup</a></li>
                    <li><a href="#">Eco bag Mockup</a></li>
                    <li><a href="#">Bottle Mockup</a></li>
                    <li><a href="#">Our trip to the Alps</a></li>
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
