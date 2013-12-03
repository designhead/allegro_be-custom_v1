<?php get_header(); ?>
	<div class="content">
			<div class="wrapper">
			
			<div class="faq">
				<div class="col1">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h3><?php the_title(); ?></h3>
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
						<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
						<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
						<?php edit_post_link('Edit', '<div class="edit-entry">', '</div>'); ?>		
					</div>
				<?php endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>
				<div style="margin-top: 25px;"><a href="<?php echo get_permalink( get_post( icl_object_id(226, 'page') ) ); ?>" class="button"><?php include 'inc/trans-back.php'; ?></a></div>
				</div>
				<div class="col2">
				
					<?php if(ICL_LANGUAGE_CODE=='en'){ 
						echo '<h4 style="margin-top:0px;">Maybe we can serve you with some other interesting questions?</h4>';
						echo '<p>Click on one of the following questions to get some interesting answers.</p>';
					} ?>
					<?php if(ICL_LANGUAGE_CODE=='nl'){ 
						echo '<h4 style="margin-top:0px;">Misschien kunnen we nog een aantal interessante vragen beantwoorden?</h4>';
						echo '<p>Klik op één van de onderstaande vragen voor een interessant antwoord.</p>';
					} ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ 
						echo '';
					} ?>
					<?php if(ICL_LANGUAGE_CODE=='cs'){ 
						echo '';
					} ?>
				<!--
<?php
foreach((get_the_category()) as $category) { 
    echo $category->cat_name . ' '; 
} 
?>
-->

					<ul class="faq">
					
					<?php
						foreach( ( get_the_category() ) as $category ) {
						$the_query = new WP_Query('category_name=' . $category->category_nicename . '&showposts=99');
						while ($the_query->have_posts()) : $the_query->the_post();
					?>
						<li>
							<img src="<?php bloginfo('template_directory'); ?>/img/icon-faq.png">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</li>
<?php endwhile; ?>
<?php
}
?>
</ul>
				
					
				
				
				</div> 
			</div>
			</div>
	</div>
<?php get_footer(); ?>
