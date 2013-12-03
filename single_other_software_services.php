<?php get_header(); ?>
	<div class="content">
			<div class="wrapper">
			<?php include 'inc/breadcrumb.php'; ?>
			<div>
				<div class="col1">
					<h3><?php
foreach((get_the_category()) as $category) { 
    echo $category->cat_name . ' '; 
} 
?></h3>

					<ul class="other-software-services">
					<?php
						foreach( ( get_the_category() ) as $category ) {
						$the_query = new WP_Query('category_name=' . $category->category_nicename . '&showposts=99');
						while ($the_query->have_posts()) : $the_query->the_post();
					?>
			<li>
				<div class="wrapper">
					<div class="inner">
						<div class="thumbnail">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
							<?php the_post_thumbnail('full'); ?>
						</a>
					</div>	
					</div>
				</div>
				
			</li>
<?php endwhile; ?></ul>
<?php
}
?>
				</div>
				<div class="col2">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h3><?php the_title(); ?></h3>
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<?php the_post_thumbnail('full', array('class' => 'small')); ?>
						<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
						<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
						<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
						<?php edit_post_link('Edit', '<div class="edit-entry">', '</div>'); ?>		
					</div>
				<?php endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>
				</div> 
			</div>
			</div>
	</div>
<?php get_footer(); ?>