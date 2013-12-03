<?php
/*
Template Name: Two column structure
*/
?>

<?php get_header(); ?>

<div class="content">

	<div class="wrapper">
		<?php include 'inc/breadcrumb.php'; ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
				<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
		<?php endwhile; endif; ?>
		<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	</div>	
</div>

<?php get_footer(); ?>