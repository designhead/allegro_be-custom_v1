<?php
/*
Template Name: Popsy Classic Windows Solutions - Accountant
*/
?>

<?php get_header(); ?>

<div class="content">
	<div class="wrapper">
		<?php include 'inc/breadcrumb.php'; ?>
		<div class="col1">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
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
					<div class="snav"><?php include 'inc/business-software-pcws-snav.php'; ?></div>
					<ul>
						<li>
							<a href="
								<?php if(ICL_LANGUAGE_CODE=='en'){ 
									echo get_permalink(113);
								} ?>
								<?php if(ICL_LANGUAGE_CODE=='nl'){
									echo get_permalink(519);
								} ?>
								<?php if(ICL_LANGUAGE_CODE=='fr'){
									echo get_permalink(522);
								} ?>
							">
								<div class="wrapper module-2">
									<div class="label professional">
										<img src="/wp-content/uploads/2013/07/Popsy-Business-Professional.png">
									</div>
									<div class="arrow">
										<img src="<?php bloginfo('template_directory'); ?>/img/arrow-software-color2.png">
									</div>
									<div class="info">
										<h4 class="professional">Popsy PROFESSIONAL</h4>
										<p>
	                                    <?php $custom_fields = get_post_custom(the_ID);
	  $my_custom_field = $custom_fields['popsy_enterprise'];
	  foreach ( $my_custom_field as $key => $value )
	    echo  substr($value,0,150) ;
	?></p>
										<div class="button"><?php include 'inc/trans-proceed.php'; ?></div>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="
								<?php if(ICL_LANGUAGE_CODE=='en'){ 
									echo get_permalink(116);
								} ?>
								<?php if(ICL_LANGUAGE_CODE=='nl'){
									echo get_permalink(357);
								} ?>
								<?php if(ICL_LANGUAGE_CODE=='fr'){
									echo get_permalink(404);
								} ?>
							">
								<div class="wrapper module-2">
									<div class="label entreprise">
										<img src="/wp-content/uploads/2013/07/Popsy-Business-Entreprise.png">
									</div>
									<div class="arrow">
										<img src="<?php bloginfo('template_directory'); ?>/img/arrow-software-color3.png">
									</div>
									<div class="info">
										<h4 class="entreprise">Popsy ENTERPRISE</h4>
										<p><?php $custom_fields = get_post_custom(the_ID);
	  $my_custom_field = $custom_fields['popsy_professional'];
	  foreach ( $my_custom_field as $key => $value )
	    echo  substr($value,0,150) ;
	?></p>
	
										<div class="button"><?php include 'inc/trans-proceed.php'; ?></div>
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
