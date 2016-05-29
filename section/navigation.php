<!-- Début Navigation -->

<nav class="navbar navbar-custom navbar-fixed-top">
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