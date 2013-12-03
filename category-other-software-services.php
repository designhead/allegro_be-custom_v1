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
						$the_query = new WP_Query('category_name=' . $category->category_nicename . '&showposts=999');
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
<?php endwhile; ?>
			</ul>
<?php
}
?>
				</div>
				<div class="col2">
					<?php if(ICL_LANGUAGE_CODE=='en'){ 
					$my_id = 1188;
					$post_id_1188 = get_post($my_id);
					$content = $post_id_1188->post_content;
					$content = apply_filters('the_content', $content);
					$content = str_replace(']]>', ']]>', $content);
					echo $content;
				} ?>
				<?php if(ICL_LANGUAGE_CODE=='nl'){ 
					$my_id = 1189;
					$post_id_1189 = get_post($my_id);
					$content = $post_id_1189->post_content;
					$content = apply_filters('the_content', $content);
					$content = str_replace(']]>', ']]>', $content);
					echo $content;
				} ?>
				<?php if(ICL_LANGUAGE_CODE=='fr'){ 
					$my_id = 1191;
					$post_id_1191 = get_post($my_id);
					$content = $post_id_1191->post_content;
					$content = apply_filters('the_content', $content);
					$content = str_replace(']]>', ']]>', $content);
					echo $content;
				} ?>
				<?php if(ICL_LANGUAGE_CODE=='cs'){ 
					$my_id = 1192;
					$post_id_1192 = get_post($my_id);
					$content = $post_id_1192->post_content;
					$content = apply_filters('the_content', $content);
					$content = str_replace(']]>', ']]>', $content);	
					echo $content;
				} ?>
				</div> 
			</div>
			</div>
	</div>
<?php get_footer(); ?>