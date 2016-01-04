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
			<li><a href="http://portfolio.grantmukai.com/index.php/category/boston-university/">Boston University</a></li>
			<li><a href="http://portfolio.grantmukai.com/index.php/category/patch.com/">Patch Media Corporation</a></li>
			<li><a href="http://portfolio.grantmukai.com/index.php/category/iq-solutions/">iQ Solutions</a></li>
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
		<div class="col-md-12 headline wow fadeIn">
			<h2>Video &amp; Multimedia</h2>
			<h3>Wellesley Public Media</h3>
			<div class="mediatec-cleanvideoplayer" style="width:100%;">
				<ul data-theme="default">
			<?php
				$wellesleyPlaylist = array(
					"Arms Around Sierra Leone"=>"sierraleone.mov",
					"Radcliffe Bailey: Memory as Medicine"=>"radcliffebailey.mov",
					"Landscape Photographer Art Donahue"=>"artdonahue.mov",
					"Wellesley College Browning Letters Project"=>"browningletters.mov",
					"Egg Tempura Demonstration"=>"jackstandish.mov",
					"Saving Peru&rsquo;s Children with a Lab Ambulance"=>"laboratoryambulance.mov",
					"Rotary Club Pancake Breakfast"=>"pancakebreakfast.mov"
					);
                foreach($wellesleyPlaylist as $dataTitle => $dataUrl) {
                    echo "<li data-title='{$dataTitle}' data-artist='Grant Kiyoshi Mukai' data-type='m4v' data-url='http://portfolio.grantmukai.com/video/wellesley/{$dataUrl}' data-poster='Wellesley Public Media' data-free='false'></li>";
                }
            ?>
				</ul>
			</div>
		</div>
	</div>
</div>
