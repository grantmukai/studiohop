<?php include_once "common.php";
$link = new mysqli("www.grantmukai.com:4579","cv_access","jenesaispasmaistuverras","cv");
$langueLocale = str_replace("-","_",$cv_lang);
echo "<!DOCTYPE html>";
echo "<html lang='{$cv_lang}'>";
if (isset($imageVille)) {
    $quelleVille = mt_rand(0,$villeMax);
	include "assets/images/villes/".$cv_lang."/credits.php";
}  
?>
<head>
	<!--[if IE]>
	<script type="text/javascript">
	window.location = "ie.php";
	</script>
	<![endif]-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo $lang['metadesc']; ?>">
	<meta name="author" content="Grant Kiyoshi Mukai">
	
	<title><?php echo $lang['PAGE_TITLE']; ?></title>

	<!-- CSS -->
	<!-- Coeur Bootstrap CSS -->
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

	<!-- Owl Carousel -->
	<link href="assets/css/owl.theme.css" rel="stylesheet">
	<link href="assets/css/owl.carousel.css" rel="stylesheet">

	<!-- Simple text rotator -->
	<link href="assets/css/simpletextrotator.css" rel="stylesheet">

	<!-- Font Awesome CSS -->
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" media="screen">

	<!-- Animate css -->
	<link href="assets/css/animate.css" rel="stylesheet">

	<!-- Custom styles CSS -->
	<link href="assets/css/style.css" rel="stylesheet" media="screen">
	
	<!-- jQuery -->
	<script src="assets/js/jquery-1.11.0.min.js"></script>
	
	<!-- Clean HTML video player -->
	<script src="assets/js/jquery.cleanvideoplayer.js"></script>
	<link href="assets/css/player.css" rel="stylesheet">
    
    <!--  DÉBUT Google Analytics -->
    <script type="text/javascript">

  		var _gaq = _gaq || [];
  		_gaq.push(['_setAccount', 'UA-37963020-1']);
  		_gaq.push(['_trackPageview']);

  		(function() {
    		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  		})();

	</script>
	<!-- FIN Google Analytics -->
