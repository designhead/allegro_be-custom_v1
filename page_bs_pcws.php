<?php
/*
Template Name: BS - PCWS
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
				<div class="level1"><?php echo get_the_title( get_post( icl_object_id(93, 'page') ) ); ?></div>
				<div class="level2">
					<ul>
						<li>
							<div class="block"><?php echo get_the_title( get_post( icl_object_id(97, 'page') ) ); ?></div>
							<div class="intro">
								<?php echo pippin_excerpt_by_id( get_post( icl_object_id(97, 'page') ) ); ?>
							</div>
							<ul>
								<li class="c1">
									<div class="img">
										<a href="<?php echo get_permalink( get_post( icl_object_id(101, 'page') ) ); ?>">
											<img src="http://www.allegro.be/wp-content/uploads/2013/07/Popsy-Accounting-Base.png">
										</a>
									</div>
									<div class="arrow">
										...
									</div>
									<div class="excerpt">
										<div class="title">Base</div>
										<p><?php echo pippin_excerpt_by_id( get_post( icl_object_id(101, 'page') ) );?></p>
									</div>
								</li>
								<li class="c2">
									<div class="img">
										<a href="<?php echo get_permalink( get_post( icl_object_id(103, 'page') ) ); ?>">
											<img src="http://www.allegro.be/wp-content/uploads/2013/07/Popsy-Accounting-Professional.png">
										</a>
									</div>
									<div class="arrow">
										...
									</div>
									<div class="excerpt">
										<div class="title">Professional</div>
										<p><?php echo pippin_excerpt_by_id( get_post( icl_object_id(103, 'page') ) ); ?></p>
									</div>
								</li>
								<li class="c3">
									<div class="img">
										<a href="<?php echo get_permalink( get_post( icl_object_id(105, 'page') ) ); ?>">
											<img src="http://www.allegro.be/wp-content/uploads/2013/07/Popsy-Accounting-Entreprise.png">
										</a>
									</div>
									<div class="arrow">
										...
									</div>
									<div class="excerpt">
										<div class="title">Entreprise</div>
										<p><?php
												echo pippin_excerpt_by_id( get_post( icl_object_id(105, 'page') ) );
											?></p>
									</div>
								</li>
							</ul>
						</li>
						<li>
							<div class="block"><?php echo get_the_title( get_post( icl_object_id(99, 'page') ) ); ?></div>
							<div class="intro"><?php echo pippin_excerpt_by_id( get_post( icl_object_id(99, 'page') ) ); ?></div>
							<ul>
								<li class="c4">
									<div class="img">
										<a href="<?php echo get_permalink( get_post( icl_object_id(99, 'page') ) ); ?>">
											<img src="http://www.allegro.be/wp-content/uploads/2013/08/Popsy-Product-Business.png">
										</a>
									</div>
									<div class="arrow">
										...
									</div>
									<div class="excerpt">
										<div class="title">Business</div>
										<p>
											<?php
												echo pippin_excerpt_by_id( get_post( icl_object_id(99, 'page') ) );
											?>
										</p>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				<a href="<?php echo get_permalink( get_post( icl_object_id(20, 'page') ) ); ?>" class="button-resellers"><?php echo get_the_title( get_post( icl_object_id(20, 'page') ) ); ?></a>
				<a href="http://www.popsy.com/Documents/Setups/Popsy31.exe" target="_blank" class="button-download">Download demo Popsy v3.1.957.0)</a>
			</div>
			<div class="col2">
				<div class="level1 accountant" style="padding-top: 54px; padding-bottom:59px;">
					<?php echo get_the_title( get_post( icl_object_id(95, 'page') ) ); ?>
				</div>
				<div class="level2">	
					<ul>
						<li class="c2">
							<div class="img">
								<a href="<?php echo get_permalink( get_post( icl_object_id(113, 'page') ) ); ?>">
									<img src="http://www.allegro.be/wp-content/uploads/2013/07/Popsy-Business-Professional.png">
								</a>
							</div>
							<div class="arrow">
								...
							</div>
							<div class="excerpt">
								<div class="title">Professional</div>
								<p><?php echo pippin_excerpt_by_id( get_post( icl_object_id(113, 'page') ) ); ?></p>
							</div>
						</li>
						<li class="c3">
							<div class="img">
								<a href="<?php echo get_permalink( get_post( icl_object_id(116, 'page') ) ); ?>">
									<img src="http://www.allegro.be/wp-content/uploads/2013/07/Popsy-Business-Entreprise.png">
								</a>
							</div>
							<div class="arrow">
								...
							</div>
							<div class="excerpt">
								<div class="title">Enterprise</div>
								<p><?php echo pippin_excerpt_by_id( get_post( icl_object_id(116, 'page') ) ); ?></p>
							</div>
						</li>
					</ul>
				</div>
				<div  class="content">
					<?php if(ICL_LANGUAGE_CODE=='en'){
						$my_id = 95;
						$post_id_95 = get_post($my_id);
						$content = $post_id_95->post_content;
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]>', $content);
						echo $content;
					} ?>
					<?php if(ICL_LANGUAGE_CODE=='nl'){
						$my_id = 489;
						$post_id_489 = get_post($my_id);
						$content = $post_id_489->post_content;
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]>', $content);
						echo $content;
					} ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){
						$my_id = 554;
						$post_id_554 = get_post($my_id);
						$content = $post_id_554->post_content;
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]>', $content);
						echo $content;
					} ?>
					<a href="<?php echo get_permalink( get_post( icl_object_id(20, 'page') ) ); ?>" class="button-resellers"><?php echo get_the_title( get_post( icl_object_id(20, 'page') ) ); ?></a>
					<a href="http://www.popsy.com/Documents/Setups/Popsy31.exe" target="_blank" class="button-download">Download demo Popsy (v3.1.957.0)</a>
				</div>
			</div>
		</div>
	</div>
	
</div>

<?php get_footer(); ?>
