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
				if (preg_match('/^en-US/', $cv_lang)) {
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