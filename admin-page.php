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
    <title>Admin Page</title>
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
                  <li><a href="divisi.html" target="_blank" class="section-scroll">Divisi</a></li>
                  <li><a href="#anggota" class="section-scroll">Anggota</a></li>
                  <li><a href="#progja" class="section-scroll">Program Kerja</a></li>
                  <li><a href="#kontak" class="section-scroll">Kontak</a></li>
                  <li><a href="https://www.instagram.com/mipolmed/" target="_blank">Instagram</a></li>
                </ul>
              </li>
              <li class="nav-item"><a href="admin/pengaduan.php" target="_blank">Pengaduan</a></li>
              <li class="nav-item"><a href="aksi_logout.php">Logout</a></li>
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
            <div class="font-alt mb-10 titan-title-size-1">CMS</div>
            <div class="font-alt titan-title-size-4">Content</div>
            <div class="font-alt mb-10 titan-title-size-3">Management System</div>
            <div class="font-alt mb-30 titan-title-size-1">HMPS MI</div>
          </div>
        </div>
      </section>
      <div class="main">
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-8">
                <h4 class="font-alt">Pengisian data profil</h4>
                <br />
                <form id="contactForm" role="form" method="post" action="proses-profil.php">
                  <div class="form-group"> <label for="nama_kabinet">Nama Kabinet</label> <input class="form-control" type="text" id="nama_kabinet" name="nama_kabinet" required /> 
                </div>

                <div class="form-group"> <label for="periode">Periode</label> <input class="form-control" type="text" id="periode" name="periode" placeholder="Contoh: 2024/2025" required /> </div> 
                
                <div class="form-group"> <label for="gambar_header">Gambar Header</label> <input type="file" class="form-control" id="gambar_header" name="gambar_header" required /> </div> 
                
                <div class="form-group"> <label for="gambar_tengah">Gambar Tengah</label> <input type="file" class="form-control" id="gambar_tengah" name="gambar_tengah" required /> </div> 
                
                <div class="form-group"> <label for="profil">Profil</label> <textarea class="form-control" id="profil" name="profil" rows="4" required></textarea> </div> 
                
                <div class="form-group"> <label>Motto 1</label> <input class="form-control" type="text" name="motto1" required /> </div> 
                
                <div class="form-group"> <label>Motto 2</label> <input class="form-control" type="text" name="motto2" required /> </div> 
                
                <div class="form-group"> <label>Motto 3</label> <input class="form-control" type="text" name="motto3" required /> </div> 
                
                <div class="form-group"> <label for="sejarah">Sejarah</label> <textarea class="form-control" id="sejarah" name="sejarah" rows="4" required></textarea> </div> 
                
                <div class="form-group"> <label for="visi">Visi</label> <textarea class="form-control" id="visi" name="visi" rows="2" required></textarea> </div> 
                
                <div class="form-group"> <label for="misi">Misi</label> <textarea class="form-control" id="misi" name="misi" rows="2" required></textarea> </div> 
                
                <div class="text-center"> <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">Submit</button> </div> </form> <div class="ajax-response font-alt" id="contactFormResponse"></div> </div> 
                
                <div class="col-sm-4"> <h4 class="font-alt" style="margin-top: 3rem">Preview Gambar</h4> <hr /> 
                
                <div class="work-item"> 
                <img id="previewHeader" src="assets/images/post-1.jpg" alt="Header Preview" style="width:100%; margin-bottom:10px;" /> 
                <img id="previewTengah" src="assets/images/post-1.jpg" alt="Tengah Preview" style="width:100%;" /> </div> 
              </div> 
            </div>
            </div>
          </div>
        </section>
        
         <section class="module" id="inputanggota">
          <div class="container">
            <div class="row">
              <div class="col-sm-8">
                <h4 class="font-alt">Data Anggota</h4>
                <br />
                <form id="contactForm" role="form" method="post" action="proses-profil.php">
                  <div class="form-group"> <label for="nama_anggota">Nama Anggota</label> <input class="form-control" type="text" id="nama_anggota" name="nama_anggota" required /> 
                </div>
                  <div class="form-group"> <label for="nim">Nim</label> <input class="form-control" type="text" id="nim" name="nim" required /> 
                </div>

                <div class="form-group"> <label for="divisi">Divisi</label> <input class="form-control" type="text" id="divisi" name="divisi"  required /> </div> 

                <div class="form-group"> <label for="jabatan">Jabatan</label> <input class="form-control" type="text" id="jabatan" name="jabatan"  required /> </div> 
                
                <div class="form-group"> <label for="foto_anggota">Foto Anggota</label> <input type="file" class="form-control" id="gambar_header" name="gambar_header" required /> </div> 
                
                <div class="text-center"> <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">Submit</button> </div> </form> <div class="ajax-response font-alt" id="contactFormResponse"></div> </div> 
                
                <div class="col-sm-4"> <h4 class="font-alt" style="margin-top: 3rem">Preview Gambar</h4> <hr /> 
                
                <div class="work-item"> 
                <img id="previewHeader" src="assets/images/post-1.jpg" alt="Header Preview" style="width:100%; margin-bottom:10px;" /> 
                <img id="previewTengah" src="assets/images/post-1.jpg" alt="Tengah Preview" style="width:100%;" /> </div> 
              </div> 
            </div>
            </div>
          </div>
        </section>

        <section class="module" id="progja">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Latest blog posts</h2>
                <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
              </div>
            </div>
            <div class="row multi-columns-row post-columns">

              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-20">
                  <div class="post-thumbnail">
                    <a href="#"><img src="assets/images/post-3.jpg" alt="Blog-post Thumbnail" /></a>
                  </div>
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">We in New Zealand</a></h2>
                    <div class="post-meta">By&nbsp;<a href="#">Dylan Woods</a>&nbsp;| 5 November | 15 Comments</div>
                  </div>
                  <div class="post-entry">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                  </div>
                  <div class="post-more">
                    <h4>
                      <a href="?url=detail-pengaduan&id=<?=$data['id_pengaduan'] ?>">Detail</a>
                    </h4>
                    <h4>
                      <a href="?url=admin/tulis-tanggapan&id=<?=$data['id_pengaduan'] ?>">Tanggapi</a>
                    </h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="module-small bg-dark" id="bawah">
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
        <hr class="divider-d" />
        <footer class="footer bg-dark">
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
