<?php get_header(); ?>
	<div class="content">
			<div class="wrapper">
			<?php include 'inc/breadcrumb.php'; ?>
			<div>
				<div class="col1">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<?php the_post_thumbnail('full', array('class' => 'full-width')); ?>
						<h3><?php the_title(); ?></h3>
						<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
						<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
						<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
						<?php edit_post_link('Edit', '<div class="edit-entry">', '</div>'); ?>		
					</div>
				<?php endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>
				<div style="margin-top: 25px;">
					<?php
$the_cat = get_the_category();
$category_name = $the_cat[0]->cat_name;
$category_link = get_category_link( $the_cat[0]->cat_ID );
?>
				<a href="<?php echo $category_link ?>" class="button"><?php include 'inc/trans-back.php'; ?></a></div>
				</div>
				<div class="col2">
					<?php if(ICL_LANGUAGE_CODE=='en'){ 
						echo '<h4 style="margin-top:0px;">Maybe we can serve you with some other interesting questions?</h4>';
						echo '<p>Click on one of the following questions to get some interesting answers.</p>';
					} ?>
					<?php if(ICL_LANGUAGE_CODE=='nl'){ 
						echo '<h4 style="margin-top:0px;">Misschien bent u hierin ook geïnteresseerd?</h4>';
					} ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ 
						echo '';
					} ?>
					<?php if(ICL_LANGUAGE_CODE=='cs'){ 
						echo '';
					} ?>
					
					<ul class="default">
						<?php
							foreach( ( get_the_category() ) as $category ) {
							$the_query = new WP_Query('category_name=' . $category->category_nicename . '&showposts=4');
							while ($the_query->have_posts()) : $the_query->the_post();
						?>
							<li>
									
								<i class="icon-bell"></i>
										<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
										<?php the_excerpt() ?>
										
									
							</li>
<?php endwhile; ?></ul>
<?php
}
?>

				</div> 
			</div>
			</div>
	</div>
<?php get_footer(); ?>



