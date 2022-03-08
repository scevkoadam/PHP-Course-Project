<?php 
	include("includes/config.php");
	include("includes/functions.php");
	include("includes/gallery-functions.php");
?>
<!DOCTYPE html>
<html lang="sr">
<head>
	<?php include("templates/header.php"); ?>
</head>
<body id="home">
	
	<?php include("templates/main_header.php"); ?>

	<main>
		<?php
			normalize_data(get_news_data());
		?>
		<!-- Intro Section -->
		<section class="intro-section">
			<?php include("templates/intro_section.php"); ?>
			<?php include("templates/intro_section_under.php"); ?>
		</section>
		<!-- Intro Section END -->

		<?php 
		include("templates/photos.php");
		?>
	</main>
	<?php include("templates/footer.php"); ?>
</body>
</html>