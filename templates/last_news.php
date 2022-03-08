<!-- White Holder -->
<div class="white-holder">
	<!-- Container -->

	<?php
		$last_news = get_last_news();
		// debug($last_news);exit;
	?>
	<div class="container">
		<article class="clearfix latest-news">
			<header>
				<h2><a href="novosti.php?id=<?php echo $last_news['id']; ?>"><?php echo $last_news['title']; ?></a></h2>
				<time class="date" datetime="2016-07-18"><?php echo $last_news['date']; ?></time>
			</header>
			<div class="col-1-2">
			<a  class="img-link" href="novosti.php?id=<?php echo $last_news['id']; ?>"><img src="<?php echo $last_news['img']; ?>" alt="<?php echo $last_news['title']; ?>"></a>
			</div>
			<div class="col-1-2">
			<p><?php echo $last_news['short_text']; ?></p>
			<a href="novosti.php?id=<?php echo $last_news['id']; ?>" class="read-more">Pročitaj više &raquo;</a>
			</div>
		</article>
	</div>
	<!-- Container END -->
</div>
<!-- White Holder END -->