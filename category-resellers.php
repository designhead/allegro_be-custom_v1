<?php get_header(); ?>

<div class="content">
	<div class="wrapper">
		<div class="col1">
			<?php if(ICL_LANGUAGE_CODE=='en'){ 
					$my_id = 20;
					$post_id_20 = get_post($my_id);
					$content = $post_id_20->post_content;
					$content = apply_filters('the_content', $content);
					$content = str_replace(']]>', ']]>', $content);
					$title = $post_id_20->post_title;
					$title = apply_filters('the_title', $title);
					$title = str_replace(']]>', ']]>', $title);
					echo '<h2>';
					echo $title;
					echo '</h2>';
					echo $content;
				} ?>
				<?php if(ICL_LANGUAGE_CODE=='nl'){ 
					$my_id = 572;
					$post_id_572 = get_post($my_id);
					$content = $post_id_572->post_content;
					$content = apply_filters('the_content', $content);
					$content = str_replace(']]>', ']]>', $content);
					$title = $post_id_572->post_title;
					$title = apply_filters('the_title', $title);
					$title = str_replace(']]>', ']]>', $title);
					echo '<h2>';
					echo $title;
					echo '</h2>';
					echo $content;
				} ?>
				<?php if(ICL_LANGUAGE_CODE=='fr'){ 
					$my_id = 639;
					$post_id_639 = get_post($my_id);
					$content = $post_id_639->post_content;
					$content = apply_filters('the_content', $content);
					$content = str_replace(']]>', ']]>', $content);
					$title = $post_id_639->post_title;
					$title = apply_filters('the_title', $title);
					$title = str_replace(']]>', ']]>', $title);
					echo '<h2>';
					echo $title;
					echo '</h2>';
					echo $content;
				} ?>
				<?php if(ICL_LANGUAGE_CODE=='cs'){ 
					$my_id = 1071;
					$post_id_1071 = get_post($my_id);
					$content = $post_id_1071->post_content;
					$content = apply_filters('the_content', $content);
					$content = str_replace(']]>', ']]>', $content);
					$title = $post_id_1071->post_title;
					$title = apply_filters('the_title', $title);
					$title = str_replace(']]>', ']]>', $title);
					echo '<h2>';
					echo $title;
					echo '</h2>';
					echo $content;
				} ?>
		</div>
		<div class="col2">
			<div class="resellers">
				<ul>
				<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts("paged=$paged&cat=$cat&orderby=title&order=ASC");
?>
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
					
					<li>
					<div class="wrapper">
						<div <?php post_class() ?>>
							<div class="label">
								<?php the_post_thumbnail(); ?>
							</div>
							<div class="info">
								<h3><?php the_title(); ?></h3>
								<div class="contact-info">
									<?php the_content() ?>
									<?php edit_post_link('Edit', '<div class="edit-entry">', '</div>'); ?>
								</div>
								<!-- <a href="">Find on Google maps</a>	 -->
							</div>
						</div>
					</div>
					</li>
					<?php endwhile; ?>
				</ul>
			
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
</div>

<?php get_footer(); ?>