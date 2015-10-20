<?php include_once "common.php"; ?>
<!DOCTYPE html>
<?php echo "<html lang='" . $_GET['lang'] . "'"; ?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo $lang['PAGE_TITLE']; ?></title>

	<!-- CSS -->
	<!-- Bootstrap core CSS -->
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

	<!-- Owl Carousel -->
	<link href="assets/css/owl.theme.css" rel="stylesheet">
	<link href="assets/css/owl.carousel.css" rel="stylesheet">

	<!-- Magnific-popup lightbox -->
	<link href="assets/css/magnific-popup.css" rel="stylesheet">

	<!-- Simple text rotator -->
	<link href="assets/css/simpletextrotator.css" rel="stylesheet">

	<!-- Font Awesome CSS -->
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" media="screen">

	<!-- Animate css -->
	<link href="assets/css/animate.css" rel="stylesheet">

	<!-- Custom styles CSS -->
	<link href="assets/css/style.css" rel="stylesheet" media="screen">
</head>
<body>

	<div class="wrapper">

		<!-- Preloader -->

		<div id="preloader">
			<div id="status">
				<div class="status-mes"><h4><?php echo $lang['NAME']; ?></h4></div>
			</div>
		</div>

		<!-- Navigation start -->

		<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
			<div class="container">

				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Grant Mukai</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#intro"><?php echo $lang['intro']; ?></a></li>
						<li><a href="#profile"><?php echo $lang['profile']; ?></a></li>
						<!--<li><a href="#services"><-php echo $lang['services']; ?></a></li>-->
						<li><a href="#resume"><?php echo $lang['resume']; ?></a></li>
						<!--<li><a href="#portfolio"><-php echo $lang['portfolio']; ?></a></li>-->
						<!--<li><a href="#contact"><-php echo $lang['contact']; ?></a></li>-->
					</ul>
				</div>

			</div>
		</nav>

		<!-- Navigation end -->

		<!-- Intro section start -->

		<section id="intro" class="section">

			<div class="container">

				<div class="row">

					<div class="col-md-12">

						<div class="hello wow bounceInDown">
							<h1><?php echo $lang['hello_1']; ?></h1>
							<h3><span class="rotate"><?php echo $lang['hello_2']; ?></span></h3>
						</div>

						<a href="#profile">
							<div class="mouse-icon">
								<div class="wheel"></div>
							</div>
						</a>

					</div>

				</div><!-- .row -->

			</div><!-- .container -->

		</section>

		<!-- Intro section end -->

		<!-- Profile contact callout section -->

		<section id="profile-contact">

			<div class="container">

				<div class="row">

					<!--<div class="col-sm-4 wow bounceInLeft">
						<div class="profile-item">
							<i class="fa fa-envelope-o"></i>
							<h5><a href="#">markstone@some.com</a></h5>
						</div>
					</div>

					<div class="col-sm-4 wow bounceInUp">
						<div class="profile-item">
							<i class="fa fa-phone"></i>
							<h5>(1234) 1234-5678-1011</h5>
						</div>
					</div>

					<div class="col-sm-4 wow bounceInRight">
						<div class="profile-item">
							<i class="fa fa-map-marker"></i>
							<h5>144 Some Street, Some City, Some Country</h5>
						</div>
					</div>-->
					<div style="text-align:center;">
						<h4><?php echo $lang['select_country']; ?></h4>
						<h5>
						<a href="index.php?lang=en-US">United States</a>&nbsp;|&nbsp;
						<a href="index.php?lang=fr-CA">Qu&eacute;bec</a>&nbsp;|&nbsp;
						<a href="index.php?lang=en-CA">Canada</a>&nbsp;|&nbsp;
						<a href="index.php?lang=es-MX">M&eacute;xico</a>
						</h5>
					</div>
				</div>

			</div>

		</section>

		<!--Profile contact callout section -->

		<!-- Profile section start -->

		<section id="profile" class="section">

			<div class="container">

				<div class="row">

					<div class="col-md-12 headline wow bounceInDown">
						<h2><?php echo $lang['hello_1']; ?></h2>
						<p><?php echo $lang['hello_3']; ?></p>
					</div>

					<div class="col-md-3 col-sm-6 hidden-xs wow bounceInLeft">
						<img class="avatar" src="assets/images/photo.jpg" alt="">
					</div>

					<div class="col-md-3 col-sm-6 wow bounceInUp">

						<div class="profile-widget">
							<h3><?php echo $lang['skillset']; ?></h3>

							<h5>HTML5 / CSS3 / PHP5</h5>
							<div class="skill-bar">
								<div class="skill-rate-on"></div>
								<div class="skill-rate-on"></div>
								<div class="skill-rate-on"></div>
								<div class="skill-rate-off"></div>
							</div>

							<h5>MySQL / Microsoft SQL Server</h5>
							<div class="skill-bar">
								<div class="skill-rate-on"></div>
								<div class="skill-rate-on"></div>
								<div class="skill-rate-off"></div>
								<div class="skill-rate-off"></div>
							</div>

							<h5>Constant Contact / Informz / MailChimp</h5>
							<div class="skill-bar">
								<div class="skill-rate-on"></div>
								<div class="skill-rate-on"></div>
								<div class="skill-rate-on"></div>
								<div class="skill-rate-on"></div>
							</div>

							<h5>Premiere / After Effects / Photoshop / InDesign</h5>
							<div class="skill-bar">
								<div class="skill-rate-on"></div>
								<div class="skill-rate-on"></div>
								<div class="skill-rate-off"></div>
								<div class="skill-rate-off"></div>
							</div>
						</div>

						<div class="profile-widget">
							<h3><?php echo $lang['social_profiles']; ?></h3>
							<ul class="widget-social">
								<li><a href="http://www.twitter.com/grantmukai"><i class="fa fa-twitter fa-fw"></i></a></li>
								<li><a href="http://www.github.com/grantmukai"><i class="fa fa-github-alt"></i></a></li>
								<li><a href="http://www.linkedin.com/in/grantmukai"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="http://www.youtube.com/grantmukai"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>

					</div><!-- .col-md-3 -->

					<div class="col-md-6 col-sm-12 wow bounceInRight">
					<?php echo $lang['bio']; ?>
					</div>

				</div><!-- .row -->

			</div><!-- .container -->

		</section>

		<!-- Profile section end -->

		<!-- Callout section start -->

		<section id="stats" class="callout">

			<div class="container">

				<div class="row">

					<div class="col-md-3 col-sm-12 hidden-xs wow bounceInLeft">
						<h3><?php echo $lang['my_stats']; ?></h3>
					</div>

					<div class="col-md-3 col-sm-4 wow bounceInDown">
						<div class="stat">
							<div class="stat-icon">
								<h2><i class="fa fa-coffee hidden-xs"></i><span class="timer" data-to="2"></span></h2>
							</div>
							<h3><?php echo $lang['cups_of_coffee']; ?></h3>
						</div>
					</div>

					<div class="col-md-3 col-sm-4 wow bounceInUp">
						<div class="stat">
							<div class="stat-icon">
								<h2><i class="fa fa-code hidden-xs"></i><span class="timer" data-to="724"></span></h2>
							</div>
							<h3><?php echo $lang['lines_of_code']; ?></h3>
						</div>
					</div>

					<div class="col-md-3 col-sm-4 wow bounceInRight">
						<div class="stat">
							<div class="stat-icon">
								<h2><i class="fa fa-child hidden-xs"></i><span class="timer" data-to="24"></span></h2>
							</div>
							<h3><?php echo $lang['happy_customers']; ?></h3>
						</div>
					</div>

				</div><!-- .row -->

			</div><!-- .container -->

		</section>

		<!-- Callout section end -->

		<!-- Services section start

		<section id="services" class="section">

			<div class="container">

				<div class="row">

					<div class="col-md-12 headline wow bounceInDown">
						<h2>What i can do</h2>
						<p>My Services.</p>
					</div>

					<div class="col-md-12">

						<div class="row">

							<div class="col-sm-4 wow bounceInLeft">
								<div class="service">
									<div class="icon">
										<i class="fa fa-pencil"></i>
									</div>
									<h4>Text rotator</h4>
									<div class="text">
										<p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend.</p>
									</div>
								</div>
							</div>

							<div class="col-sm-4 wow bounceInUp">
								<div class="service">
									<div class="icon">
										<i class="fa fa-image"></i>
									</div>
									<h4>Slideshow</h4>
									<div class="text">
										<p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend.</p>
									</div>
								</div>
							</div>

							<div class="col-sm-4 wow bounceInRight">
								<div class="service">
									<div class="icon">
										<i class="fa fa-cog"></i>
									</div>
									<h4>Easy configure</h4>
									<div class="text">
										<p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend.</p>
									</div>
								</div>
							</div>

						</div>

						<div class="row">

							<div class="col-sm-4 wow bounceInUp" data-wow-delay=".2s">
								<div class="service">
									<div class="icon">
										<i class="fa fa-code"></i>
									</div>
									<h4>Clear code</h4>
									<div class="text">
										<p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend.</p>
									</div>
								</div>
							</div>

							<div class="col-sm-4 wow bounceInUp" data-wow-delay=".4s">
								<div class="service">
									<div class="icon">
										<i class="fa fa-desktop"></i>
									</div>
									<h4>Responsive design</h4>
									<div class="text">
										<p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend.</p>
									</div>
								</div>
							</div>

							<div class="col-sm-4 wow bounceInUp" data-wow-delay=".6s">
								<div class="service">
									<div class="icon">
										<i class="fa fa-life-ring"></i>
									</div>
									<h4>Support</h4>
									<div class="text">
										<p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend.</p>
									</div>
								</div>
							</div>

						</div>

					</div>

				</div>

			</div>

		</section>-->

		<!-- Services section end -->

		<!-- Callout section start -->

		<section class="callout">

			<div class="container">

				<div class="row">

					<div class="col-md-3 hidden-xs wow bounceInLeft">
						<h3><?php echo $lang['status_title']; ?></h3>
					</div>

					<div class="col-md-9 headline nomargin wow bounceInDown">
						<h3><?php echo $lang['status_1']; ?></h3>
						<p><?php echo $lang['status_2']; ?></p>
						<a href="#contact" class="btn btn-default btn-custom-2 callout-btn"><i class="fa fa-paper-plane-o icon-before"></i> <?php echo $lang['status_3']; ?></a>
					</div>

				</div><!-- .row -->

			</div><!-- .container -->

		</section>

		<!-- Callout section end -->

		<!-- Resume section start -->

		<section id="resume" class="section">

			<div class="container">

				<div class="row">

					<div class="col-md-12 headline wow bounceInDown">
						<h2><?php echo $lang['web_development']; ?></h2>
						<?php 
						mysql_connect("www.grantmukai.com:4579","cv_access","jenesaispasmaistuverras") or die(mysql_error());
						mysql_select_db("cv") or die(mysql_error());
						$rs = mysql_query("SELECT paragraph FROM intros WHERE language='$cv_lang' AND type = 'WEB';") or die(mysql_error());
						while(false !== ($row = mysql_fetch_assoc($rs)))
						{
							echo "<p>" . $row['paragraph'] . "</p>";
						}
						?>
						<p>My education and experience.</p>
					</div>

				</div><!-- .row -->

				<div class="row resume-items">

					<div class="col-md-3 wow bounceInLeft">
						<h3><?php echo $lang['experience']; ?></h3>
					</div>

					<div class="col-md-6 col-sm-8 resume-item wow bounceInUp">
						<h4>Front-end developer / php programmer</h4>
						<p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend.</p>
						<hr class="hidden-xs">
					</div>

					<div class="col-md-3 col-sm-4 resume-place wow bounceInRight">
						<h4><i class="fa fa-suitcase"></i></h4>
						<i class="fa fa-calendar"></i> 2013 - 2014
						<hr class="visible-xs">
					</div>

					<div class="col-md-6 col-md-offset-3 col-sm-8 resume-item wow bounceInUp">
						<h4>C# programmer</h4>
						<p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend.</p>
						<hr class="hidden-xs">
					</div>

					<div class="col-md-3 col-sm-4 resume-place wow bounceInRight">
						<h4><i class="fa fa-suitcase"></i> Microsoft</h4>
						<i class="fa fa-calendar"></i> 2013 - 2014
						<hr class="visible-xs">
					</div>

					<div class="col-md-6 col-md-offset-3 col-sm-8 resume-item wow bounceInUp">
						<h4>C# programmer</h4>
						<p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend.</p>
						<hr class="hidden-xs">
					</div>

					<div class="col-md-3 col-sm-4 resume-place wow bounceInRight">
						<h4><i class="fa fa-suitcase"></i> Microsoft</h4>
						<i class="fa fa-calendar"></i> 2013 - 2014
						<hr class="visible-xs">
					</div>

				</div><!-- .row -->

				<div class="row resume-items">

					<div class="col-md-3 wow bounceInLeft">
						<h3>Education</h3>
					</div>

					<div class="col-md-6 col-sm-8 resume-item wow bounceInUp">
						<h4>Computer science</h4>
						<p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend.</p>
						<hr class="hidden-xs">
					</div>

					<div class="col-md-3 col-sm-4 resume-place wow bounceInRight">
						<h4><i class="fa fa-suitcase"></i> Stanford University</h4>
						<i class="fa fa-calendar"></i> 2013 - 2014
						<hr class="visible-xs">
					</div>

					<div class="col-md-6 col-md-offset-3 col-sm-8 resume-item wow bounceInUp">
						<h4>Visual designer</h4>
						<p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend.</p>
						<hr class="hidden-xs">
					</div>

					<div class="col-md-3 col-sm-4 resume-place wow bounceInRight">
						<h4><i class="fa fa-suitcase"></i> St. Patrick University</h4>
						<i class="fa fa-calendar"></i> 2013 - 2014
						<hr class="visible-xs">
					</div>

				</div><!-- .row -->

				<div class="row">

					<div class="col-md-6 col-md-offset-3 wow bounceInUp">
						<a href="#" class="btn btn-default btn-custom-2"><i class="fa fa-cloud-download icon-before"></i> Download CV</a>
					</div>

				</div><!-- .row -->

			</div><!-- .container -->

		</section>

		<!-- Resume section end -->

		<!-- Callout section start -->

		<section id="clients" class="callout">

			<div class="container">

				<div class="row">

					<div class="col-md-3 hidden-xs wow bounceInLeft">
						<h3><?php echo $lang['customers']; ?></h3>
					</div>

					<div class="col-md-9 wow bounceInRight">

						<div id="owl-clients" class="owl-carousel">
							
							<div class="owl-item">
								<img src="assets/images/logo/apsa.jpg" alt="">
								<h4>American Political Science Association</h4>
							</div>

							<div class="owl-item">
								<img src="assets/images/logo/georgetown.png" alt="">
								<h4>Georgetown University</h4>
							</div>

							<div class="owl-item">
								<img src="assets/images/logo/iqsolutions.jpg" alt="">
								<h4>iQ Solutions</h4>
							</div>

							<div class="owl-item">
								<img src="assets/images/logo/wellesley.png" alt="">
								<h4>Wellesley Public Media</h4>
							</div>

							<div class="owl-item">
								<img src="assets/images/logo/patch.jpg" alt="">
								<h4>Patch.com</h4>
							</div>

							<div class="owl-item">
								<img src="assets/images/logo/wgbh.jpg" alt="">
								<h4>WGBH Educational Foundation</h4>
							</div>

						</div>

					</div><!-- .col-md-9 -->

				</div><!-- .row -->

			</div><!-- .container -->

		</section>

		<!-- Callout section end -->

		<!-- Portfolio section start

		<section id="portfolio" class="section">

			<div class="container">

				<div class="row">

					<div class="col-md-12 headline wow bounceInDown">
						<h2>Portfolio</h2>
						<p>My best works.</p>
					</div>

					<div class="col-md-4 col-sm-6 wow bounceInLeft">
						<a href="assets/images/p1.jpg" class="pop-up" title="Caption 1">
							<div class="portfolio-item">
								<div class="portfolio-item-preview">
									<img src="assets/images/p1.jpg" alt="">
								</div>
								<div class="portfolio-item-description">
									<h3>Some work</h3>
									<p>Category</p>
								</div>
							</div>
						</a>
					</div>

					<div class="col-md-4 col-sm-6 wow bounceInUp">
						<a href="https://vimeo.com/45830194" class="video-pop-up" title="Caption 2">
							<div class="portfolio-item">
								<div class="portfolio-item-preview">
									<img src="assets/images/p2.jpg" alt="">
								</div>
								<div class="portfolio-item-description">
									<h3>Some work</h3>
									<p>Category</p>
								</div>
							</div>
						</a>
					</div>

					<div class="col-md-4 col-sm-6 wow bounceInRight">
						<a href="assets/images/p3.jpg" class="pop-up" title="Caption 3">
							<div class="portfolio-item">
								<div class="portfolio-item-preview">
									<img src="assets/images/p3.jpg" alt="">
								</div>
								<div class="portfolio-item-description">
									<h3>Some work</h3>
									<p>Category</p>
								</div>
							</div>
						</a>
					</div>

					<div class="col-md-4 col-sm-6 wow bounceInUp" data-wow-delay=".2s">
						<a href="assets/images/p5.jpg" class="pop-up" title="Caption 4">
							<div class="portfolio-item">
								<div class="portfolio-item-preview">
									<img src="assets/images/p5.jpg" alt="">
								</div>
								<div class="portfolio-item-description">
									<h3>Some work</h3>
									<p>Category</p>
								</div>
							</div>
						</a>
					</div>

					<div class="col-md-4 col-sm-6 wow bounceInUp" data-wow-delay=".4s">
						<a href="assets/images/p8.jpg" class="pop-up" title="Caption 5">
							<div class="portfolio-item">
								<div class="portfolio-item-preview">	
									<img src="assets/images/p8.jpg" alt="">
								</div>
								<div class="portfolio-item-description">
									<h3>Some work</h3>
									<p>Category</p>
								</div>
							</div>
						</a>
					</div>

					<div class="col-md-4 col-sm-6 wow bounceInUp" data-wow-delay=".6s">
						<a href="assets/images/p6.jpg" class="pop-up" title="Caption 6">
							<div class="portfolio-item">
								<div class="portfolio-item-preview">
									<img src="assets/images/p6.jpg" alt="">
								</div>
								<div class="portfolio-item-description">
									<h3>Some work</h3>
									<p>Category</p>
								</div>
							</div>
						</a>
					</div>

				</div>

			</div>

		</section>-->

		<!-- Portfolio section end -->

		<!-- Contact section start 

		<section id="contact" class="section">

			<div class="container">

				<div class="row">

					<div class="col-md-12 headline wow bounceInLeft">
						<h2>Contact Us</h2>
						<p>Drop us a line or give us a ring. We love to hear you.</p>
					</div>

					<div class="col-md-6 wow bounceInUp">

						<p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend.</p>

						<ul class="icon-list">
							<li><i class="fa fa-fw fa-map-marker"></i>001 Some Street, Some City, US</li>
							<li><i class="fa fa-fw fa-phone"></i>123 4567 8910</li>
							<li><i class="fa fa-fw fa-envelope-o"></i><a href="mailto:">support@site.com</a></li>
							<li><i class="fa fa-fw fa-globe"></i><a href="">http://www.site.com</a></li>
						</ul>

					</div>

					<div class="col-md-6 wow bounceInRight">

						<form id="contact-form" role="form">

							<div class="form-group">
								<label class="sr-only" for="c_name">Name</label>
								<input type="text" id="c_name" class="form-control" name="c_name" placeholder="Name">
							</div>

							<div class="form-group">
								<label class="sr-only" for="c_email">Email address</label>
								<input type="email" id="c_email" class="form-control" name="c_email" placeholder="E-mail">
							</div>

							<div class="form-group">
								<textarea class="form-control" id="c_message" name="c_message" rows="7" placeholder="Your message"></textarea>
							</div>

							<button type="submit" class="btn btn-custom-1">
								<i class="fa fa-bullhorn icon-before"></i> Send it
							</button>

						</form>

						<div class="ajax-response"></div>

					</div>

				</div>

			</div>

		</section>-->

		<!-- Contact section end -->

		<!-- Footer start -->

		<footer id="footer">

			<div class="container">

				<div class="row">

					<div class="col-md-12">
						<p class="copy">
							&copy; <?php echo date('Y') . " " . $lang['copyright']; ?>
						</p>
					</div>

				</div><!-- .row -->

			</div><!-- .container -->

		</footer>

		<!-- Footer end -->

	</div><!-- .wrapper -->

	<!-- Javascript files -->
	<!-- jQuery -->
	<script src="assets/js/jquery-1.11.0.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- Background slider -->
	<script src="assets/js/jquery.backstretch.min.js"></script>
	<!-- OwlCarousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- Modal for portfolio -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- Text rotator -->
	<script src="assets/js/jquery.simple-text-rotator.min.js"></script>
	<!-- Waypoints -->
	<script src="assets/js/jquery.waypoints.js"></script>
	<!-- CountTo  -->
	<script src="assets/js/jquery.countTo.js"></script>
	<!-- WOW - Reveal Animations When You Scroll -->
	<script src="assets/js/wow.min.js"></script>   
	<!-- Smooth scroll -->
	<script src="assets/js/smoothscroll.js"></script>
	<!-- Fitvids -->
	<script src="assets/js/jquery.fitvids.js"></script>
	<!-- Custom scripts -->
	<script src="assets/js/custom.js"></script>

</body>
</html>
