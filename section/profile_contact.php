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
				<p style="font-weight:700;"><a href="beta"><i lang="fr-CA">Aper&ccedil;u du nouveau site disponible</i> ** <i lang="en-CA">Preview new website design</i> ** <i lang="es-MX">Ver dise&ntilde;o del nuevo sitio</i></a></p>
				<h3><?php echo $lang['select_country']; ?></h3>
				<h5>
				<a href="index.php?lang=en-US"><img src="assets/images/drapeaux/us24.png" alt="" style="width:24px;height:24px;" />&nbsp;United States</a>&nbsp;|&nbsp;
				<a href="index.php?lang=fr-CA"><img src="assets/images/drapeaux/qc24.png" alt="" style="width:24px;height:24px;" />&nbsp;Qu&eacute;bec</a>&nbsp;|&nbsp;
				<a href="index.php?lang=en-CA"><img src="assets/images/drapeaux/ca24.png" alt="" style="width:24px;height:24px;" />&nbsp;Canada</a>&nbsp;|&nbsp;
				<a href="index.php?lang=es-MX"><img src="assets/images/drapeaux/mx24.png" alt="" style="width:24px;height:24px;" />&nbsp;M&eacute;xico</a>&nbsp;|&nbsp;
				<a href="index.php?lang=fr-FR"><img src="assets/images/drapeaux/fr24.png" alt="" style="width:24px;height:24px;" />&nbsp;France</a>
				<br />
				<a href="index.php?lang=es-PR"><img src="assets/images/drapeaux/pr24.png" alt="" style="width:24px;height:24px;" />&nbsp;Puerto Rico</a>&nbsp;|&nbsp;
				<a href="index.php?lang=fr-CH"><img src="assets/images/drapeaux/ch24.png" alt="" style="width:24px;height:24px;" />&nbsp;Conf&eacute;deration Suisse</a>&nbsp;|&nbsp;
				<a href="index.php?lang=fr-BE"><img src="assets/images/drapeaux/be24.png" alt="" style="width:24px;height:24px;" />&nbsp;Belgique</a>&nbsp;|&nbsp;
				<a href="index.php?lang=es-UY"><img src="assets/images/drapeaux/uy24.png" alt="" style="width:24px;height:24px;" />&nbsp;Uruguay</a>
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