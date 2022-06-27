<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Masjid Keeren | <?= $title; ?></title>
  <!-- favicons Icons -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url("assets/front/") ?>/images/favicons/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url("assets/front/") ?>/images/favicons/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url("assets/front/") ?>/images/favicons/favicon-16x16.png" />
  <link rel="manifest" href="<?= base_url("assets/front/") ?>/images/favicons/site.webmanifest" />
  <meta name="description" content="Masjid" />

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="<?= base_url("assets/front/") ?>/vendors/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?= base_url("assets/front/") ?>/vendors/animate/animate.min.css" />
  <link rel="stylesheet" href="<?= base_url("assets/front/") ?>/vendors/fontawesome/css/all.min.css" />
  <link rel="stylesheet" href="<?= base_url("assets/front/") ?>/vendors/jarallax/jarallax.css" />
  <link rel="stylesheet" href="<?= base_url("assets/front/") ?>/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
  <link rel="stylesheet" href="<?= base_url("assets/front/") ?>/vendors/nouislider/nouislider.min.css" />
  <link rel="stylesheet" href="<?= base_url("assets/front/") ?>/vendors/nouislider/nouislider.pips.css" />
  <link rel="stylesheet" href="<?= base_url("assets/front/") ?>/vendors/odometer/odometer.min.css" />
  <link rel="stylesheet" href="<?= base_url("assets/front/") ?>/vendors/swiper/swiper.min.css" />
  <link rel="stylesheet" href="<?= base_url("assets/front/") ?>/vendors/halpes-icons/style.css" />
  <link rel="stylesheet" href="<?= base_url("assets/front/") ?>/vendors/tiny-slider/tiny-slider.min.css" />
  <link rel="stylesheet" href="<?= base_url("assets/front/") ?>/vendors/reey-font/stylesheet.css" />
  <link rel="stylesheet" href="<?= base_url("assets/front/") ?>/vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="<?= base_url("assets/front/") ?>/vendors/owl-carousel/owl.theme.default.min.css" />

  <!-- template styles -->
  <link rel="stylesheet" href="<?= base_url("assets/front/") ?>/css/halpes.css" />
  <link rel="stylesheet" href="<?= base_url("assets/front/") ?>/css/halpes-responsive.css" />
</head>

<body>
  <!-- /.preloader -->
  <div class="page-wrapper">
    <!-- Navbar -->
    <?php $this->load->view('layout/header.php'); ?>
    <!-- Navbar Akhir -->

    <!-- /.preloader -->
    <div class="page-wrapper">

      <!--Page Header Start-->
      <section class="page-header mt-5">
        <div class="page-header__bg bg-dark"></div>
        <!-- /.page-header__bg -->
        <div class="container">
          <h2>Kontak</h2>
        </div>
      </section>
      <!--Page Header End-->

      <!--Contact page Start-->
      <section class="contact-page">
        <div class="container">
          <div class="section-title text-center">
            <span class="section-title__tagline">Kontak Kami</span>
            <h2 class="section-title__title">
              Mari terhubung dan terjalin.
            </h2>
          </div>
          <div class="row">
            <div class="col">
              <div class="contact-page__left">
                <p class="contact-page__text">
                  Kebaikanmu, amal baik buatmu.
                </p>
                <div class="contact-page__contact-info">
                  <ul class="contact-page__contact-list list-unstyled">
                    <li>
                      <div class="icon">
                        <span class="icon-chat"></span>
                      </div>
                      <div class="text">
                        <p>Call Anytime</p>
                        <a href="tel:6289648255770">089648255770</a>
                      </div>
                    </li>
                    <!-- <li>
                      <div class="icon">
                        <span class="icon-message"></span>
                      </div>
                      <div class="text">
                        <p>Send Email</p>
                        <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                      </div>
                    </li> -->
                    <li>
                      <div class="icon">
                        <span class="icon-address"></span>
                      </div>
                      <div class="text">
                        <p>Alamat Masjid</p>
                        <h5>JL. Raya segneg, Kebon nanas, Rt.03 Rw.03 Kota Tangerang</h5>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- <div class="col-xl-6 col-lg-6">
              <div class="contact-page__form">
                <form action="assets/inc/sendemail.php" class="contact-page__main-form contact-form-validated">
                  <div class="row">
                    <div class="col-xl-12">
                      <div class="contact-page__input-box">
                        <input type="text" placeholder="Your name" name="name" />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-6">
                      <div class="contact-page__input-box">
                        <input type="email" placeholder="Email address" name="email" />
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="contact-page__input-box">
                        <input type="text" placeholder="Subject" name="subject" />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-12">
                      <div class="contact-page__input-box">
                        <input type="text" placeholder="Phone Number" name="phone" />
                      </div>
                    </div>
                    <div class="col-xl-12">
                      <div class="contact-page__input-box">
                        <textarea name="message" placeholder="Write message"></textarea>
                      </div>
                      <button type="submit" class="thm-btn contact-page__btn"><i class="fas fa-arrow-circle-right"></i>Send a Message</button>
                    </div>
                  </div>
                </form>
              </div>
            </div> -->
          </div>
        </div>
      </section>
      <!--Contact page End-->

      <!--Contact Page Google Map Start-->
      <section class="contact-page-google-map">
        <iframe alig src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31731.629794896126!2d106.58286988735202!3d-6.203722650249297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69feb80ac64649%3A0xb5cf191713859152!2sMasjid%20Al%20Muttaqin!5e0!3m2!1sid!2sid!4v1656302108544!5m2!1sid!2sid" width="1368" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </section>
      <!--Contact Page Google Map End-->

      <!--Site Footer One Start-->
      <?php $this->load->view("layout/footer.php") ?>
      <!--Site Footer One End-->
    </div>
    <!-- /.page-wrapper -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <script src="<?= base_url("assets/front/") ?>/vendors/jquery/jquery-3.5.1.min.js"></script>
    <script src="<?= base_url("assets/front/") ?>/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url("assets/front/") ?>/vendors/jarallax/jarallax.min.js"></script>
    <script src="<?= base_url("assets/front/") ?>/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="<?= base_url("assets/front/") ?>/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="<?= base_url("assets/front/") ?>/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="<?= base_url("assets/front/") ?>/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url("assets/front/") ?>/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="<?= base_url("assets/front/") ?>/vendors/nouislider/nouislider.min.js"></script>
    <script src="<?= base_url("assets/front/") ?>/vendors/odometer/odometer.min.js"></script>
    <script src="<?= base_url("assets/front/") ?>/vendors/swiper/swiper.min.js"></script>
    <script src="<?= base_url("assets/front/") ?>/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="<?= base_url("assets/front/") ?>/vendors/wnumb/wNumb.min.js"></script>
    <script src="<?= base_url("assets/front/") ?>/vendors/wow/wow.js"></script>
    <script src="<?= base_url("assets/front/") ?>/vendors/isotope/isotope.js"></script>
    <script src="<?= base_url("assets/front/") ?>/vendors/countdown/countdown.min.js"></script>
    <script src="<?= base_url("assets/front/") ?>/vendors/owl-carousel/owl.carousel.min.js"></script>
    <!-- template js -->
    <script src="<?= base_url("assets/front/") ?>/js/halpes.js"></script>
</body>

</html>