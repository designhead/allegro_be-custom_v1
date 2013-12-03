<?php get_header(); ?>

<div class="content">
	<div class="wrapper">
		<div class="listing-1">
		
			<?php if (have_posts()) : ?>
	
				<?php while (have_posts()) : the_post(); ?>
					
				<div class="wrapper">
					
				<div <?php post_class() ?>>
					
					<div class="info no-thumbnail">
						<div class="date">
							<?php the_time('M j, Y') ?>
						</div>
						<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						<?php the_excerpt() ?>
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" class="read-more">Read more</a>
					</div>
					
				</div>
			
				</div>
		
				<?php endwhile; ?>
		
			<?php else :
		
				if ( is_category() ) { // If this is a category archive
					printf("<h2>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
				} else if ( is_date() ) { // If this is a date archive
					echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
				} else if ( is_author() ) { // If this is a category archive
					$userdata = get_userdatabylogin(get_query_var('author_name'));
					printf("<h2>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
				} else {
					echo("<h2>No posts found.</h2>");
				}
				get_search_form();
		
			endif;
		?>
		
		</div>
	</div>
</div>

<?php get_footer(); ?>