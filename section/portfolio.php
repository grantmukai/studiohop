<!-- début section Portfolio -->

<?php if (!preg_match('/^es/', $cv_lang)) {
	echo "<section id='portfolio' class='section'>";
	$portfolioLangue = substr($cv_lang, 0, 2);
	include 'portfolio/'.$portfolioLangue.'.php';
	echo "</section>";} ?>

<!-- fin section Portfolio -->