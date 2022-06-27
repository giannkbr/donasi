<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Masjid Keeren</title>
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
	<!-- <link rel="stylesheet" href="sweetalert2.min.css"> -->
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

		<!-- Carpusel -->
		<section class="main-slider main-slider-three">
			<div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
          "effect": "fade",
          "pagination": {
              "el": "#main-slider-pagination",
              "type": "bullets",
              "clickable": true
            },
          "navigation": {
              "nextEl": "#main-slider__swiper-button-next",
              "prevEl": "#main-slider__swiper-button-prev"
          },
          "autoplay": {
              "delay": 5000
          }}'>
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="image-layer" style="background-image: url(assets/front/images/backgrounds/masjid.jpeg)"></div>
						<div class="image-layer-overlay"></div>
						<!-- /.image-layer -->
						<div class="container">
							<div class="row">
								<div class="col-lg-8">
									<div class="main-slider__content">
										<h2>
											Masjid Al-Muttaqin.
										</h2>
										<p>Kebaikann datang tanpa ada halangan, mari berinfaq demi masa depan yang lebih baik.</p>

									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="image-layer" style="background-image: url(assets/front/images/backgrounds/rame.jpeg)"></div>
						<div class="image-layer-overlay"></div>
						<!-- /.image-layer -->
						<div class="container">
							<div class="row">
								<div class="col-lg-8">
									<div class="main-slider__content">
										<h2>
											Masjid Al-Muttaqin.
										</h2>

										<div class="main-slider-three-shape">
											<img src="<?= base_url("assets/front/") ?>/images/shapes/main-slider-3-shape-1.png" alt="" />
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- If we need navigation buttons -->
				<div class="swiper-pagination" id="main-slider-pagination"></div>
				<div class="main-slider__nav">
					<div class="swiper-button-prev" id="main-slider__swiper-button-next"><i class="icon-right-arrow icon-left-arrow"></i></div>
					<div class="swiper-button-next" id="main-slider__swiper-button-prev"><i class="icon-right-arrow"></i></div>
				</div>
			</div>
		</section>
		<!-- Carousel Akhir -->

		<!--Help Them Two Start-->
		<section class="help-them-two">
			<div class="container">
				<div class="row">
					<div class="col-xl-6">
						<div class="help-them-two__left">
							<div class="help-them-two-bg" style="background-image: url(assets/front/images/backgrounds/bg2.jpg)"></div>
							<div class="help-them-two__img">
								<img src="<?= base_url("assets/front/") ?>/images/backgrounds/rame.jpeg" alt="" />
								<!-- <a href="https://www.youtube.com/watch?v=i9E_Blai8vk" class="help-them-two__video-btn video-popup"><i
										class="fa fa-play"></i></a> -->
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="help-them-two__right">
							<div class="section-title text-left">
								<span class="section-title__tagline">Kami membantu mereka</span>
								<h2 class="section-title__title">
									Masjid Al-Muttaqin
								</h2>
							</div>
							<div class="help-them-two__list-box">
								<ul class="help-them-two__list list-unstyled">
									<li>
										<div class="help-them-two__icon-box">
											<i class="fas fa-arrow-circle-right"></i>
										</div>
										<div class="help-them-two__text-box">
											<h4>Best fundraising platform</h4>
										</div>
									</li>
									<li>
										<div class="help-them-two__icon-box">
											<i class="fas fa-arrow-circle-right"></i>
										</div>
										<div class="help-them-two__text-box">
											<h4>We can help to educate them</h4>
										</div>
									</li>
								</ul>
								<ul class="help-them-two__list help-them-two__list-two list-unstyled">
									<li>
										<div class="help-them-two__icon-box">
											<i class="fas fa-arrow-circle-right"></i>
										</div>
										<div class="help-them-two__text-box">
											<h4>Best fundraising platform</h4>
										</div>
									</li>
									<li>
										<div class="help-them-two__icon-box">
											<i class="fas fa-arrow-circle-right"></i>
										</div>
										<div class="help-them-two__text-box">
											<h4>We can help to educate them</h4>
										</div>
									</li>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Help Them Two End-->

		<!--Causes Three Start-->
		<section class="causes-three">
			<div class="container">
				<div class="causes-three__top">
					<div class="causes-three__top-title">
						<div class="section-title text-left">
							<span class="section-title__tagline">Amal dan Kebaikan</span>
							<h2 id="section-title__title" class="section-title__title">
								Kebaikanmu akan membawa rezeki baik padamu.
							</h2>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="col-xl-12">
						<div class="causes-three__carousel owl-theme owl-carousel">
							<!--Causes Three Single-->
							<?php
							foreach ($donasi as $row) {
							?>
								<div class="causes-one__single">
									<div class="causes-one__img">
										<div class="causes-one__img-box">
											<img style="width: 300px; height: 250px;" src="<?php echo base_url('/assets/front/images/donasi/' . $row->img1); ?>" alt="" />
											<!-- <a href="<?php echo base_url('/donasi/detail/' . $row->id_donasi); ?>">
											<i class="fa fa-plus"></i>
										</a> -->
										</div>
										<div class="causes-one__category">
											<span><?php echo $row->kategori_donasi; ?></span>
										</div>
									</div>
									<div class="causes-one__content">
										<h3 class="causes-one__title">
											<a href="<?php echo base_url('/donasi/detail/' . $row->id_donasi); ?>">
												<?php echo ($row->nama_donasi); ?>
											</a>
										</h3>
										<p class="causes-one__text"><?php echo ($row->deskripsi_donasi); ?></p>
									</div>
									<div class="causes-one__progress">
										<div class="bar">
											<?php
											$total = $row->perolehan_donasi / $row->target_donasi * 100;
											?>
											<div class="bar-inner count-bar" data-percent="<?= round($total) ?>%">
												<div class="count-text"><?= round($total) ?>%</div>
											</div>
										</div>
										<div class="causes-one__goals mt-2">
											<p><span>&nbsp;<?php echo 'Rp.' . nominal($row->perolehan_donasi); ?></span> Terkumpul</p><br>
										</div>
										<div class="causes-one__goals mt-2">
											<p><span>&nbsp;<?php echo 'Rp.' . nominal($row->target_donasi); ?></span> Target</p><br>
										</div>
									</div>
								</div>
							<?php
							}
							?>
						</div>
					</div>
				</div>

			</div>
		</section>
		<!--Causes Three End-->

		<!--News Three Start-->
		<!--News Three End-->

		<!--Site Footer One Start-->
		<?php $this->load->view("layout/footer.php") ?>
		<!--Site Footer One End-->
	</div>
	<!-- /.page-wrapper -->

	<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
	<?php
	if ($this->session->flashdata('message_success')) {
	?>
		<script>
			swal({
				text: "<?php echo $this->session->flashdata('message_success'); ?>",
				icon: "success",
				button: true,
				timer: 99999
			});
		</script>
	<?php
	}
	?>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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