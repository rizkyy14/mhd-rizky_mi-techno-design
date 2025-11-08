<div class="main">
        <section class="module bg-dark-60 contact-page-header bg-dark" data-background="assets/images/contact_bg.jpg">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">LIHAT PENGADUAN</h2>
                <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
              </div>
            </div>
          </div>
        </section>
        
        <section class="module">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h2 class="module-title font-alt" style="text-transform: none;">Latest blog posts</h2>
        <div class="module-subtitle font-serif" style="text-transform: none;">
          A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
        </div>
      </div>
    </div>

    <div class="row multi-columns-row post-columns">
      <?php
        include 'koneksi.php';
        $sql = "SELECT * FROM pengaduan ORDER BY id_pengaduan DESC";
        $query = mysqli_query($koneksi, $sql);
        while ($data = mysqli_fetch_array($query)) {
          $isi_singkat = substr($data['isi_laporan'], 0, 100);
          if (strlen($data['isi_laporan']) > 100) {
            $isi_singkat .= '...';
          }
      ?>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="post mb-20">
            <div class="post-thumbnail">
              <img src="foto/<?=$data['foto']?>" alt="Blog-post Thumbnail" />
            </div>
            <div class="post-header font-alt" style="text-transform: none;">
              <h2 class="post-title" style="text-transform: none;"><?= htmlspecialchars($data['tgl_pengaduan']) ?></h2>
              <div class="">NIM : <?= htmlspecialchars($data['nim']) ?></div>
            </div>
            <div class="post-entry">
              <p><?= htmlspecialchars($isi_singkat) ?></p>
            </div>
            <div class="post-more">
              <h4><a href="?url=detail-pengaduan&id=<?= $data['id_pengaduan'] ?>">Detail</a></h4>
            </div>
          </div>
        </div>
      <?php } ?>
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