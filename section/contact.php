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

				<form id="contact-form" name="contact-form" action="assets/php/contactForm.php">
				<!-- j'ai enlevé action="post" et role="form" d'en avant. Il semble marcher mais si ça échou, remets-le -->

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

<!-- fin section contact -->