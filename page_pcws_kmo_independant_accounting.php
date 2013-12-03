<?php
/*
Template Name: Popsy Classic Windows Solutions - KMO and/or independant - Popsy Accounting
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
			<h3>
				<?php if(ICL_LANGUAGE_CODE=='en'){ 
					echo 'Available Popsy ACCOUNTING modules';
				} ?>
				<?php if(ICL_LANGUAGE_CODE=='nl'){ 
					echo 'Beschikbare Popsy ACCOUNTING modules';
				} ?>
				<?php if(ICL_LANGUAGE_CODE=='fr'){ 
					echo 'Modules de comptabilité de Popsy disponibles';
				} ?>
			</h3>
			<div class="business-software">
				<div class="modules">
					<ul>
						<li>
							<a href="
								<?php if(ICL_LANGUAGE_CODE=='en'){ 
									echo get_permalink(101);
								} ?>
								<?php if(ICL_LANGUAGE_CODE=='nl'){
									echo get_permalink(590);
								} ?>
								<?php if(ICL_LANGUAGE_CODE=='fr'){
									echo get_permalink(417);
								} ?>
							">
								<div class="wrapper module-1">
									<div class="label base">
										<img src="/wp-content/uploads/2013/07/Popsy-Accounting-Base.png">
									</div>
									<div class="arrow">
										<img src="<?php bloginfo('template_directory'); ?>/img/arrow-software-color1.png">
									</div>
									<div class="info">
										<h4 class="base">Popsy BASE</h4>
													<p><?php $custom_fields = get_post_custom(the_ID);
	  $my_custom_field = $custom_fields['popsy_base'];
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
									echo get_permalink(103);
								} ?>
								<?php if(ICL_LANGUAGE_CODE=='nl'){
									echo get_permalink(437);
								} ?>
								<?php if(ICL_LANGUAGE_CODE=='fr'){
									echo get_permalink(461);
								} ?>
							">
								<div class="wrapper module-1">
									<div class="label professional">
										<img src="/wp-content/uploads/2013/07/Popsy-Accounting-Professional.png">
									</div>
									<div class="arrow">
										<img src="<?php bloginfo('template_directory'); ?>/img/arrow-software-color2.png">
									</div>
									<div class="info">
										<h4 class="professional">Popsy PROFESSIONAL</h4>
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
						<li>
							<a href="
								<?php if(ICL_LANGUAGE_CODE=='en'){ 
									echo get_permalink(105);
								} ?>
								<?php if(ICL_LANGUAGE_CODE=='nl'){
									echo get_permalink(530);
								} ?>
								<?php if(ICL_LANGUAGE_CODE=='fr'){
									echo get_permalink(632);
								} ?>
							">
								<div class="wrapper module-1">
									<div class="label entreprise">
										<img src="/wp-content/uploads/2013/07/Popsy-Accounting-Entreprise.png">
									</div>
									<div class="arrow">
										<img src="<?php bloginfo('template_directory'); ?>/img/arrow-software-color3.png">
									</div>
									<div class="info">
										<h4 class="entreprise">Popsy ENTERPRISE</h4>
													<p><?php $custom_fields = get_post_custom(the_ID);
	  $my_custom_field = $custom_fields['popsy_enterprise'];
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
				<a href="../" class="button"><?php include 'inc/trans-back.php'; ?></a>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
