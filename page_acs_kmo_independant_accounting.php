<?php
/*
Template Name: Allegro Cloud Solutions - KMO and/or independant - Accounting
*/
?>

<?php get_header(); ?>

<div class="content">
	<div class="wrapper">
		<?php include 'inc/breadcrumb.php'; ?>
		<div class="col1">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<h3><?php the_title() ?></h3>
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
									echo get_permalink(124);
								} ?>
								<?php if(ICL_LANGUAGE_CODE=='nl'){
									echo get_permalink(535);
								} ?>
								<?php if(ICL_LANGUAGE_CODE=='fr'){
									echo get_permalink(615);
								} ?>
								<?php if(ICL_LANGUAGE_CODE=='cs'){
									echo get_permalink(1176);
								} ?>
							">
								<div class="wrapper module-2">
									<div class="label base">
										<img src="/wp-content/uploads/2013/07/Allegro-Cloud-Limited.png">
									</div>
									<div class="arrow">
										<img src="<?php bloginfo('template_directory'); ?>/img/arrow-software-color1.png">
									</div>
									<div class="info">
										<h4 class="base">Allegro Limited</h4>
										<p><?php $custom_fields = get_post_custom(the_ID);
	  $my_custom_field = $custom_fields['popsy_business'];
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
									echo get_permalink(126);
									
								} ?>
								<?php if(ICL_LANGUAGE_CODE=='nl'){
									echo get_permalink(540);
								} ?>
								<?php if(ICL_LANGUAGE_CODE=='fr'){
									echo get_permalink(613);
								} ?>
								<?php if(ICL_LANGUAGE_CODE=='cs'){
									echo get_permalink(1175); 
								} ?>
							">
								<div class="wrapper module-2">
									<div class="label professional">
										<img src="/wp-content/uploads/2013/07/Allegro-Cloud-Basic.png">
									</div>
									<div class="arrow">
										<img src="<?php bloginfo('template_directory'); ?>/img/arrow-software-color2.png">
									</div>
									<div class="info">
										<h4 class="professional">Allegro Basic</h4>
										<p><?php $custom_fields = get_post_custom(the_ID);
	  $my_custom_field = $custom_fields['popsy_business'];
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
									echo get_permalink(129);
								} ?>
								<?php if(ICL_LANGUAGE_CODE=='nl'){
									echo get_permalink(547);
								} ?>
								<?php if(ICL_LANGUAGE_CODE=='fr'){
									echo get_permalink(611);
								} ?>
								<?php if(ICL_LANGUAGE_CODE=='cs'){
									echo get_permalink(1174);
								} ?>
							">
								<div class="wrapper module-2">
									<div class="label entreprise">
										<img src="/wp-content/uploads/2013/07/Allegro-Cloud-Advanced.png">
									</div>
									<div class="arrow">
										<img src="<?php bloginfo('template_directory'); ?>/img/arrow-software-color3.png">
									</div>
									<div class="info">
										<h4 class="entreprise">Allegro Advanced</h4>
										<p><?php $custom_fields = get_post_custom(the_ID);
	  $my_custom_field = $custom_fields['popsy_business'];
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
