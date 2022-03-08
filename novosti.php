<?php 
	include("includes/config.php");
	include("includes/functions.php");
?>
<!DOCTYPE html>
<html lang="sr">
<head>
	<?php include("templates/header.php"); ?>
</head>
<body id="news">
	
	<?php include("templates/main_header.php"); ?>

	<main>
		<!-- Intro Section -->
		<section class="intro-section">
			<?php include("templates/intro_section.php"); ?>
			<?php include("templates/intro_news.php"); ?>
		</section>
		<!-- Intro Section END -->

		<?php // debug($_GET['id']);exit; ?>

		<?php if (array_key_exists('id', $_GET) AND is_numeric($_GET['id']) AND $_GET['id'] > 0) : ?>
			<?php include("templates/news_single.php"); ?>
		<?php else: ?>
			<?php include("templates/news_list.php"); ?>
		<?php endif; ?>

		
	</main>
	<?php include("templates/footer.php"); ?>
</body>
</html>