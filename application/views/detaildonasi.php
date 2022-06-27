<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Masjid Keeren | <?= $title;?></title>
	<!-- favicons Icons -->
	<link rel="apple-touch-icon" sizes="180x180"
		href="<?= base_url("assets/front/")?>/images/favicons/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32"
		href="<?= base_url("assets/front/")?>/images/favicons/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16"
		href="<?= base_url("assets/front/")?>/images/favicons/favicon-16x16.png" />
	<link rel="manifest" href="<?= base_url("assets/front/")?>/images/favicons/site.webmanifest" />
	<meta name="description" content="Masjid" />

	<!-- fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com" />
	<link
		href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
		rel="stylesheet" />
    <link rel="stylesheet" href="sweetalert2.min.css">
	<link rel="stylesheet" href="<?= base_url("assets/front/")?>/vendors/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?= base_url("assets/front/")?>/vendors/animate/animate.min.css" />
	<link rel="stylesheet" href="<?= base_url("assets/front/")?>/vendors/fontawesome/css/all.min.css" />
	<link rel="stylesheet" href="<?= base_url("assets/front/")?>/vendors/jarallax/jarallax.css" />
	<link rel="stylesheet"
		href="<?= base_url("assets/front/")?>/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
	<link rel="stylesheet" href="<?= base_url("assets/front/")?>/vendors/nouislider/nouislider.min.css" />
	<link rel="stylesheet" href="<?= base_url("assets/front/")?>/vendors/nouislider/nouislider.pips.css" />
	<link rel="stylesheet" href="<?= base_url("assets/front/")?>/vendors/odometer/odometer.min.css" />
	<link rel="stylesheet" href="<?= base_url("assets/front/")?>/vendors/swiper/swiper.min.css" />
	<link rel="stylesheet" href="<?= base_url("assets/front/")?>/vendors/halpes-icons/style.css" />
	<link rel="stylesheet" href="<?= base_url("assets/front/")?>/vendors/tiny-slider/tiny-slider.min.css" />
	<link rel="stylesheet" href="<?= base_url("assets/front/")?>/vendors/reey-font/stylesheet.css" />
	<link rel="stylesheet" href="<?= base_url("assets/front/")?>/vendors/owl-carousel/owl.carousel.min.css" />
	<link rel="stylesheet" href="<?= base_url("assets/front/")?>/vendors/owl-carousel/owl.theme.default.min.css" />

	<!-- template styles -->
	<link rel="stylesheet" href="<?= base_url("assets/front/")?>/css/halpes.css" />
	<link rel="stylesheet" href="<?= base_url("assets/front/")?>/css/halpes-responsive.css" />
</head>

<body>
	<!-- /.preloader -->
	<div class="page-wrapper">
		<!-- Navbar -->
		<?php $this->load->view('layout/header.php');?>
		<!-- Navbar Akhir -->

		<!-- /.preloader -->
		<div class="page-wrapper">
			<!--Page Header Start-->
			<section class="page-header mt-5">
				<div class="page-header__bg bg-dark mt-5"></div>
				<!-- /.page-header__bg -->
				<div class="container">
					<h2>Details Donasi</h2>
				</div>
			</section>
			<!--Page Header End-->

			<!--News Details Start-->
			<section class="news-details">
				<div class="container">
					<?php
          foreach($donasi as $row) {
        ?>
					<div class="row">
						<div class="col-xl-12 col-lg-7">
							<div class="news-details__left">
								<div class="news-details__img">
									<img src="<?php echo base_url('assets/front/images/donasi/'.$row->img1); ?>" alt="" />
								</div>
								<div class="news-details__content">
									<h2 class="news-details__title"><?php echo $row->nama_donasi; ?></h2>
									<div class="pt-3 pb-5">
										<h4><span class="h5"><?php echo 'Rp.'.nominal($row->perolehan_donasi); ?></span> terkumpul dari <?php echo 'Rp.'.nominal($row->target_donasi); ?></h4>
										<div class="d-grid gap-2 pt-3">
											<button class="btn btn-primary py-3" type="button">
												<a href="<?php echo base_url('/Donatur/register/'.$row->id_donasi); ?>"><h3 class="text-white">Donasi</h3></a>
											</button>
										</div>
									</div>
									<p class="news-details__text-one">
										<?php echo $row->deskripsi_donasi; ?>
									</p>
								</div>
								<div class="news-details__bottom">
									<div class="news-details__social-list">
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-facebook-square"></i></a>
										<a href="#"><i class="fab fa-dribbble"></i></a>
										<a href="#"><i class="fab fa-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>
            </div>
					</div>
				<?php
        }
        ?>
				</div>
			</section>
			<!--News Details End-->

			<!--Site Footer One Start-->
			<?php $this->load->view("layout/footer.php")?>
			<!--Site Footer One End-->
		</div>
		<!-- /.page-wrapper -->

		<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

		<script src="<?= base_url("assets/front/")?>/vendors/jquery/jquery-3.5.1.min.js"></script>
		<script src="<?= base_url("assets/front/")?>/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="<?= base_url("assets/front/")?>/vendors/jarallax/jarallax.min.js"></script>
		<script src="<?= base_url("assets/front/")?>/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
		<script src="<?= base_url("assets/front/")?>/vendors/jquery-appear/jquery.appear.min.js"></script>
		<script src="<?= base_url("assets/front/")?>/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
		<script src="<?= base_url("assets/front/")?>/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="<?= base_url("assets/front/")?>/vendors/jquery-validate/jquery.validate.min.js"></script>
		<script src="<?= base_url("assets/front/")?>/vendors/nouislider/nouislider.min.js"></script>
		<script src="<?= base_url("assets/front/")?>/vendors/odometer/odometer.min.js"></script>
		<script src="<?= base_url("assets/front/")?>/vendors/swiper/swiper.min.js"></script>
		<script src="<?= base_url("assets/front/")?>/vendors/tiny-slider/tiny-slider.min.js"></script>
		<script src="<?= base_url("assets/front/")?>/vendors/wnumb/wNumb.min.js"></script>
		<script src="<?= base_url("assets/front/")?>/vendors/wow/wow.js"></script>
		<script src="<?= base_url("assets/front/")?>/vendors/isotope/isotope.js"></script>
		<script src="<?= base_url("assets/front/")?>/vendors/countdown/countdown.min.js"></script>
		<script src="<?= base_url("assets/front/")?>/vendors/owl-carousel/owl.carousel.min.js"></script>
		<!-- template js -->
		<script src="<?= base_url("assets/front/")?>/js/halpes.js"></script>
    <script src="sweetalert2.min.js"></script>
</body>

</html>
