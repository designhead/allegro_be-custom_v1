<?php
/*
Template Name: BS - ACS
*/
?>

<?php get_header(); ?>

<?php 
	$pagename = get_query_var('pagename');
	if ( !$pagename && $id > 0 ) {
	// If a static page is set as the front page, $pagename will not be set. Retrieve it from the queried object
	$post = $wp_query->get_queried_object();
	$pagename = $post->post_name;
	}
?>

<div class="content">

	<div class="wrapper">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
				<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
		<?php endwhile; endif; ?>
		
		<div class="business-software-overview">
			<div class="col1">
				<div class="level1"><?php echo get_the_title( get_post( icl_object_id(120, 'page') ) ); ?></div>
				<div class="level2">
					<ul>
						<li>
							<div class="block"><?php echo get_the_title( get_post( icl_object_id(2669, 'page') ) ); ?></div>
							<div class="intro">
								<?php echo pippin_excerpt_by_id( get_post( icl_object_id(2669, 'page') ) ); ?>
							</div>
							<ul>
								<li class="c1">
									<div class="img">
										<a href="<?php echo get_permalink( get_post( icl_object_id(124, 'page') ) ); ?>">
											<img src="http://www.allegro.be/wp-content/uploads/2013/07/Allegro-Cloud-Limited.png">
										</a>
									</div>
									<div class="arrow">
										...
									</div>
									<div class="excerpt">
										<div class="title">Limited</div>
										<p><?php
												echo pippin_excerpt_by_id( get_post( icl_object_id(124, 'page') ) );
											?></p>
									</div>
								</li>
								<li class="c2">
									<div class="img">
										<a href="<?php echo get_permalink( get_post( icl_object_id(126, 'page') ) ); ?>">
											<img src="http://www.allegro.be/wp-content/uploads/2013/07/Allegro-Cloud-Basic.png">
										</a>
									</div>
									<div class="arrow">
										...
									</div>
									<div class="excerpt">
										<div class="title">Basic</div>
										<p><?php echo pippin_excerpt_by_id( get_post( icl_object_id(126, 'page') ) ); ?></p>
									</div>
								</li>
								<li class="c3">
									<div class="img">
										<a href="<?php echo get_permalink( get_post( icl_object_id(129, 'page') ) ); ?>">
											<img src="http://www.allegro.be/wp-content/uploads/2013/07/Allegro-Cloud-Advanced.png">
										</a>
									</div>
									<div class="arrow">
										...
									</div>
									<div class="excerpt">
										<div class="title">Advanced</div>
										<p><?php
												echo pippin_excerpt_by_id( get_post( icl_object_id(129, 'page') ) );
											?></p>
									</div>
								</li>
							</ul>
						</li>
						<li>
							<div class="block"><?php echo get_the_title( get_post( icl_object_id(2678, 'page') ) ); ?></div>
							<div class="intro"><?php echo pippin_excerpt_by_id( get_post( icl_object_id(2678, 'page') ) ); ?></div>
							<ul>
								<li class="c4">
									<div class="img">
										<a href="<?php echo get_permalink( get_post( icl_object_id(2678, 'page') ) ); ?>">
											<img src="http://www.allegro.be/wp-content/uploads/2013/09/Allegro-layout_Business.jpg">
										</a>
									</div>
									<div class="arrow">
										...
									</div>
									<div class="excerpt">
										<div class="title">Business</div>
										<p>
											<?php
												echo pippin_excerpt_by_id( get_post( icl_object_id(2678, 'page') ) );
											?>
										</p>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				<a href="<?php echo get_permalink( get_post( icl_object_id(20, 'page') ) ); ?>" class="button-resellers"><?php echo get_the_title( get_post( icl_object_id(20, 'page') ) ); ?></a>
			</div>
			<div class="col2">
				<div class="level1 accountant" style="padding-top: 54px; padding-bottom:59px;">
					<?php echo get_the_title( get_post( icl_object_id(122, 'page') ) ); ?>
				</div>
				
				<div class="content">
					<?php if(ICL_LANGUAGE_CODE=='en'){
						$my_id = 122;
						$post_id_122 = get_post($my_id);
						$content = $post_id_122->post_content;
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]>', $content);
						echo $content;
					} ?>
					<?php if(ICL_LANGUAGE_CODE=='nl'){
						$my_id = 484;
						$post_id_484 = get_post($my_id);
						$content = $post_id_484->post_content;
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]>', $content);
						echo $content;
					} ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){
						$my_id = 482;
						$post_id_482 = get_post($my_id);
						$content = $post_id_482->post_content;
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]>', $content);
						echo $content;
					} ?>
					<?php if(ICL_LANGUAGE_CODE=='cs'){
						$my_id = 1173;
						$post_id_1173 = get_post($my_id);
						$content = $post_id_1173->post_content;
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]>', $content);
						echo $content;
					} ?>
					
					<a href="<?php
						global $post;
						$url = get_post_meta( icl_object_id(122, 'page'), 'order_now_saas', true);
						$get_url = wp_get_attachment_url( $url );
						echo  $get_url;
					?>" class="button-resellers" target="_blank">
						<?php include 'inc/trans-order-now.php'; ?>
					
					<a href="<?php echo get_permalink( get_post( icl_object_id(20, 'page') ) ); ?>" class="button-resellers"><?php echo get_the_title( get_post( icl_object_id(20, 'page') ) ); ?></a>
				</div>
			</div>
		</div>
	</div>
	
</div>

<?php get_footer(); ?>
