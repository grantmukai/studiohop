<div class="container">
	<div class="row">
		<div class="col-md-12 headline wow bounceInDown">
			<h2>Mon Travail</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 headline wow fadeIn">
			<h2>Web &amp; &Eacute;crit</h2>
			<h3>R&eacute;dactions en Vedette</h3>
            <ul>
                <li><a href="http://portfolio.grantmukai.com/francais_amerique/">Le Fran&ccedil;ais en Am&eacute;rique</a></li>
                <li><a href="http://portfolio.grantmukai.com/limportance-de-voyager/">L'Importance de Voyager</a></li>
                <li><a href="http://portfolio.grantmukai.com/gare-contemporaine/">La Gare Contemporaine</a></li>
            </ul>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 headline wow fadeIn">
			<h2>Vid&eacute;o &amp; Multim&eacute;dia</h2>
			<h3>Rpublic <em>(Paris, France)</em></h3>
			<div class="mediatec-cleanvideoplayer" style="width:75%;">
				<ul data-theme="default">
			<?php
				$rpublicPlaylist = array(
					"Partie 1 : Les Gares Contemporaines"=>"Diapo1v9.mp4",
					"Partie 2 : Les Gares Contemporaine"=>"Diapo2v9.mp4",
					"Partie 3 : Les Gares Contemporaine"=>"Diapo3v9.mp4",
					);
                foreach($rpublicPlaylist as $dataTitle => $dataUrl) {
                    echo "<li data-title='{$dataTitle}' data-artist='Grant Kiyoshi Muka&iuml;' data-type='m4v' data-url='http://portfolio.grantmukai.com/video/rpublic/{$dataUrl}' data-poster='rpublic' data-free='false'></li>";
                }
            ?>
				</ul>
			</div>
		</div>
	</div>
</div>