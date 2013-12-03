<?php
/*
Template Name: 2 columns
*/
?>

<?php get_header(); ?>

<div class="content">

	<div class="wrapper">
	
		<div class="two-columns">
			
			<ul>
				<li>Column 1</li>
				<li>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="post" id="post-<?php the_ID(); ?>">
				
					<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
					<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					</div>
					<?php endwhile; endif; ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</li>
			</ul>
		
		</div>
	</div>
	
</div>

<?php get_footer(); ?>
