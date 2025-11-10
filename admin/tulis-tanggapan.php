<?php
$id=$_GET['id'];
include'../koneksi.php';
$query=mysqli_query($koneksi,"SELECT*FROM pengaduan WHERE id_pengaduan='$id'");
$data=mysqli_fetch_array($query);

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
    <title>Tanggapan</title>
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
  <html data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <body>
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
            <a class="navbar-brand" href="index.html"> <img src="../assets/images/logo mi putih.png" alt="Logo" class="img-fluid logo-navbar" /> </a>
          </div>

          <!-- MENU -->
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">

              <li class="nav-item"><a href="../admin-page.php">Home</a></li>

            </ul>
          </div>
        </div>
      </nav>

<div class="main" >
        <section class="module contact-page-header bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">TANGGAPAN</h2>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-8">
                <h4 class="font-alt">Form Tulis Tanggapan</h4>
                <br />
                <form id="contactForm" role="form" method="post" action="simpan-tanggapan.php">
                  <div class="form-group">
                    <label class="" for="name">Id Pengaduan</label>
                    <input class="form-control" type="text" id="id_pengaduan" name="id_pengaduan" value="<?php echo $_GET['id'];?>" readonly />
                  </div>
                  <div class="form-group">
                    <label class="" for="name">Tanggal Tanggapan</label>
                    <input class="form-control" type="text" id="nim" name='tgl_tanggapan' value="<?php echo date ('Y-m-d');?>" readonly />
                  </div>
                  <div class="form-group">
                    <label class="" for="judul">Tanggapan</label>
                    <textarea class="form-control" type="text" id="title" name="tanggapan" placeholder="Masukkan Tanggapan" required="required"  style="height: 150px; text-transform: none; "></textarea>

                    <!-- <div class="form-group">
                      <label class="" for="name">Id Admin</label>
                      <input class="form-control" type="text" id="nim" name='id_admin' value="" readonly />
                    </div> -->
                  </div>

                  <div class="text-center">
                    <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">Submit</button>
                  </div>
                </form>
                <div class="ajax-response font-alt" id="contactFormResponse"></div>
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
                    <li><a href="../admin-page.php">Home</a></a></li>
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
    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDK2Axt8xiFYMBMDwwG1XzBQvEbYpzCvFU"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>