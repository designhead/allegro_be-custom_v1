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
		<?php include 'inc/breadcrumb.php'; ?>
		<div class="col1" style="width: 100%">
			<!-- <h3><?php the_title() ?></h3> -->
			<!--
<div class="business-software">
				<div class="details base">
-->
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="post" id="post-<?php the_ID(); ?>">
							<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
							<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
						</div>
					<?php endwhile; endif; ?>
			<!--
	</div>
			</div>
-->
			<?php edit_post_link('Edit', '<p>', '</p>'); ?>
		</div>
		<div class="col2">
				<!--
<?php if ( is_page(array(92,93,189)) ) {
					get_template_part( 'business_software/popsy_classic_windows_solutions/popsy', 'kmo-or-independant' );
				}
				elseif ( is_page('95') ) {
					get_template_part( 'business_software/popsy_classic_windows_solutions/popsy', 'accountant' );
				}
				elseif ( is_page('97') ) {
					get_template_part( 'business_software/popsy_classic_windows_solutions/popsy', 'accounting' );
				}
				elseif ( is_page('99') ) {
					get_template_part( 'business_software/popsy_classic_windows_solutions/popsy', 'business' );
				}
				elseif ( is_page(array(101,103,105,107,109,111,113,116)) ) {
					get_template_part( 'business_software/popsy_classic_windows_solutions/popsy', 'type-purchase' );
				}
				elseif ( is_page(array(119,120)) ) {
					get_template_part( 'business_software/cloud_solutions/cloud', 'kmo-or-independant' );
				}
				elseif ( is_page(array(124,126,129)) ) {
					get_template_part( 'business_software/cloud_solutions/cloud', 'type-purchase' );
				}
				
				elseif ( is_page(array(20)) ) {
					get_template_part( 'list-resellers' );
				}
				
				elseif ( is_page(array(226)) ) {
					echo 'FAQ ...';
				}
				
				?>	
-->
		</div>
	</div>
	
</div>

<?php get_footer(); ?>
