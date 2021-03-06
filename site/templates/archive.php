<?php snippet('header') ?>

	<h1 class="title"><?php echo $page->title() ?></h1>

	<article>
		<ul class="ul-list">
		<?php foreach($page->children()->visible()->flip()->limit(5) as $article): ?>
			<a href="<?php echo $article->url() ?>">
				<li class="li-list">
					<p><?php echo $article->date('l j F Y') ?></p>
					<h2><?php echo html($article->title()) ?></h2>
					<p><?php echo excerpt($article->text(), 400) ?></p>
					<hr>
				</li>
			</a>
		<?php endforeach ?>
		</ul>
	</article>

	<aside>
		<section>
			<h3>Selected Online Press</h3>
			<?php snippet('online') ?>
		</section>

		<section>
			<h3>Selected Print Press</h3>
			<?php snippet('press') ?>
		</section>
	</aside>

<?php snippet('footer') ?>