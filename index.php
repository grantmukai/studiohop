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

		<?php include "section/navigation.php";
		include "section/intro.php";
		include "section/profile_contact.php";
		include "section/profile.php";
		include "section/services.php";
		include "section/chiffres-references.php";
		include "section/cv_web.php";
		include "section/cv_marketing.php";
		include "section/entreprises.php";
		include "section/portfolio.php";
		include "section/contact.php";
		include "section/en-pied.php"; ?>
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
