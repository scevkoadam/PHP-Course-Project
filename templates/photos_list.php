<!-- Container -->
<div class="container">
	<!-- White Holder -->
	<div class="white-holder clearfix">
		
	<?php
		$photos_list = get_all_photos();
		//debug($photos_list);exit;
	?>

	<?php foreach($photos_list as $photos): ?>
		<?php //debug($photos);exit; ?>
		<div class="col-1-2 gallery-img clearfix">
			<header>
				<h2><a href="galerija.php?id=<?php echo $photos['id']; ?>" class="naslov-slike"><?php echo $photos['title']; ?></a></h2>
			</header>
			<a class="img-link" href="galerija.php?id=<?php echo $photos['id']; ?>"><img src="<?php echo $photos['slikaMala']; ?>" alt="<?php echo $photos['title']; ?>"></a>
		</div>
	<?php endforeach; ?>
	</div>
	<!-- White Holder END -->
</div>
<!-- Container END -->