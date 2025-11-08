
      <div class="main" >
        <section class="module bg-dark-60 contact-page-header bg-dark" data-background="../assets/images/contact_bg.jpg">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">TANGGAPAN</h2>
                <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
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
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>
  </body>
</html>
