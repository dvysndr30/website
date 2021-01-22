	<!--footer-->
	<div class="footer text-center">
		<div class="container">
			<!--logo2-->
			<div class="logo2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
				<a href="home.php">
					<h2>C<span>ilacap Food</span></h2>
				</a>
			<a href="https://kominfo.cilacapkab.go.id" class="flag_tag2">&copy; 2019 Dinas Komunikasi Dan Informatika. Hak Cipta Dilindungi oleh Undang-Undang. </a>
			</div>

         
		</div>
	</div>





	<!--end-smooth-scrolling-->
	<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;">
		</span></a>
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

	<!-- swipe box js -->
	<script src="<?= base_url('assets/') ?>js/jquery.swipebox.min.js"></script>
	<script type="text/javascript">
		jQuery(function ($) {
			$(".swipebox").swipebox();
		});
	</script>
	<!-- //swipe box js -->
	<!-- script-for-menu -->
	<!-- script-for-menu -->

	<div class="clearfix"></div>
	<script>
		$(document).ready(function () {
			var navoffeset = $(".header-bottom").offset().top;
			$(window).scroll(function () {
				var scrollpos = $(window).scrollTop();
				if (scrollpos >= navoffeset) {
					$(".header-bottom").addClass("fixed");
				} else {
					$(".header-bottom").removeClass("fixed");
				}
			});

		});
	</script>


	<script src="<?= base_url('assets/') ?>js/responsiveslides.min.js"></script>

	<script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>

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
	</script>
	<!--banner Slider starts Here-->
	
</body>

</html>