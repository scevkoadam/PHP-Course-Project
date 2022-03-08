<?php
	$news = get_news($_GET['id']);
?>
<?php if ($news): ?>
<div class="container">
	<article class="clearfix latest-news">
		<header>
			<h2><a href="#"><?php echo $news['title']; ?></a></h2>
http://localhost:8012/krojac-html-uradjen/img/web-dizajn.jpg			<time class="date" datetime="<?php echo $news['date']; ?>"><?php echo $news['date']; ?></time>
		</header>
		<div class="col-1-2">
		<a class="img-link" href="#"><img src="<?php echo $news['img']; ?>" alt="<?php echo $news['title']; ?>"></a>
		</div>
		<div class="col-1-2">
		<p><?php echo $news['text']; ?>.</p>
		</div>
	</article>
</div>
<?php endif; ?>