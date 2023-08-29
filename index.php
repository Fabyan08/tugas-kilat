<?php
session_start();
// echo $_SESSION['nama'];
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/icon.png" />
  <!-- Author Meta -->
  <meta name="author" content="CodePixar" />
  <!-- Meta Description -->
  <meta name="description" content="" />
  <!-- Meta Keyword -->
  <meta name="keywords" content="" />
  <!-- meta character set -->
  <meta charset="UTF-8" />
  <!-- Site Title -->
  <title>Tugas Kilat</title>
  <!--
		CSS
		============================================= -->
  <link rel="stylesheet" href="css/linearicons.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/themify-icons.css" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/owl.carousel.css" />
  <link rel="stylesheet" href="css/nice-select.css" />
  <link rel="stylesheet" href="css/nouislider.min.css" />
  <link rel="stylesheet" href="css/ion.rangeSlider.css" />
  <link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/main.css" />
</head>

<body>
  <!-- Start Header Area -->
  <header class="header_area sticky-header">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light main_box">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" width="200px" alt="" /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto">
              <li class="nav-item <?php
                                  if (isset($_GET['page']) == null) {
                                  } else {
                                    echo $_GET['page'] == 'home' ? 'active' : '';
                                  } ?>">
                <a class="nav-link" href="index.php?page=home">Home</a>
              </li>
              <li class="nav-item <?php
                                  if (isset($_GET['page']) == null) {
                                  } else {
                                    echo $_GET['page'] == 'chat' ? 'active' : '';
                                  } ?>">
                <a class=" nav-link" href="home.php?page=chat">Chat AI</a>
              </li>

              <li class="nav-item <?php
                                  if (isset($_GET['page']) == null) {
                                  } else {
                                    echo $_GET['page'] == 'ulasan' ? 'active' : '';
                                  } ?>">
                <a class="nav-link" href="home.php?page=ulasan">Ulasan</a>
                <?php
                if (isset($_SESSION['id_user']) == null) { ?>
              <li class="nav-item">
                <a class="nav-link" href="" data-toggle="modal" data-target="#login">Login</a>
              </li>
              <li class="nav-item">
                <a class="genric-btn primary circle" href="" data-toggle="modal" data-target="#registrasi">Registrasi</a>
              </li>
            </ul>
          <?php } else { ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <?php if ($_SESSION['level'] == 'admin') { ?>
              <?php } else { ?>
                <li class="nav-item">
                  <a href="home.php?page=cart" class="cart"><span class="ti-bag"></span></a>
                </li>
              <?php } ?>
              <li class="nav-item">
                <a href="home.php?page=profile" class="cart"><span class="ti-user"></span></a>
              </li>
            </ul>
          <?php } ?>
          <!-- <ul class="nav navbar-nav navbar-right">
          </ul> -->
          <?php if (isset($_SESSION['level'])) { ?>
            <?php if ($_SESSION['level'] == 'admin') { ?>
              <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                  <a class="genric-btn primary circle" target="_blank" href="admin">Halaman Admin</a>
                </li>
              </ul>
            <?php } ?>
          <?php } ?>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!-- End Header Area -->

  <!-- start banner Area -->
  <section class="banner-area">
    <div class="container">
      <div class="row fullscreen align-items-center justify-content-start">
        <div class="col-lg-12">
          <div class="owl-carousel">
            <!-- single-slide -->
            <div class="row single-slide align-items-center d-flex">
              <div class="col-lg-5 col-md-6">
                <div class="banner-content">
                  <h1>Kesulitan Kerjakan Tugas?</h1>
                  <p>
                    Tenang! Serahkan pada kami. Dengan TugasKilat, tugasmu
                    akan selesai dengan cepat jadi kamu bisa bersantai dan
                    nikmati harimu lebih tenang tanpa tanggungan beban.
                  </p>
                  <div class="add-bag d-flex align-items-center">
                    <a class="add-btn" href=""><span class="lnr lnr-arrow-down"></span></a>
                    <span class="add-text text-uppercase">Learn More</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="banner-img">
                  <img class="img-fluid" style="padding-top: 100px; width: 600px" src="img/header.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End banner Area -->

  <!-- start features Area -->
  <section class="features-area section_gap">
    <div class="container">
      <div class="row features-inner">
        <!-- single features -->
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-features">
            <div class="f-icon">
              <img src="img/features/f-icon1.png" alt="" />
            </div>
            <h6>Pengerjaan Cepat</h6>
            <p>Tak Perlu Khawatir, Tugasmu Pasti Cepat Selesai!</p>
          </div>
        </div>
        <!-- single features -->
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-features">
            <div class="f-icon">
              <img src="img/features/f-icon2.png" alt="" />
            </div>
            <h6>Pembayaran Aman</h6>
            <p>Pemabayaranmu Pasti Kami Jamin Aman!</p>
          </div>
        </div>
        <!-- single features -->
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-features">
            <div class="f-icon">
              <img src="img/features/f-icon3.png" alt="" />
            </div>
            <h6>Hasil Pasti Benar</h6>
            <p>Takut Salah? Tenang, Itu Tidak Akan Pernah Terjadi!</p>
          </div>
        </div>
        <!-- single features -->
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-features">
            <div class="f-icon">
              <img src="img/features/f-icon4.png" alt="" />
            </div>
            <h6>Kontak 24/7</h6>
            <p>Hubungi Kami Setiap Saat!</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end features Area -->

  <!-- Start category Area -->
  <section class="category-area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-12">
          <div class="row">
            <div class="col-lg-8 col-md-8">
              <div class="single-deal">
                <div class="overlay"></div>
                <img class="img-fluid w-100" src="img/1.jpg" alt="" />
                <a href="img/1.jpg" class="img-pop-up" target="_blank">
                  <div class="deal-details">
                    <h6 class="deal-title">Sneaker for Sports</h6>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-4">
              <div class="single-deal">
                <div class="overlay"></div>
                <img class="img-fluid w-100" src="img/2.jpg" alt="" />
                <a href="img/2.jpg" class="img-pop-up" target="_blank">
                  <div class="deal-details">
                    <h6 class="deal-title">Sneaker for Sports</h6>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-4">
              <div class="single-deal">
                <div class="overlay"></div>
                <img class="img-fluid w-100" src="img/3.jpg" alt="" />
                <a href="img/3.jpg" class="img-pop-up" target="_blank">
                  <div class="deal-details">
                    <h6 class="deal-title">Product for Couple</h6>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-lg-8 col-md-8">
              <div class="single-deal">
                <div class="overlay"></div>
                <img class="img-fluid w-100" src="img/4.jpg" alt="" />
                <a href="img/4.jpg" class="img-pop-up" target="_blank">
                  <div class="deal-details">
                    <h6 class="deal-title">Sneaker for Sports</h6>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-deal">
            <div class="overlay"></div>
            <img class="img-fluid w-100" src="img/5.jpg" alt="" />
            <a href="img/5.jpg" class="img-pop-up" target="_blank">
              <div class="deal-details">
                <h6 class="deal-title">Sneaker for Sports</h6>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End category Area -->

  <!-- start product Area -->
  <section class="owl-carousel section_gap">
    <!-- single product slide -->
    <div class="single-product-slider">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-title">
              <h1>Cek Jasa Kami!</h1>
              <p>Berikut ini beberapa jasa tugas yang bisa kamu gunakan!</p>
            </div>
          </div>
        </div>
        <div class="row">
          <?php
          include('config/koneksi.php');
          $sql = "SELECT * FROM item";
          $query = mysqli_query($koneksi, $sql);
          while ($data = mysqli_fetch_array($query)) {
          ?>
            <!-- single product -->
            <div class="col-lg-3 col-md-6">
              <div class="single-product">
                <img class="img-fluid" src="admin/page/item/img/<?= $data['gambar']; ?>" alt="" />
                <div class="product-details">
                  <h6><?= $data['nama']; ?></h6>
                  <div class="price">
                    <h6>Rp <?= number_format($data['harga'], 0, ',', '.'); ?></h6>
                    <!-- <h6 class="l-through">$210.00</h6> -->
                  </div>
                  <form action="pages/keranjang/tambah-keranjang.php" method="POST">
                    <?php if (isset($_SESSION['id_user']) == null || $_SESSION['level'] == 'admin') { ?>
                      <div class="prd-bottom">
                        <button hidden></button>
                      <?php } else { ?>
                        <input type="text" hidden value="<?= $_SESSION['id_user']; ?>" name="id_user">
                        <input type="text" hidden value="<?= $data['id_item']; ?>" name="id_item">
                        <input type="text" hidden value="1" name="qty">
                        <input type="text" value="<?= $data['harga']; ?>" name="harga" hidden>
                        <div class="prd-bottom">
                          <button class="genric-btn primary circle arrow" type="submit">Tambah Keranjang<span class="lnr lnr-arrow-right"></span></button>
                        <?php } ?>
                  </form>

                </div>
              </div>
            </div>
        </div>
      <?php } ?>
      </div>
    </div>
    </div>
  </section>
  <!-- end product Area -->
  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login Page</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="auth/proses-login.php" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input required name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input required type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="genric-btn secondary circle" data-dismiss="modal">Close</button>
          <button type="submit" class="genric-btn primary circle">Login</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <div class="modal fade" id="registrasi" tabindex="-1" role="dialog" aria-labelledby="registrasi" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registrasi Page</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="auth/proses-regis.php" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input required type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input required type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">No HP</label>
              <input required type="number" name="no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Alamat</label>
              <textarea required class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input required type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="genric-btn secondary circle" data-dismiss="modal">Close</button>
          <button type="submit" class="genric-btn primary circle">Registrasi</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- start footer Area -->
  <footer class="footer-area section_gap">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>About Us</h6>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore dolore magna aliqua.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>Newsletter</h6>
            <p>Stay update with our latest</p>
            <div class="" id="mc_embed_signup">
              <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
                <div class="d-flex flex-row">
                  <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email" />

                  <button class="click-btn btn btn-default">
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                  </button>
                  <div style="position: absolute; left: -5000px">
                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text" />
                  </div>

                  <!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
                </div>
                <div class="info"></div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-footer-widget mail-chimp">
            <h6 class="mb-20">Instragram Feed</h6>
            <ul class="instafeed d-flex flex-wrap">
              <li><img src="img/i1.jpg" alt="" /></li>
              <li><img src="img/i2.jpg" alt="" /></li>
              <li><img src="img/i3.jpg" alt="" /></li>
              <li><img src="img/i4.jpg" alt="" /></li>
              <li><img src="img/i5.jpg" alt="" /></li>
              <li><img src="img/i6.jpg" alt="" /></li>
              <li><img src="img/i7.jpg" alt="" /></li>
              <li><img src="img/i8.jpg" alt="" /></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>Follow Us</h6>
            <p>Let us be social</p>
            <div class="footer-social d-flex align-items-center">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-dribbble"></i></a>
              <a href="#"><i class="fa fa-behance"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
        <p class="footer-text m-0">
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;
          <script>
            document.write(new Date().getFullYear());
          </script>
          All rights reserved | This template is made with
          <i class="fa fa-heart-o" aria-hidden="true"></i> by
          <a href="https://colorlib.com" target="_blank">Colorlib</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>
    </div>
  </footer>
  <!-- End footer Area -->

  <script src="js/vendor/jquery-2.2.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/nouislider.min.js"></script>
  <script src="js/countdown.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <!--gmaps Js-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
  <script src="js/gmaps.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>