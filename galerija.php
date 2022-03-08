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
<body id="gallery">
	
	<?php include("templates/main_header.php"); ?>

	<main>
		<!-- Intro Section -->
		<section class="intro-section">
			<?php include("templates/intro_section.php"); ?>
			<?php include("templates/intro_galerija.php"); ?>
		</section>
		<!-- Intro Section END -->
		
		<?php
			//debug_g($_GET['id']);exit;
			//normalize_gallery_data(get_gallery_data());	
		?>

		<?php if (array_key_exists('id', $_GET) AND is_numeric($_GET['id']) AND $_GET['id'] > 0) : ?>
			<?php include("templates/photos_single.php"); ?>
		<?php else: ?>
			<?php include("templates/photos_list.php"); ?>
		<?php endif; ?>

	</main>
	<?php include("templates/footer.php"); ?>
</body>
</html>