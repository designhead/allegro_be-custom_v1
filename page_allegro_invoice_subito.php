<?php
/*
Template Name: Allegro Invoice Subito
*/
?>

<?php get_header('allegro-invoice-subito'); ?>

<div class="content">

	<div class="wrapper">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="col1">
					<h3 style="margin-bottom: 20px"><?php the_title(); ?></h3>
					<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
					<p style="margin-bottom: 10px; padding-bottom:0px;"><a href="<?php echo get_permalink( get_post( icl_object_id(20, 'page') ) ); ?>" class="button"><?php echo get_the_title( get_post( icl_object_id(20, 'page') ) ); ?></a></p>
					<p><a href="<?php echo get_permalink( get_post( icl_object_id(310, 'page') ) ); ?>" class="button"><?php echo get_the_title( get_post( icl_object_id(310, 'page') ) ); ?></a></p>
					<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				</div>
				<div class="col2">
					
					<?php if(ICL_LANGUAGE_CODE=='en'){
						echo '<h4>To get your free entry please fill out your details</h4>';
						gravity_form(3, false, true, false, '', false);	
					} ?>
					<?php if(ICL_LANGUAGE_CODE=='nl'){
						echo '<h4>Om uw gratis toegang te bekomen gelieve uw gegevens in te vullen</h4>';
						gravity_form(1, false, true, false, '', false);
					} ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){
						echo '<h4>Pour obtenir votre licence gratuite, remplissez la fiche signalétique ci-dessous</h4>';
						gravity_form(2, false, true, false, '', false);
					} ?>
					<?php if(ICL_LANGUAGE_CODE=='cs'){ 
						gravity_form(4, false, true, false, '', false);
					} ?>
				</div>
			</div>
		<?php endwhile; endif; ?>
		<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	</div>	
</div>

<?php get_footer(); ?>
