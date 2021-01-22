<!DOCTYPE HTML>
<html>

<head>
	<title>Cilacap Food</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		body {
			font-family: Arial, Helvetica, sans-serif;
		}

		.navbar {
			width: 100%;
			background-color: #555;
			overflow: auto;
		}

		.navbar a {
			float: left;
			padding: 12px;
			color: white;
			text-decoration: none;
			font-size: 17px;
		}

		.navbar a:hover {
			background-color: #000;
		}

		.active {
			background-color: #4CAF50;
		}

		@media screen and (max-width: 500px) {
			.navbar a {
				float: none;
				display: block;
			}
		}
	</style>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<script type="applisalonion/x-javascript">
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
	</script>
	<link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<link href="assets/css/iconeffects.css" rel='stylesheet' type='text/css' />
	<link href="assets/css/style.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="assets/css/swipebox.css">
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="assets/js/move-top.js"></script>
	<script type="text/javascript" src="assets/js/easing.js"></script>
	<!--/web-font-->
	<link href='//fonts.googleapis.com/css?family=Italianno' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Merriweather+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<!--/script-->
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<script src="assets/js/jquery.swipebox.min.js"></script>
	<script type="text/javascript">
		jQuery(function ($) {
			$(".swipebox").swipebox();
		});
	</script>

	<link href="assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="assets/js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
</head>

