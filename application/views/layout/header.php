<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="navbar">
	<div class="container">
		<a class="navbar-brand bt fw-bolder" href="<?= base_url("home") ?>">Masjid Al-Muttaqin.</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ms-auto">
				<li class="nav-item">
					<a class="nav-link bt active" aria-current="page" href="<?= base_url("home") ?>">Beranda</a>
				</li>
				<li class="nav-item">
					<a class="nav-link bt" href="<?= base_url("about") ?>">Tentang Kami</a>
				</li>
				<li class="nav-item">
					<a class="nav-link bt" href="<?= base_url('home#section-title__title') ?>">Amal dan Kebaikan</a>
				</li>
				<!-- <li class="nav-item">
					<a class="nav-link bt" href="">Kegiatan</a>
				</li>
        <li class="nav-item">
					<a class="nav-link bt" href="">Blog</a>
				</li> -->
				<li class="nav-item">
					<a class="nav-link bt" href="<?= base_url("kontak") ?>">Kontak Kami</a>
				</li>
			</ul>
		</div>
	</div>
</nav>