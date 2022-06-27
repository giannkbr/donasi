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
    	<!--Page Header Start-->
			<section class="page-header mt-5">
				<div class="page-header__bg bg-dark mt-5"></div>
				<!-- /.page-header__bg -->
				<div class="container">
					<h2>Form Donasi</h2>
				</div>
			</section>
			<!--Page Header End-->
		<!--main-->

		<div class="container">
			<div class="row">
				<?php
        foreach($donasi as $row) {
        ?>
				<div class="mt-inner">
					<h1 class="font-bold font-l text-left" style="margin-top: 50px">Silakan Masukan Data Anda</h1>
					<br>
					<div class="alert alert-success col-md-12 mb-3">

						<form method="post" action="<?php echo base_url('Donatur/create') ?>">
							<input type="hidden" name="id_donasi" value="<?php echo $row->id_donasi; ?>">

							<div class="form-group">
								<h4 class="elip font-bold"><b><?php echo $row->nama_donasi; ?></b></h4>
								<label for="exampleInputEmail1">Donasi</label>
								<input type="text" name="jumlah_donasi" class="form-control" placeholder="Rp." id="maskMoney"
									required />
							</div>
							<br>
							<div class="form-group">
								<label for="exampleInputEmail1">Nama Lengkap</label>
								<input type="text" name="nama_donatur" class="form-control" placeholder="Nama Lengkap" required>
							</div>
							<div class="form-group">
								<label>No Telepon (WhatsApp)</label>
								<input type="text" name="no_telp_donatur" class="form-control" class="no_telp_donatur"
									placeholder="No Telepon" required>
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Pesan</label>
								<textarea type="text" name="pesan_donatur" class="form-control" placeholder="Pesan" rows="3"
									required></textarea>
							</div>
							<button type="submit" class="btn btn-primary btn-lg btn-block mt-2">Lanjut Pembayaran</button>
						</form>
						<?php
            }
            ?>
					</div>
				</div>
			</div>
		</div>
	</div>

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
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
        if($this->session->flashdata('message_success')) {
    ?>
<script>
	swal({
		text: "<?php echo $this->session->flashdata('message_success'); ?>",
		icon: "success",
		button: true,
		timer: 99999
	});

</script>
<script type="text/javascript">
	$(document).ready(function () {
		$('#maskMoney').maskMoney({
			prefix: 'Rp. ',
			thousands: '.',
			decimal: ',',
			precission: 0
		});
	});

</script>
<script type="text/javascript">
	$('.btn').on('click', function () {
		var $this = $(this);
		$this.button('loading');
	});

</script>
<?php
        }
    ?>



</body>

</html>
