<?php
	$photos = get_photos($_GET['id']);
?>
<?php if ($photos): ?>
<div class="container clearfix photo_single">
		<header>
			<h2><a href="#"><?php echo $photos['title']; ?></a></h2>
		</header>
		<div>
		<a class="img-link-velika" href="#"><img src="<?php echo $photos['slikaVelika']; ?>" alt="<?php echo $photos['title']; ?>"></a>
		</div>
</div>
<?php endif; ?>