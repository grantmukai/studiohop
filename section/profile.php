<!-- début section profil -->

<section id="profile" class="section">

	<div class="container">

		<div class="row">

			<div class="col-md-12 headline wow bounceInDown drapeau">
                <?php if ($drapeauNational == 1) {
                    echo "<img id='deuxieme_drapeau_en_tete' alt='{$lang['drapeau_national_alt']}' style='float:right;width:128px;height:128px;' src='assets/images/drapeaux/{$lang['drapeau_national']}.png' />";
                } ?>
				<img id="drapeau_en_tete" alt="<?php echo $lang['drapeau_alt']; ?>" style="float:right;width:128px;height:128px;" src="assets/images/drapeaux/<?php echo $lang['drapeau']; ?>.png" />
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