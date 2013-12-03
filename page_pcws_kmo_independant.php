<?php
/*
Template Name: Popsy Classic Windows Solutions - KMO and/or independant
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
										echo '/popsy-classic-windows-solutions/kmo-or-independant/popsy-accounting/';
									} ?>
									<?php if(ICL_LANGUAGE_CODE=='nl'){
										echo '/nl/popsy-classic-windows-solutions/kmo-of-zelfstandige/popsy-accounting/';
									} ?>
									<?php if(ICL_LANGUAGE_CODE=='fr'){
										echo '/fr/popsy-classic-windows-solutions/independant-pme/popsy-accounting/'; 
									} ?>
									">
								<div class="wrapper module-1">
									<div class="label overview">
										<img src="/wp-content/uploads/2013/08/Popsy-Layout-Accounting.png">
									</div>
									<div class="arrow">
										<img src="<?php bloginfo('template_directory'); ?>/img/arrow-software-color4.png">
									</div>
									<div class="info">
										<h4>Popsy ACCOUNTING</h4>
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
										echo '/popsy-classic-windows-solutions/kmo-or-independant/popsy-business/';
									} ?>
									<?php if(ICL_LANGUAGE_CODE=='nl'){
										echo '/nl/popsy-classic-windows-solutions/kmo-of-zelfstandige/popsy-business/'; 
									} ?>
									<?php if(ICL_LANGUAGE_CODE=='fr'){
										echo '/fr/popsy-classic-windows-solutions/independant-pme/popsy-business/';
									} ?>
									">
								<div class="wrapper module-1">
									<div class="label overview">
										<img src="/wp-content/uploads/2013/08/Popsy-Product-Business.png">
									</div>
									<div class="arrow">
										<img src="<?php bloginfo('template_directory'); ?>/img/arrow-software-color4.png">
									</div>
									<div class="info">
										<h4>Popsy BUSINESS</h4>
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
