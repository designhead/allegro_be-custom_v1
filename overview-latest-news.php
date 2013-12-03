<div class="info">
	<div class="date">
		<?php the_time('M j, Y') ?>
	</div>
	<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
	<?php the_excerpt() ?>
	<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" class="read-more">Read more</a>
</div>