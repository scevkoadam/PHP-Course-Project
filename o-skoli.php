<?php 
	include("includes/config.php");
	include("includes/functions.php");
?>
<!DOCTYPE html>
<html lang="sr">
<head>
	<?php include("templates/header.php"); ?>
</head>
<body id="about">
	
	<?php include("templates/main_header.php"); ?>

	<main>
		<!-- Intro Section -->
		<section class="intro-section">
			<?php include("templates/intro_section.php"); ?>
			<?php include("templates/intro_skola.php"); ?>
		</section>
		<!-- Intro Section END -->

		<?php include("templates/last_news.php"); ?>
	</main>
	<?php include("templates/footer.php"); ?>
</body>
</html>