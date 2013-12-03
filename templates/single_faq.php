<?php get_header(); ?>
	<div class="content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="wrapper">
				<div class="col1">
					<h3><?php
foreach((get_the_category()) as $category) { 
    echo $category->cat_name . ' '; 
} 
?></h3>

...<a href="../" class="button">Back</a>
					<?php
						foreach( ( get_the_category() ) as $category ) {
						$the_query = new WP_Query('category_name=' . $category->category_nicename . '&showposts=5');
						while ($the_query->have_posts()) : $the_query->the_post();
					?>
			<li>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</li>
<?php endwhile; ?>
<?php
}
?>
					
				</div>
				<div class="col2">
				...
					<h3><?php the_title(); ?></h3>
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
						<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
						<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
						<?php edit_post_link('Edit', '<div class="edit-entry">', '</div>'); ?>		
					</div>
				</div>
				<?php endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p> 
			</div>
		<?php endif; ?>
	</div>
<?php get_footer(); ?>