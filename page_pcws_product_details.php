<?php
/*
Template Name: Popsy Classic Windows Solutions - Product details
*/
?>

<?php get_header(); ?>

<div class="content">
	<div class="wrapper">
		<div class="col1">
			<div class="business-software">
				<h3><?php the_title() ?></h3>
				<div class="details <?php $key="color"; echo get_post_meta($post->ID, $key, true); ?>">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="post" id="post-<?php the_ID(); ?>">
						<!-- <?php $key="excerpt"; echo get_post_meta($post->ID, $key, true); ?> -->
						<?php the_post_thumbnail(); ?>
						<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
						<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					</div>
					<?php endwhile; endif; ?>
				</div>
			</div>
			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			<a href="<?php echo get_permalink( get_post( icl_object_id(20, 'page') ) ); ?>" class="button"><?php echo get_the_title( get_post( icl_object_id(20, 'page') ) ); ?></a>
		</div>
		<div class="col2">
			<h3>
				<?php if(ICL_LANGUAGE_CODE=='en'){ 
					echo 'Choose your type of purchase';
				} ?>
				<?php if(ICL_LANGUAGE_CODE=='nl'){ 
					echo 'Kies uw type van aankoop';
				} ?>
				<?php if(ICL_LANGUAGE_CODE=='fr'){ 
					echo 'Sélectionner votre produit ';
				} ?>
				<?php if(ICL_LANGUAGE_CODE=='cs'){ 
					echo 'Zvolte prosím způsob nákupu';
				} ?>
			</h3>
			<div class="business-software">
				<div class="modules">
					<div class="type-purchase">
						<ul>
							<li>
								<div class="wrapper">
									<div class="label">Local</div>
									<div class="info">
										<p><?php $key="local"; echo get_post_meta($post->ID, $key, true); ?></p>
										
										<a href="
											<?php 
											$url = get_post_meta($post->ID, 'order_now_local', true);
											$get_url = wp_get_attachment_url( $url );
											echo $get_url ?>
										"><?php include 'inc/trans-order-now.php'; ?></a>	
									</div>
								</div>
							</li>
							<li>
								<div class="wrapper">
									<div class="label">SAAS</div>
									<div class="info">
										<p><?php $key="saas"; echo get_post_meta($post->ID, $key, true); ?></p>
										<a href="
											<?php 
											$url = get_post_meta($post->ID, 'order_now_saas', true);
											$get_url = wp_get_attachment_url( $url );
											echo $get_url ?>
										">
											<?php include 'inc/trans-order-now.php'; ?>
										</a>	
									</div>
								</div>
							</li>
							<li>
								<div class="wrapper">
									<div class="label">RENT</div>
									<div class="info">
										<p><?php $key="rent"; echo get_post_meta($post->ID, $key, true); ?></p>
										<a href="
											<?php 
											$url = get_post_meta($post->ID, 'order_now_rent', true);
											$get_url = wp_get_attachment_url( $url );
											echo $get_url ?>
										">
											<?php include 'inc/trans-order-now.php'; ?>
										</a>	
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<a href="<?php echo get_permalink( get_post( icl_object_id(119, 'page') ) ); ?>" class="button"><?php include 'inc/trans-back.php'; ?></a>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
