<!-- White Holder -->
<div class="white-holder">
	<?php
		$news_list = get_all_news();
		//debug($news_list);exit;
	?>

	<!-- Container -->
	<?php foreach($news_list as $news): ?>
		<?php //debug($news);exit; ?>
	<div class="container">
		<article class="clearfix latest-news">
			<header>
				<h2><a href="novosti.php?id=<?php echo $news['id']; ?>"><?php echo $news['title']; ?></a></h2>
				<time class="date" datetime="<?php echo $news['date']; ?>"><?php echo $news['date']; ?></time>
			</header>
			<div class="col-1-2">
			<a class="img-link" href="novosti.php?id=<?php echo $news['id']; ?>"><img src="<?php echo $news['img']; ?>" alt="<?php echo $news['title']; ?>"></a>
			</div>
			<div class="col-1-2">
			<p><?php echo $news['short_text']; ?>.</p>
			<a href="novosti.php?id=<?php echo $news['id']; ?>" class="read-more">Pročitaj više &raquo;</a>
			</div>
		</article>
	</div>
	<?php endforeach; ?>
	<!-- Container END -->
</div>
<!-- White Holder END -->