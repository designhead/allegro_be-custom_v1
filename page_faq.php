<?php
/*
Template Name: Faq
*/
?>

<?php get_header(); ?>

<div class="content">
	<div class="wrapper">
		
		<div class="faq">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
					<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				</div>
			<?php endwhile; endif; ?>
			<?php edit_post_link('Edit', '<div class="edit-entry" style="display:block">', '</div>'); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
