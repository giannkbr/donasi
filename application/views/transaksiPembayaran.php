<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Masjid Keeren</title>
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
					<h2>Form Pembayaran</h2>
				</div>
			</section>
			<!--Page Header End-->
			<div class="container">
				<div class="row" style="margin-bottom: 8%;">
					<div class="mt-inner">
						<div>
							<div class="alert alert-info mt-2" role="alert">
								<a>Terima kasih atas donasinya</a>
							</div>
							<div class="row">
								<div class="col-md-7">
									<div class="alert alert-success">
										<h4><b>Tata cara pembayaran :</b></h4>
										<li>Mohon Melakukan pembayaran sesuai <b> Nominal Donasi </b> yang tercantum list disamping
											(transfer
											bank)</li>
										<li>Setelah melakukan Transfer, konfirmasi segera setelah pembayaran dengan mencantumkan bukti <b>
												Foto
												& Kode Transaksi </b>melalui whatsapp</li>
										<li>Whatsapp : 23234234324</li>
										<br>
										<h4><b>Daftar Rekening Bank :</b></h4>
										<li>BSM : 708 2604 191 (Masjid Kereen)</li>
										<li>MUAMALAT : 701 0055 055 (Masjid Kereen)</li>
										<li>MANDIRI : 142 000 6977 291 (Masjid Kereen)</li>
										<li>back : 5200 242 400 (Masjid Kereen)</li>
									</div>

								</div>
								<div class="col-md-5">
									<div class="alert alert-warning" role="alert">
										<?php
                                foreach($tmpTransaksi as $rows) {
                            ?>

										<li>
											Nama : <b><?php echo $rows->nama_donatur; ?></b>
										</li>
										<br>
										<li>
											Nominal Donasi : <b><?php echo'Rp.'.nominal($rows->jumlah_donasi); ?></b>
										</li>
										<br>
										<li>
											Kode Transaksi : <b><?php echo $rows->kode_transaksi; ?></b>
										</li>
									</div>
								</div>
								<div class="col-md-5">
									<div class="alert alert-info">
										Unggah Bukti Transfer
										<form action="<?= base_url('Transaksi/uploadbukti') ?>" method="post" enctype="multipart/form-data">
											<input type="hidden" name="id_transaksi" value="<?php echo $rows->id_transaksi; ?>">
											<input type="file" name="bukti_transfer">
											<button class="mt-2 btn btn-primary">Submit</button>
										</form>
									</div>
								</div>
								<?php
                                }
                            ?>
							</div>

						</div>
					</div>


					<!--Site Footer One Start-->
					<!--Site Footer One End-->
			</div></div>
			<?php $this->load->view("layout/footer.php")?>
			<!-- /.page-wrapper -->

			<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

			<script src="<?= base_url("assets/front/")?>/vendors/jquery/jquery-3.5.1.min.js"></script>
			<script src="<?= base_url("assets/front/")?>/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="<?= base_url("assets/front/")?>/vendors/jarallax/jarallax.min.js"></script>
			<script src="<?= base_url("assets/front/")?>/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
			<script src="<?= base_url("assets/front/")?>/vendors/jquery-appear/jquery.appear.min.js"></script>
			<script src="<?= base_url("assets/front/")?>/vendors/jquery-circle-progress/jquery.circle-progress.min.js">
			</script>
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
			<script type="text/javascript" src="<?php echo base_url('assets/front/js/simple.money.format.js'); ?>"></script>
			<script>
				$('.format').simpleMoneyFormat();

			</script>

</body>

</html>
