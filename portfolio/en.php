<div class="container">
	<div class="row">
		<div class="col-md-12 headline wow bounceInDown">
			<h2>My Work</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 headline wow fadeIn">
			<h2>Web &amp; Print</h2>
		</div>
	</div>
	<div class="col-md-4 col-sm-12 headline wow fadeIn">
		<h3>By Company</h3>
		<ul>
			<li><a href="http://portfolio.grantmukai.com/category/boston-university/">Boston University</a></li>
			<li><a href="http://portfolio.grantmukai.com/category/patch.com/">Patch Media Corporation</a></li>
			<li><a href="http://portfolio.grantmukai.com/category/iq-solutions/">iQ Solutions</a></li>
			<li><a href="http://portfolio.grantmukai.com/category/apsa">American Politcal Science Association</a></li>
		</ul>
	</div>
	<div class="col-md-4 col-sm-12 headline wow fadeIn">
		<h3>By Category</h3>
		<ul>
			<li><a href="http://portfolio.grantmukai.com/index.php/category/print/">Print</a></li>
			<li><a href="http://portfolio.grantmukai.com/index.php/category/web/">Web</a></li>
			<li><a href="http://portfolio.grantmukai.com/index.php/category/email-courriel/">E-Mail Newsletters</a></li>
			<li><a href="http://portfolio.grantmukai.com/index.php/category/longform/">Feature Stories</a></li>
		</ul>
	</div>
	<div class="col-md-4 col-sm-12 headline wow fadeIn">
		<h3>Showcased Work</h3>
		<ul>
			<li><a href="http://portfolio.grantmukai.com/index.php/jack/">Fitting in as a Double Immigrant</a></li>
			<li><a href="http://portfolio.grantmukai.com/index.php/abroad/">Students Flock to the US from Abroad, But Will They Adjust?</a></li>
			<li><a href="http://portfolio.grantmukai.com/index.php/judith_miller/">Former New York Times reporter, Judith Miller, visits Boston University</a></li>
			<li><a href="http://portfolio.grantmukai.com/index.php/chinese/">Boston University Hosts Chinese New Year</a></li>
			<li><a href="http://portfolio.grantmukai.com/index.php/textbooks/">
As The Price of Textbooks Weighs Heavily On Students Wallets, Some Administrations Consider Regulations, Alternatives</a></li>
			<li><a href="http://portfolio.grantmukai.com/index.php/viacom/">Viacom CEO Sumner Redstone Speaks Out Against Copyright Infringement</a></li>
		</ul>
	</div>
	<div class="row">
		<div class="col-md-6 headline wow fadeIn">
			<!--<h2>Video &amp; Multimedia</h2>-->
			<h3>Wellesley News Packages</h3>
			<div class="mediatec-cleanvideoplayer lecturevideo" style="width:100%;"><!-- width overridden for mobile in style.css -->
				<ul data-theme="default">
			<?php
				$wellesleyPlaylist = array(
					"Hailey and the Bees, Part 1 (147MB)"=>"bees1.mov",
                    "Hailey and the Bees, Part 2 (225MB)"=>"bees2.mov",
                    "Beth Elohim Craft Fair (66MB)"=>"bethelohim.mp4",
                    "Schofield Road Race (17MB)"=>"roadrace.mp4",
					"Arms Around Sierra Leone (84MB)"=>"sierraleone.mov",
					"Radcliffe Bailey: Memory as Medicine (86MB)"=>"radcliffebailey.mov",
					"Landscape Photographer Art Donahue (129MB)"=>"artdonahue.mov",
					"Wellesley College Browning Letters Project (87MB)"=>"browningletters.mov",
					"Egg Tempura Demonstration (66MB)"=>"jackstandish.mov",
					"Saving Peru&rsquo;s Children with a Lab Ambulance (16MB)"=>"laboratoryambulance.mov",
					"Rotary Club Pancake Breakfast (14MB)"=>"pancakebreakfast.mov",
					"Around Town: Boston Marathon Coverage (266MB)"=>"bostonmarathon.mov",
					"Suzy Duffy Books: Wellesley Wives (90MB)"=>"wellesleywives.mov",
					"Captain Marden&rsquo;s Seafood Truck (81MB)"=>"foodtruck.mov",
					"Google Street View Car (116MB)"=>"streetviewcare.mov",
					"Rained Out Gold Competition (39MB)"=>"rainedoutgolf.mov",
					"Mimi&rsquo;s Village (47MB)"=>"mimisvillage.mp4",
					"Python Force PSA (15MB)"=>"pythonforce.mp4"
					);
				foreach($wellesleyPlaylist as $dataTitle1 => $dataUrl1) {
					echo "<li data-title='{$dataTitle1}' data-artist='Grant Kiyoshi Mukai' data-type='m4v' data-url='http://portfolio.grantmukai.com/video/wellesley/{$dataUrl1}' data-poster='Wellesley Public Media' data-free='false'></li>";
				}
			?>
				</ul>
			</div>
		</div>
		<div class="col-md-6 headline wow fadeIn">
			<h3>Wellesley Graphic Reel</h3>
			<div class="mediatec-cleanvideoplayer lecturevideo" style="width:100%;"><!-- width overridden for mobile in style.css -->
				<ul data-theme="default">
			<?php
				$wellesleyGraphicReel = array(
					"Wellesley Media Graphic Reel (35MB)"=>"wmgraphicreel.mp4",
					"After Effects Title Example (1.4MB)"=>"HHKtitle.mov",
					"BONUS: Dropping the Camera (2.2MB)"=>"droppingcamera.mov"
					);
				foreach($wellesleyGraphicReel as $dataTitle2 => $dataUrl2) {
					echo "<li data-title='{$dataTitle2}' data-artist='Grant Kiyoshi Mukai' data-type='m4v' data-url='http://portfolio.grantmukai.com/video/wellesley/{$dataUrl2}' data-poster='Wellesley Public Media' data-free='false'></li>";
				}
			?>
				</ul>
			</div>
		</div>
	</div>
</div>