</head>
<body>

	<div class="wrapper">

		<!-- Pré-chargement -->

		<div id="preloader">
			<div id="status">
				<div class="status-mes"><h4><?php echo $lang['NAME']; ?></h4></div>
			</div>
		</div>

		<!-- Début Navigation -->

		<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
			<div class="container">

				<!-- Marque et parcours groupé ensemble pour mieux s'afficher sur mobile -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only"><?php echo $lang["parcourir_nav"]; ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><?php echo $lang['NAME']; ?></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#intro"><?php echo $lang['intro']; ?></a></li>
						<li><a href="#profile"><?php echo $lang['profile']; ?></a></li>
						<li><a href="#services"><?php echo $lang['services']; ?></a></li>
						<li><a href="#web"><?php echo $lang['web_cv']; ?></a></li>
                        <li><a href="#public_relations"><?php echo $lang['pr_cv']; ?></a></li>
						<?php if (!preg_match('/^es/', $cv_lang)) {
							echo "<li><a href='#portfolio'>{$lang['portfolio']}</a></li>";
						}; ?>
						<li><a href="#contact"><?php echo $lang['contact']; ?></a></li>
					</ul>
				</div>

			</div>
		</nav>

		<!-- Fin Navigation -->

		<!-- Début section Intro -->

		<section id="intro" class="section">

			<div class="container">

				<div class="row">

					<div class="col-md-12">

						<div class="hello wow bounceInDown" style="padding:30px; background-color: rgba(5,4,2,0.4);">
							<h1 class="textstroke"><?php echo $lang['hello_1']; ?></h1>
							<h3 class="textstroke"><span class="rotate"><?php echo $lang['hello_2']; ?></span></h3>
						</div>

						<a href="#profile">
							<div class="mouse-icon">
								<div class="wheel"></div>
							</div>
						</a>

					</div>

				</div><!-- .rang -->

			</div><!-- .conteneur -->

		</section>

		<!-- Fin section Intro -->

		<!-- Section profil contact chiffe-référence -->

		<section id="profile-contact">

			<div class="container">

				<div class="row">
					<div style="text-align:center;" class="wow bounceInUp">
						<?php if (isset($jeSuisEnEurope)) {
							echo "<div id='aviscookies'><p><strong>".$lang['cookiesEurope']."</strong></p>";
							echo "<button id='daccord' type='button' class='btn btn-success btn-xs'>{$lang['cookiesJeComprends']}</button>";
							echo "<span id='merci' style='display:none;'><button type='button' class='btn btn-success btn-xs disabled'>{$lang['cookiesMerci']}</button></span></div>";
						} ?>
						<script type="text/javascript">
						    var button = document.getElementById('daccord')
						    button.addEventListener('click',hideshow,false);

						    function hideshow() {
						        document.getElementById('merci').style.display = 'block'; 
						        this.style.display = 'none'
						        $("#aviscookies").show().delay(5000).fadeOut();
						    }
						    						</script>
						<h3><?php echo $lang['select_country']; ?></h3>
						<h5>
						<a href="index.php?lang=en-US"><img src="assets/images/drapeaux/us24.png" alt="" style="width:24px;height:24px;" />&nbsp;United States</a>&nbsp;|&nbsp;
						<a href="index.php?lang=fr-CA"><img src="assets/images/drapeaux/qc24.png" alt="" style="width:24px;height:24px;" />&nbsp;Qu&eacute;bec</a>&nbsp;|&nbsp;
						<a href="index.php?lang=en-CA"><img src="assets/images/drapeaux/ca24.png" alt="" style="width:24px;height:24px;" />&nbsp;Canada</a>&nbsp;|&nbsp;
						<a href="index.php?lang=es-MX"><img src="assets/images/drapeaux/mx24.png" alt="" style="width:24px;height:24px;" />&nbsp;M&eacute;xico</a>
						<br />
						<a href="index.php?lang=fr-FR"><img src="assets/images/drapeaux/fr24.png" alt="" style="width:24px;height:24px;" />&nbsp;France</a>&nbsp;|&nbsp;
                        <a href="index.php?lang=en-IE"><img src="assets/images/drapeaux/ie24.png" alt="" style="width:24px;height:24px;" />&nbsp;Ireland</a>&nbsp;|&nbsp;
						<a href="index.php?lang=es-PR"><img src="assets/images/drapeaux/pr24.png" alt="" style="width:24px;height:24px;" />&nbsp;Puerto Rico</a>&nbsp;|&nbsp;
						<a href="index.php?lang=fr-CH"><img src="assets/images/drapeaux/ch24.png" alt="" style="width:24px;height:24px;" />&nbsp;Conf&eacute;deration Suisse</a>&nbsp;|&nbsp;
						<a href="index.php?lang=en-GB"><img src="assets/images/drapeaux/gb24.png" alt="" style="width:24px;height:24px;" />&nbsp;United Kingdom</a>
						</h5>
					</div>
				</div>
				<hr />
				<div class="col-sm-4 wow bounceInUp">
					<div class="profile-item">
						<i class="fa fa-phone"></i>
						<h5><span class="fa fa-home fa-1"></span> +1 (202) 656 8317</h5>
						<h5><span class="fa fa-suitcase fa-1"></span> +1 (202) 349 9290</h5>
					</div>
				</div>

				<div class="col-sm-4 wow bounceInRight">
					<div class="profile-item">
						<i class="fa fa-globe"></i>
						<h5>www.grantmukai.com</h5>
						<h5>www.kiyoshimukai.com</h5>
					</div>
				</div>


				<div class="col-sm-4 wow bounceInDown">
					<div class="profile-item">
						<i class="fa fa-map-marker"></i>
						<h5>Washington, District of Columbia, USA 20036</h5>
					</div>
				</div>
			</div>

		</section>

		<!-- section profil contact chiffre-référence -->

		<!-- début section profil -->

		<section id="profile" class="section">

			<div class="container">

				<div class="row">

					<div class="col-md-12 headline wow bounceInDown drapeau">
                        <?php if ($drapeauNational == 1) {
                            echo "<img id='deuxieme_drapeau_en_tete' alt='{$lang['drapeau_national_alt']}' style='float:right;' src='assets/images/drapeaux/{$lang['drapeau_national']}.png' style='width:128px;height:128px;' />";
                        } ?>
						<img id="drapeau_en_tete" alt="<?php echo $lang['drapeau_alt']; ?>" style="float:right;" src="assets/images/drapeaux/<?php echo $lang['drapeau']; ?>.png" style="width:128px;height:128px;" />
						<h2><?php echo $lang['hello_1']; ?></h2>
						<p><?php echo $lang['hello_3']; ?></p> 
					</div>

					<div class="col-md-3 col-sm-4 col-xs-12 wow fadeIn">
						<img class="img-thumbnail" src="assets/images/photo.jpg" alt="" style="width:100%;height:100%;">
					
						<div class="profile-widget">
							<h3><?php echo $lang['social_profiles']; ?></h3>
							<ul class="widget-social">
								<li><span style="display:none;">Twitter</span><a href="http://www.twitter.com/grantmukai"><i class="fa fa-twitter"></i></a></li>
								<li><span style="display:none;">Github</span><a href="http://www.github.com/grantmukai"><i class="fa fa-github-alt"></i></a></li>
								<li><span style="display:none;">LinkedIn</span><a href="http://www.linkedin.com/in/grantmukai"><i class="fa fa-linkedin"></i></a></li>
								<li><span style="display:none;">YouTube</span><a href="http://www.youtube.com/grantmukai"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>

					<!--<div class="col-md-3 col-sm-6 wow fadeIn">-->

						<!--<div class="profile-widget">
							<h3><?php //echo $lang['skillset']; ?></h3>-->
                            
                            <?php
						      /*$skillsetQuery = "SELECT subject, level FROM appslangs2 WHERE (language='$cv_lang' OR language IS NULL) ORDER BY id;";
						      $skillsetResult = $link->query($skillsetQuery);
                                while($row_skillset = $skillsetResult->fetch_assoc())
                                {
                                	$levelStart = 1;
                                	$levelEnd = $row_skillset['level'];
                                	$levelMax = 5;
                                	$levelRemain = 5 - $row_skillset['level'];
                                    echo "<h5>{$row_skillset['subject']}</h5>";
                                    echo "<div class='skill-bar'>";
                                    while ($levelStart <= $levelEnd) {
                                    	echo "<div class='skill-rate-on'></div>";
                                    	$levelStart++;
                                    }

                                    while ($levelRemain > 0) {
                                    	echo "<div class='skill-rate-off'></div>";
                                    	$levelRemain--;
                                    }
                                    echo "</div>";
                                }*/
                            ?>

						<!--</div>-->

					<!--</div>--><!-- .col-md-3 -->

					<div class="col-md-9 col-sm-8 col-xs-12 wow fadeIn">
					<?php echo $lang['bio']; ?>
					</div>

				</div><!-- .rang -->

			</div><!-- .conteneur -->

		</section>

		<!-- fin section Profil -->


		<!-- début section Services -->

		<section id="services" class="callout">

			<div class="container">

				<div class="row">

					<div class="col-md-12 headline wow bounceInDown">
						<h2><?php echo $lang['ce_que_je_peux_faire_titre']; ?></h2>
					</div>

					<div class="col-md-12">

						<div class="row">

							<div class="col-sm-4 wow bounceInLeft">
								<div class="service">
									<div class="icon">
										<i class="fa fa-pencil"></i>
									</div>
									<h4><?php echo $lang['redaction_soustitre']; ?></h4>
									<div class="text">
										<p><?php echo $lang['redaction_p']; ?></p>
									</div>
								</div>
							</div>

							<div class="col-sm-4 wow bounceInUp">
								<div class="service">
									<div class="icon">
										<i class="fa fa-video-camera"></i>
									</div>
									<h4><?php echo $lang['multimedia_soustitre']; ?></h4>
									<div class="text">
										<p><?php echo $lang['multimedia_p']; ?></p>
									</div>
								</div>
							</div>

							<div class="col-sm-4 wow bounceInRight">
								<div class="service">
									<div class="icon">
										<i class="fa fa-envelope-square"></i>
									</div>
									<h4><?php echo $lang['courriel_soustitre']; ?></h4>
									<div class="text">
										<p><?php echo $lang['courriel_p']; ?></p>
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
									<h4><?php echo $lang['codepropre_soustitre']; ?></h4>
									<div class="text">
										<p><?php echo $lang['codepropre_p']; ?></p>
									</div>
								</div>
							</div>

							<div class="col-sm-4 wow bounceInUp" data-wow-delay=".4s">
								<div class="service">
									<div class="icon">
										<i class="fa fa-desktop"></i>
									</div>
									<h4><?php echo $lang['adaptatif_soustitre']; ?></h4>
									<div class="text">
										<p><?php echo $lang['adaptatif_p']; ?></p>
									</div>
								</div>
							</div>

							<div class="col-sm-4 wow bounceInUp" data-wow-delay=".6s">
								<div class="service">
									<div class="icon">
										<i class="fa fa-life-ring"></i>
									</div>
									<h4><?php echo $lang['soutien_soustitre']; ?></h4>
									<div class="text">
										<p><?php echo $lang['soutien_p']; ?></p>
									</div>
								</div>
							</div>

						</div>

					</div>

				</div>

			</div>

		</section>

		<!-- fin section services -->

		<!-- début section chiffres-références-->

		<!--<section class="section">

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

				</div>--><!-- .rang -->

			<!--</div>--><!-- .conteneur -->

		<!--</section>-->

		<!-- fin section chiffres-références -->

		<!-- début section web cv -->

		<section id="web" class="section">

			<div class="container">

				<div class="row">

					<div class="col-md-12 headline wow fadeIn">
						<h2><?php echo $lang['web_development']; ?></h2>
						<?php 
						$introsQuery = "SELECT paragraph FROM intros WHERE language='$cv_lang' AND type = 'WEB';";
						$introsResult = $link->query($introsQuery);
						while($row_intros = $introsResult->fetch_assoc())
						{
							echo "<p style='color:#000;'>{$row_intros['paragraph']}</p>";
						}
						?>
						<?php 
						setlocale(LC_TIME, $langueLocale);
						echo "<p><small>{$lang['derniere_maj']}: ";
						echo strftime("%d %B %Y", $webFileDate->getTimestamp());
						echo "</small></p>"; ?>
					</div>

				</div><!-- .rang -->

				<div class="row resume-items">

					<div class="col-md-3 wow fadeIn">
						<h3><?php echo $lang['experience']; ?></h3>
					</div>

					<?php
						$webpositionsQuery = "SELECT company, jobtitle, start_date, end_date FROM positions WHERE language='$cv_lang' AND type = 'WEB' ORDER BY start_date DESC;";
						$webpositionsResult = $link->query($webpositionsQuery);
						while($row_webpositions = $webpositionsResult->fetch_assoc())
						{
							echo "<div class='col-md-8 col-sm-8 resume-item wow fadeIn' style='clear:both;'>";
							echo "<h4>{$row_webpositions['jobtitle']}</h4>";
							echo "<hr class='hidden-xs'>";
							echo "</div>";
							echo "<div class='col-md-4 col-sm-4 resume-place wow fadeIn'>";
							echo "<h4><i class='fa fa-suitcase'></i> {$row_webpositions['company']}</h4>";
							if (is_null($row_webpositions['end_date'])) {
								echo "<i class='fa fa-calendar'></i> ".date('m.Y',strtotime($row_webpositions['start_date']))." - " . date('m') . "." . date('Y');	
							} else {
								echo "<i class='fa fa-calendar'></i> ".date('m.Y',strtotime($row_webpositions['start_date']))." - ".date('m.Y',strtotime($row_webpositions['end_date']));
							}
							echo "<hr class='visible-xs'>";
							echo "</div>";
						}
					?>


				</div><!-- .rang -->
				<div class="row resume-items">
					<div class="col-md-12 wow fadeIn">
						<h3><?php echo $lang['duties']; ?></h3>
					</div>
					
					<div class="col-md-4 col-sm-12 resume-item wow fadeIn">
						<img src="assets/images/logo/apsa.jpg" alt="APSA" style="width:91px;">
						<?php
						$apsaQuery = "SELECT job FROM descriptions WHERE language='$cv_lang' AND type = 'WEB' AND company = 'apsa' ORDER BY id;";
						$apsaResult = $link->query($apsaQuery);
						echo "<ul style='list-style-type:none;padding:0;text-align:left;'>";
						while($row_apsa = $apsaResult->fetch_assoc())
						{
							echo "<li style='padding-bottom:10px;'>{$row_apsa['job']}</li>";
						}
						echo "</ul>";
						?>
					</div>
					
					<div class="col-md-4 col-sm-12 resume-item wow fadeIn">
						<img src="assets/images/logo/georgetown.png" alt="Georgetown" style="width:91px;">
						<?php
						$georgetownQuery = "SELECT job FROM descriptions WHERE language='$cv_lang' AND type = 'WEB' AND company = 'georgetown' ORDER BY id;";
						echo "<ul style='list-style-type:none;padding:0;text-align:left;'>";
						$georgetownResult = $link->query($georgetownQuery);
						while($row_georgetown = $georgetownResult->fetch_assoc())
						{
							echo "<li style='padding-bottom:10px;'>{$row_georgetown['job']}</li>";
						}
						echo "</ul>";
						?>
					</div>

					<div class="col-md-4 col-sm-12 resume-item wow fadeIn">
						<img src="assets/images/logo/iqsolutions.jpg" alt="iQ" style="width:91px;">
						<?php
						$iqQuery = "SELECT job FROM descriptions WHERE language='$cv_lang' AND type = 'WEB' AND company = 'iq' ORDER BY id;";
						echo "<ul style='list-style-type:none;padding:0;text-align:left;'>";
						$iqResult = $link->query($iqQuery);
						while($row_iq = $iqResult->fetch_assoc())
						{
							echo "<li style='padding-bottom:10px;'>{$row_iq['job']}</li>";
						}
						echo "</ul>";
						?>
					</div>
					
				</div>
				<hr class="hidden-xs">
				<div class="row resume-items">

					<div class="col-md-3 wow fadeIn">
						<h3><?php echo $lang['education']; ?></h3>
					</div>

					<?php
					$educationQuery = "SELECT school, degreetype, degreetitle, minortype, minortitle, start_date, end_date FROM education WHERE language = '$cv_lang' ORDER BY id;";
					$educationResult = $link->query($educationQuery);
					while($row_education = $educationResult->fetch_assoc())
					{
						echo "<div class='col-md-6 col-sm-8 resume-item wow fadeIn'>";
						echo "<h4>{$row_education['degreetype']},&nbsp;{$row_education['degreetitle']}</h4>";
						echo "<p>{$row_education['minortype']},&nbsp;{$row_education['minortitle']}</p>";
						echo "<hr class='hidden-xs'>";
						echo "</div>";
						echo "<div class='col-md-3 col-sm-4 resume-place wow fadeIn'>";
						echo "<h4><i class='fa fa-suitcase'></i> {$row_education['school']}</h4>";
						if (is_null($row_education['end_date'])) {
								echo "<i class='fa fa-calendar'></i> ".date('m.Y',strtotime($row_education['start_date']))." - " . date('m') . "." . date('Y');	
							} else {
								echo "<i class='fa fa-calendar'></i> ".date('m.Y',strtotime($row_education['start_date']))." - ".date('m.Y',strtotime($row_education['end_date']));
							}
						echo "<hr class='visible-xs'>";
						echo "</div>";
					}
					?>
				</div><!-- .rang -->

				<div class="row">

					<div class="col-md-6 col-md-offset-3 wow fadeIn">
						<?php 
						if ($lang['webfile_size'] < 10) { $webFileByte = "MB";} else { $webFileByte = "KB";}
						// !! ENLÈVE LES AUTRES PAYS ANGOLOPHONES LORSQUE LES FORMATS DE DATE SONT CORRIGÉ !!!!
						if (preg_match('/^en-US/', $cv_lang)||preg_match('/^en-IE/', $cv_lang)||preg_match('/^en-GB/', $cv_lang)) {
							echo "<a href='cv_files/{$cv_lang}/Mukai_webCV_".str_replace('-','',$cv_lang)."_".date_format($webFileDate, 'mdy').".pdf' class='btn btn-default btn-custom-2'><i class='fa fa-cloud-download icon-before'></i> {$lang['download_webcv']} ({$lang['webfile_size']}{$webFileByte})</a>";
								} else {
							echo "<a href='cv_files/{$cv_lang}/Mukai_webCV_".str_replace('-','',$cv_lang)."_".date_format($webFileDate, 'dmy').".pdf' class='btn btn-default btn-custom-2'><i class='fa fa-cloud-download icon-before'></i> {$lang['download_webcv']} ({$lang['webfile_size']}{$webFileByte})</a>";
								} 
						?>
					</div>

				</div><!-- .rang -->

			</div><!-- .conteneur -->

		</section>

		<!-- fin section web cv -->
		
		<!-- début section promotion cv -->

		<section id="public_relations" class="section">

			<div class="container">

				<div class="row">

					<div class="col-md-12 headline wow fadeIn">
						<h2><?php echo $lang['public_relations']; ?></h2>
						<?php 
						$introsQuery = "SELECT paragraph FROM intros WHERE language='$cv_lang' AND type = 'MAR';";
						$introsResult = $link->query($introsQuery);
						while($row_intros = $introsResult->fetch_assoc())
						{
							echo "<p style='color:#000;'>{$row_intros['paragraph']}</p>";
						}
						?>
						<?php 
						setlocale(LC_TIME, $langueLocale);
						echo "<p><small>{$lang['derniere_maj']}: ";
						echo strftime("%d %B %Y", $prFileDate->getTimestamp());
						echo "</small></p>"; ?>
					</div>

				</div><!-- .rang -->

				<div class="row resume-items">

					<div class="col-md-3 wow fadeIn">
						<h3><?php echo $lang['experience']; ?></h3>
					</div>

					<?php
						$prpositionsQuery = "SELECT company, jobtitle, start_date, end_date FROM positions WHERE language='$cv_lang' AND type = 'MAR' ORDER BY start_date DESC;";
						$prpositionsResult = $link->query($prpositionsQuery);
						while($row_prpositions = $prpositionsResult->fetch_assoc())
						{
							echo "<div class='col-md-8 col-sm-8 resume-item wow fadeIn' style='clear:both;'>";
							echo "<h4>{$row_prpositions['jobtitle']}</h4>";
							echo "<hr class='hidden-xs'>";
							echo "</div>";
							echo "<div class='col-md-4 col-sm-4 resume-place wow fadeIn'>";
							echo "<h4><i class='fa fa-suitcase'></i> {$row_prpositions['company']}</h4>";
							if (is_null($row_prpositions['end_date'])) {
								echo "<i class='fa fa-calendar'></i> ".date('m.Y',strtotime($row_prpositions['start_date']))." - " . date('m') . "." . date('Y');	
							} else {
								echo "<i class='fa fa-calendar'></i> ".date('m.Y',strtotime($row_prpositions['start_date']))." - ".date('m.Y',strtotime($row_prpositions['end_date']));
							}
							echo "<hr class='visible-xs'>";
							echo "</div>";
						}
					?>


				</div><!-- .rang -->
				<div class="row resume-items">
					<div class="col-md-12 wow fadeIn">
						<h3><?php echo $lang['duties']; ?></h3>
					</div>
					
					<div class="col-md-4 col-sm-12 resume-item wow fadeIn">
						<img src="assets/images/logo/apsa.jpg" alt="APSA" style="width:91px;">
						<?php
						$apsaQuery = "SELECT job FROM descriptions WHERE language='$cv_lang' AND type = 'MAR' AND company = 'apsa' ORDER BY id;";
						$apsaResult = $link->query($apsaQuery);
						echo "<ul style='list-style-type:none;padding:0;text-align:left;'>";
						while($row_apsa = $apsaResult->fetch_assoc())
						{
							echo "<li style='padding-bottom:10px;'>{$row_apsa['job']}</li>";
						}
						echo "</ul>";
						?>
					</div>
					
					<div class="col-md-4 col-sm-12 resume-item wow fadeIn">
						<img src="assets/images/logo/wellesley.png" alt="Wellesley Public Media" style="width:91px;">
						<?php
						$wellesleyQuery = "SELECT job FROM descriptions WHERE language='$cv_lang' AND type = 'MAR' AND company = 'wellesley' ORDER BY id;";
						echo "<ul style='list-style-type:none;padding:0;text-align:left;'>";
						$wellesleyResult = $link->query($wellesleyQuery);
						while($row_wellesley = $wellesleyResult->fetch_assoc())
						{
							echo "<li style='padding-bottom:10px;'>{$row_wellesley['job']}</li>";
						}
						echo "</ul>";
						?>
					</div>

					<div class="col-md-4 col-sm-12 resume-item wow fadeIn">
						<img src="assets/images/logo/patch.jpg" alt="iQ" style="width:91px;">
						<?php
						$patchQuery = "SELECT job FROM descriptions WHERE language='$cv_lang' AND type = 'MAR' AND company = 'patch' ORDER BY id;";
						echo "<ul style='list-style-type:none;padding:0;text-align:left;'>";
						$patchResult = $link->query($patchQuery);
						while($row_patch = $patchResult->fetch_assoc())
						{
							echo "<li style='padding-bottom:10px;'>{$row_patch['job']}</li>";
						}
						echo "</ul>";
						?>
					</div>
					
				</div>
				<hr class="hidden-xs">
				<div class="row resume-items">

					<div class="col-md-3 wow fadeIn">
						<h3><?php echo $lang['education']; ?></h3>
					</div>

					<?php
					$educationQuery = "SELECT school, degreetype, degreetitle, minortype, minortitle, start_date, end_date FROM education WHERE language = '$cv_lang' ORDER BY id;";
					$educationResult = $link->query($educationQuery);
					while($row_education = $educationResult->fetch_assoc())
					{
						echo "<div class='col-md-6 col-sm-8 resume-item wow fadeIn'>";
						echo "<h4>{$row_education['degreetype']},&nbsp;{$row_education['degreetitle']}</h4>";
						echo "<p>{$row_education['minortype']},&nbsp;{$row_education['minortitle']}</p>";
						echo "<hr class='hidden-xs'>";
						echo "</div>";
						echo "<div class='col-md-3 col-sm-4 resume-place wow fadeIn'>";
						echo "<h4><i class='fa fa-suitcase'></i> {$row_education['school']}</h4>";
						if (is_null($row_education['end_date'])) {
								echo "<i class='fa fa-calendar'></i> ".date('m.Y',strtotime($row_education['start_date']))." - " . date('m') . "." . date('Y');	
							} else {
								echo "<i class='fa fa-calendar'></i> ".date('m.Y',strtotime($row_education['start_date']))." - ".date('m.Y',strtotime($row_education['end_date']));
							}
						echo "<hr class='visible-xs'>";
						echo "</div>";
					}
					?>
				</div><!-- .rang -->

				<div class="row">

					<div class="col-md-6 col-md-offset-3 wow fadeIn">
						<?php 
						if ($lang['prfile_size'] < 10) { $prFileByte = "MB";} else { $prFileByte = "KB";}
						// !! ENLÈVE LES AUTRES PAYS ANGOLOPHONES LORSQUE LES FORMATS DE DATE SONT CORRIGÉ !!!!
						if (preg_match('/^en-US/', $cv_lang)||preg_match('/^en-IE/', $cv_lang)||preg_match('/^en-GB/', $cv_lang)) {
							echo "<a href='cv_files/{$cv_lang}/Mukai_prCV_".str_replace('-','',$cv_lang)."_".date_format($prFileDate, 'mdy').".pdf' class='btn btn-default btn-custom-2'><i class='fa fa-cloud-download icon-before'></i> {$lang['download_prcv']} ({$lang['prfile_size']}{$prFileByte})</a>";
								} else {
							echo "<a href='cv_files/{$cv_lang}/Mukai_prCV_".str_replace('-','',$cv_lang)."_".date_format($prFileDate, 'dmy').".pdf' class='btn btn-default btn-custom-2'><i class='fa fa-cloud-download icon-before'></i> {$lang['download_prcv']} ({$lang['prfile_size']}{$prFileByte})</a>";
								} 
						?>
					</div>

				</div><!-- .rang -->

			</div><!-- .rang -->

		</section>

		<!-- fin section promotion cv -->

		<!-- début section chiffres-références -->

		<section id="clients" class="callout">

			<div class="container">

				<div class="row">

					<div class="col-md-3 hidden-xs wow bounceInLeft">
						<h3><?php echo $lang['customers']; ?></h3>
					</div>

					<div class="col-md-9 wow bounceInRight">

						<div id="owl-clients" class="owl-carousel">
							
							<div class="owl-item">
								<img src="assets/images/logo/apsa.jpg" alt="" style="width:91px;">
								<h4>American Political Science Association</h4>
							</div>

							<div class="owl-item">
								<img src="assets/images/logo/georgetown.png" alt="" style="width:91px;">
								<h4>Georgetown University</h4>
							</div>

							<div class="owl-item">
								<img src="assets/images/logo/iqsolutions.jpg" alt="" style="width:91px;">
								<h4>iQ Solutions</h4>
							</div>

							<div class="owl-item">
								<img src="assets/images/logo/wellesley.png" alt="" style="width:91px;">
								<h4>Wellesley Public Media</h4>
							</div>

							<div class="owl-item">
								<img src="assets/images/logo/patch.jpg" alt="" style="width:91px;">
								<h4>Patch.com</h4>
							</div>

							<div class="owl-item">
								<img src="assets/images/logo/wgbh.jpg" alt="" style="width:91px;">
								<h4>WGBH Educational Foundation</h4>
							</div>
							
							<div class="owl-item">
								<img src="assets/images/logo/airpublic.png" alt="" style="width:91px;">
								<h4>airpublic.tv</h4>
							</div>
							
							<div class="owl-item">
								<img src="assets/images/logo/kitay.png" alt="" style="width:91px;">
								<h4>Kitay Productions</h4>
							</div>
							
							<div class="owl-item">
								<img src="assets/images/logo/bu.png" alt="" style="width:91px;">
								<h4>Boston University IT Help Desk</h4>
							</div>
							
							<div class="owl-item">
								<img src="assets/images/logo/dol.png" alt="" style="width:91px;">
								<h4>United States Department of Labor</h4>
							</div>

						</div>

					</div><!-- .col-md-9 -->

				</div><!-- .rang -->

			</div><!-- .conteneur -->

		</section>

		<!-- fin section chiffres-références -->

		<!-- début section Portfolio -->

		<?php if (!preg_match('/^es/', $cv_lang)) {
			echo "<section id='portfolio' class='section'>";
			echo $portfolioLangue = substr($cv_lang, 0, 2);
			include 'portfolio/'.$portfolioLangue.'.php';
			echo "</section>";} ?>

		<!-- fin section Portfolio -->

		<!-- début section Contact -->

		<section id="contact" class="section">

			<div class="container">

				<div class="row">

					<div class="col-md-12 headline wow bounceInLeft">
						<h2><?php echo $lang['contact_title']; ?></h2>
						<p><?php echo $lang['contact_subtitle']; ?></p>
					</div>

					<div class="col-md-6 wow bounceInUp">

						<p><?php echo $lang['contact_paragraph']; ?></p>

						<ul class="icon-list">
							<li><i class="fa fa-fw fa-phone"></i>+1 202 656 8317</li>
							<li><i class="fa fa-fw fa-globe"></i><a href="">http://www.grantmukai.com</a></li>
						</ul>

					</div>

					<div class="col-md-6 wow bounceInRight">

						<form id="contact-form" role="form" name="contact-form" action="assets/php/contactForm.php" action="post">

							<div class="form-group">
								<label class="sr-only" for="c_name"><?php echo $lang['formule_nom']; ?></label>
								<input type="text" id="c_name" class="form-control" name="c_name" placeholder="<?php echo $lang['formule_nom']; ?>">
							</div>

							<div class="form-group">
								<label class="sr-only" for="c_email"><?php echo $lang['formule_courriel']; ?></label>
								<input type="email" id="c_email" class="form-control" name="c_email" placeholder="<?php echo $lang['formule_courriel']; ?>">
							</div>

							<div class="form-group">
								<textarea class="form-control" id="c_message" name="c_message" rows="7" placeholder="<?php echo $lang['formule_message']; ?>"></textarea>
							</div>
							
							<div style="display:none;" class="form-group">
								<?php echo "<textarea class='form-control' id='c_language' name='c_language' rows='1'>{$cv_lang}</textarea>"; ?>
							</div>

							<button type="submit" class="btn btn-custom-1">
								<i class="fa fa-bullhorn icon-before"></i> <?php echo $lang['formule_envoyer']; ?>
							</button>

						</form>

						<div class="ajax-response"></div>

					</div>

				</div>

			</div>

		</section>

		<!-- fin section Portfolio -->

		<!-- début En-Pied -->

		<footer id="footer">

			<div class="container">

				<div class="row">

					<div class="col-md-12">
						<p class="copy">
							&copy; <?php echo date('Y') . " " . $lang['copyright']; ?>
							<br />
							<?php if (isset($imageVille)) {
							echo $lang['creditdelaphoto'].": <em>".$creditsImages[$quelleVille][1]."</em> (".$creditsImages[$quelleVille][2].") ".$lang['par']." <a href='http://www.flickr.com/photos/".$creditsImages[$quelleVille][4]."'>".$creditsImages[$quelleVille][3]."</a>. ".$lang['license2photo'];
							}
							?>
						</p>
					</div>

				</div><!-- .rang -->

			</div><!-- .conteneur -->

		</footer>

		<!-- fin En-Pied -->

	</div><!-- .wrapper -->

	<!-- fichiers Javascript -->
	<!-- Bootstrap JS -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- Glissement du fond d'écran -->
	<script src="assets/js/jquery.backstretch.min.js"></script>
	<!-- OwlCarousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- Modale pour le portfolio REQUIS POUR QUE LE FORMULE DE CONTACT FONCTIONNE -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- Rotation du texte -->
	<script src="assets/js/jquery.simple-text-rotator.min.js"></script>
	<!-- Waypoints -->
	<script src="assets/js/jquery.waypoints.js"></script>
	<!-- WOW - Révéler animations lorsque vous glissez -->
	<script src="assets/js/wow.min.js"></script>   
	<!-- Glissement doux -->
	<script src="assets/js/smoothscroll.js"></script>
	<!-- Fitvids REQUIS POUR QUE LE FORMULE DE CONTACT FONCTIONNE -->
	<script src="assets/js/jquery.fitvids.js"></script>
	<!-- Scripts personalisés -->
	<script src="assets/js/custom.js"></script>
    <!-- image du fond de la ligne 37 de custom.js -->
    <script type="text/javascript">
        <?php if (isset($imageVille)) {
                echo "$('#intro').backstretch(['assets/images/villes/".$cv_lang."/".$quelleVille.".jpg']);";
            } else {
                echo "$('#intro').backstretch(['assets/images/bg4.jpg']);";
            }     
        ?>
    </script>

</body>
</html>