<body>
	<!--start-home-->
	<div class="banner" id="home">
		<div class="" data-wow-duration="" data-wow-delay=""></div>

		<li>
			<div class="banner-slider">
				<div class="callbacks_container">

					<ul class="rslides" id="slider4">
						<li>
							<div class="banner-info">
								<h3 class="" data-wow-duration="1s" data-wow-delay=".3s">Sugeng Rawuh</h3>
								<p class="" data-wow-duration="1s" data-wow-delay=".3s">Panganan Inyongan</p>
								<div class="" data-wow-duration="1s" data-wow-delay=".2s"></div>
								<span class="" data-wow-duration="1s" data-wow-delay=".3s">Hadir di Cilacap</span>
							</div>
						</li>
						<li>
							<div class="banner-info">
								<h3 class="wow slideInUp" data-wow-duration="1s" data-wow-delay=".3s">Makanan Ringan</h3>
								<p class="wow slideInDown" data-wow-duration="1s" data-wow-delay=".3s">Nikmat</p>
								<span class="wow slideInUp" data-wow-duration="1s" data-wow-delay=".3s">Hadir di Cilacap</span>
							</div>
						</li>
						<li>
							<div class="banner-info">
								<h3 class="wow slideInUp" data-wow-duration="1s" data-wow-delay=".3s">Makanan Berat</h3>
								<p class="wow slideInDown" data-wow-duration="1s" data-wow-delay=".3s">Maregi</p>
								<span class="wow slideInUpslideInLeft" data-wow-duration="1s" data-wow-delay=".3s">Hadir di
									Cilacap</span>
							</div>
						</li>
						<li>
							<div class="banner-info">
								<h3 class="wow slideInUp" data-wow-duration="1s" data-wow-delay=".3s">Snack & Cemilan</h3>
								<p class="wow slideInDown" data-wow-duration="1s" data-wow-delay=".3s">Ganjel Perut</p>
								<span class="wow slideInUpslideInLeft" data-wow-duration="1s" data-wow-delay=".3s">Hadir di
									Cilacap</span>
							</div>
						</li>
						<li>
							<div class="banner-info">
								<h3 class="wow slideInUp" data-wow-duration="1s" data-wow-delay=".3s">Oleh-Oleh</h3>
								<p class="wow slideInDown" data-wow-duration="1s" data-wow-delay=".3s">Ngangeni</p>
								<span class="wow slideInUpslideInLeft" data-wow-duration="1s" data-wow-delay=".3s">Hadir di
									Cilacap</span>
							</div>
						</li>
						<li>
							<div class="banner-info">
								<h3 class="wow slideInUp" data-wow-duration="1s" data-wow-delay=".3s">Minuman</h3>
								<p class="wow slideInDown" data-wow-duration="1s" data-wow-delay=".3s">Nyegeri</p>
								<span class="wow slideInUpslideInLeft" data-wow-duration="1s" data-wow-delay=".3s">Hadir di
									Cilacap</span>
							</div>
						</li>
					</ul>

					<!--banner Slider starts Here-->
					<script src="assets/js/responsiveslides.min.js"></script>
					<script>
						// You can also use "$(window).load(function() {"
						$(function () {
							// Slideshow 4
							$("#slider4").responsiveSlides({
								auto: true,
								pager: true,
								nav: false,
								speed: 500,
								namespace: "callbacks",
								before: function () {
									$('.events').append("<li>before event fired.</li>");
								},
								after: function () {
									$('.events').append("<li>after event fired.</li>");
								}
							});
						});
					</script>I
				</div>
			</div>
		</li>
	</div>

	<div class="gallery" id="gallery">
		<div class="container">
			<h3 class="tittle">Cari Tahu Yuk !!</h3>
			<div class="arrows-serve"><img src="<?= base_url('assets/') ?>images/border.png" alt="border"></div>
			<div class="gallery-grids">
				<div class="col-md-6 baner-top wow fadeInLeft animated" data-wow-delay=".5s">
					<a href="assets/images/Lupis.jpg" class="b-link-stripe b-animate-go  swipebox">
						<div class="gal-spin-effect vertical ">
							<img src="assets/images/Lupis.jpg" alt=" " />
							<div class="gal-text-box">
								<div class="info-gal-con">
									<h4>Lupis</h4>
									<span class="separator"></span>
									<p>Lupis merupakan makanan khas Indonesia terutama area Jawa. Ada dua bentuk lupis yang umum ditemui:
										segitiga atau bulat memanjang seperti lontong. Lupis dibuat dari beras ketan yang dimasak lalu
										dibungkus dengan daun pisang.</p>
									<span class="separator"></span>

								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6 baner-top wow fadeInRight animated" data-wow-delay=".5s">
					<a href="assets/images/g1.jpg" class="b-link-stripe b-animate-go  swipebox">
						<div class="gal-spin-effect vertical ">
							<img src="assets/images/klepon.jpg" alt=" " />
							<div class="gal-text-box">
								<div class="info-gal-con">
									<h4>Klepon</h4>
									<span class="separator"></span>
									<p>Klepon adalah makanan tradisional yang terbuat dari tepung ketan berbentuk bulat dan berisi gula
										merah serta biasanya bagian luarnya ditaburi parutan kelapa. Ukuran klepon biasanya sebesar kuning
										telur serta berwarna hijau muda.</p>
									<span class="separator"></span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<br>
				<div class="col-md-6 baner-top wow fadeInRight animated" data-wow-delay=".5s">
					<a href="assets/images/Lanthing.jpg" class="b-link-stripe b-animate-go  swipebox">
						<div class="gal-spin-effect vertical ">
							<img src="assets/images/Lanthing.jpg" alt=" " />
							<div class="gal-text-box">
								<div class="info-gal-con">
									<h4>Lanthing</h4>
									<span class="separator"></span>
									<p>Lanthing merupakan makanan tradisional yang terbuat dari singkong</p>
									<span class="separator"></span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6 baner-top wow fadeInLeft animated" data-wow-delay=".5s">
					<a href="assets/images/Gembus.jpg" class="b-link-stripe b-animate-go  swipebox">
						<div class="gal-spin-effect vertical ">
							<img src="assets/images/Gembus.jpg" alt=" " />
							<div class="gal-text-box">
								<div class="info-gal-con">
									<h4>Gembus</h4>
									<span class="separator"></span>
									<p>Gembus merupakan salah satu jenis makanan yang terbuat dari singkong</p>
									<span class="separator"></span>

								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<br>
		<a href="<?= base_url('kategori') ?>" class="btn btn-success">More</a>
	</div>


	<div class="gallery" id="gallery">
		<div class="container">
			<h3 class="tittle">Rekomendasi Restoran di Cilacap terbaru</h3>
			<div class="arrows-serve"><img src="<?= base_url('assets/') ?>images/border.png" alt="border"></div>
      <?php foreach($kuliner as $kul) : ?>
			<div class="col-md-6 baner-top wow fadeInLeft animated" data-wow-delay=".5s">
				<a href="home/kategori_detail/<?= $kul['id_kuliner'] ?>" class="">
					<div class="gal-spin-effect vertical ">
						<img src="assets/images/uploaded/kuliner/<?= $kul['gambar']; ?>" alt=" " />
						<div class="gal-text-box">
							<div class="info-gal-con">
								<h4><?= $kul['nama_kuliner']; ?></h4>
								<span class="separator"></span>
								<p><?= $kul['alamat']; ?></p>
								<span class="separator"></span>

							</div>
						</div>
					</div>
				</a>
			</div>
      <?php endforeach; ?>
		</div>
	</div>




	<!--start-smooth-scrolling-->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
			var defaults = {
			    containerID: 'toTop', // fading element id
			  containerHoverID: 'toTopHover', // fading element hover id
			  scrollSpeed: 1200,
			  easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!--end-smooth-scrolling-->
	<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;">
		</span></a>

</body>

</html>