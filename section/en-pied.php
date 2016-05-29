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