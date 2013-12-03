<?php
/*
Template Name: Allegro Cloud Solutions - KMO and/or independant
*/
?>

<?php get_header(); ?>

<div class="content">
	<div class="wrapper">
		<?php include 'inc/breadcrumb.php'; ?>
		<div class="col1">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<!-- <h3><?php the_title() ?></h3> -->
					<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
					<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				</div>
			<?php endwhile; endif; ?>
			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
		</div>
		<div class="col2">
			<h3><?php include 'inc/title-choose-your-software.php'; ?></h3>
			<div class="business-software">
				<div class="modules">
					<div class="snav"><?php include 'inc/business-software-acs-snav.php'; ?></div>
					<ul>
						<li>
							<a href="
							<?php if(ICL_LANGUAGE_CODE=='en'){ 
								echo get_permalink(2669);
							} ?>
							<?php if(ICL_LANGUAGE_CODE=='nl'){
								echo get_permalink(2709);
							} ?>
							<?php if(ICL_LANGUAGE_CODE=='fr'){
								echo get_permalink(2711);
							} ?>
							<?php if(ICL_LANGUAGE_CODE=='cs'){
								echo get_permalink(2751);
							} ?>
							">
								<div class="wrapper module-2">
									<div class="label overview">
										<img src="/wp-content/uploads/2013/09/Allegro-Layout-Accounting.jpg">
									</div>
									<div class="arrow">
										<img src="<?php bloginfo('template_directory'); ?>/img/arrow-software-color5.png">
									</div>
									<div class="info">
										<h4>Allegro ACCOUNTING</h4>
										<p><?php $custom_fields = get_post_custom(the_ID);
	  $my_custom_field = $custom_fields['popsy_accounting'];
	  foreach ( $my_custom_field as $key => $value )
	    echo  substr($value,0,150) ;
	?></p>
										<div class="button"><?php include 'inc/trans-go.php'; ?></div>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="
									<?php if(ICL_LANGUAGE_CODE=='en'){ 
										echo get_permalink(2678);
									} ?>
									<?php if(ICL_LANGUAGE_CODE=='nl'){
										echo get_permalink(2875); 
									} ?>
									<?php if(ICL_LANGUAGE_CODE=='fr'){
										echo get_permalink(2877);
									} ?>
									<?php if(ICL_LANGUAGE_CODE=='cs'){
										echo get_permalink(2879);
									} ?>
									">
								<div class="wrapper module-2">
									<div class="label overview">
										<img src="/wp-content/uploads/2013/09/Allegro-layout_Business.jpg">
									</div>
									<div class="arrow">
										<img src="<?php bloginfo('template_directory'); ?>/img/arrow-software-color5.png">
									</div>
									<div class="info">
										<h4>Allegro BUSINESS</h4>
										<p><?php $custom_fields = get_post_custom(the_ID);
	  $my_custom_field = $custom_fields['popsy_business'];
	  foreach ( $my_custom_field as $key => $value )
	    echo  substr($value,0,150) ;
	?></p>
										<div class="button"><?php include 'inc/trans-go.php'; ?></div>
									</div>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
