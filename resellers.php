<?php
/*
Template Name: Resellers
*/
?>
<?php get_header(); ?>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
 
<style>
.entry-content {
    height:1400px;
}
</style>
 
<script>
 
jQuery(document).ready(function($) {
 
     $( "input[type='checkbox']" ).change( function() {
 
         var data = $('form').serializeArray(),
    obj = {};
 
for(var i = 0; i < data.length; i++){
   obj[data[i].name] = obj[data[i].name] || [];
   obj[data[i].name].push(data[i].value);
 
}
             $.post(ajaxurl, { action: 'ajax_search', male_01 : obj }, function(output) {
 
         $('#dynamic').html(output);
 
            });
 
});});
</script>
<div class="content">
	<div class="wrapper">
		<div class="col1">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
					<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					<?php edit_post_link('Edit', '<p>', '</p>'); ?>
				</div>
			<?php endwhile; endif; ?>
			<form class="resellers">
				<ul>
					<li>   
			               
			             <h2>
				            <?php if(ICL_LANGUAGE_CODE=='en'){ 
								echo 'Product';
							} ?>
							<?php if(ICL_LANGUAGE_CODE=='nl'){ 
								echo 'Product';
							} ?>
							<?php if(ICL_LANGUAGE_CODE=='fr'){ 
								echo 'Produit';
							} ?>
							<?php if(ICL_LANGUAGE_CODE=='cs'){ 
								echo 'Product';
							} ?>
			             </h2>
						<ul>
			            <?php 
							$categories=  get_categories('taxonomy=resellers'); 
							foreach ($categories as $category) {
							?>
							<li><input  id="<?php echo $category->cat_name;?>" checked value="<?php echo $category->cat_name;?>" type="checkbox" name="category-<?php echo $category->cat_name;?>"><?php echo $category->cat_name;?></li>
							<?php
						  }
						 ?>
						 </ul>
				 	</li>
					<li>
						<h2>
							<?php if(ICL_LANGUAGE_CODE=='en'){ 
								echo 'Country';
							} ?>
							<?php if(ICL_LANGUAGE_CODE=='nl'){ 
								echo 'Land';
							} ?>
							<?php if(ICL_LANGUAGE_CODE=='fr'){ 
								echo 'Pays';
							} ?>
							<?php if(ICL_LANGUAGE_CODE=='cs'){ 
								echo 'Country';
							} ?>
						</h2>
                        	<?php
							
							


 
// always good to see exactly what you are working with

$value_array=array();
$loop=0;
								$args= array(
								     'post_type' => 'reseller',
									
								);
								query_posts( $args );
								if (have_posts()) : ?>
					
								<?php while (have_posts()) : the_post(); 
								$value_array[$loop] = get_field( "country", $post->ID ); 
								$loop++;
								 
								 
  
								  ?>
									
							
						
								<?php endwhile; ?>
	
						<?php 
							
							endif;
							
								echo '<ul>';
 $value_array=array_unique ($value_array);
	foreach($value_array as $value)
	{
		if($value && $value<>"...") {?>
        <li><input id="<?php echo $value;?>" value="<?php echo $value;?>" type="checkbox" name="country-<?php echo $value;?>"><?php echo $value;?></li>
        <?php }
		
	}
 
	echo '</ul>';
						?>
						
					</li>
					<li>
			             <h2>
				            <?php if(ICL_LANGUAGE_CODE=='en'){ 
								echo 'Region';
							} ?>
							<?php if(ICL_LANGUAGE_CODE=='nl'){ 
								echo 'Regio';
							} ?>
							<?php if(ICL_LANGUAGE_CODE=='fr'){ 
								echo 'Région';
							} ?>
							<?php if(ICL_LANGUAGE_CODE=='cs'){ 
								echo 'Region';
							} ?>
			             </h2>
                         
                         	<?php
							
							


 
// always good to see exactly what you are working with

$value_array=array();
$loop=0;
								$args= array(
								     'post_type' => 'reseller',
									
								);
								query_posts( $args );
								if (have_posts()) : ?>
					
								<?php while (have_posts()) : the_post(); 
								$value_array[$loop] = get_field( "region", $post->ID ); 
								$loop++;
								 
								 
  
								  ?>
									
							
						
								<?php endwhile; ?>
	
						<?php 
							
							endif;
							
								echo '<ul>';
 $value_array=array_unique ($value_array);
	foreach($value_array as $value)
	{
		if($value && $value<>"...") {?>
        <li><input id="<?php echo $value;?>" value="<?php echo $value;?>" type="checkbox" name="region-<?php echo $value;?>"><?php echo $value;?></li>
        <?php }
		
	}
 
	echo '</ul>';
						?>
			         </li>
					
				 </ul>
            </form>
		</div>
		<div class="col2">
			<div id="dynamic">
				<div class="wrapper overview1 content">
					<div class="overview-posts resellers">
						<ul>
						
							<?php
								$args= array(
								     'post_type' => 'reseller','orderby'=> 'title','order' => 'ASC'
									
								);
								query_posts( $args );
								if (have_posts()) : ?>
					
								<?php while (have_posts()) : the_post(); ?>
									
								<li>
									<div class="wrapper">
										<div <?php post_class() ?>>
											<div class="label">
												<?php the_post_thumbnail(); ?>
											</div>
											<div class="info">
												<h3><?php the_title(); ?></h3>
												<div class="contact-info">
													<?php the_content() ?>
													
												</div>
												<!-- <a href="">Find on Google maps</a>	 -->
											</div>
										</div>
									</div>
									</li>
						
								<?php endwhile; ?>
		</ul>
						<?php else :
						
								if ( is_category() ) { // If this is a category archive
									printf("<h2>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
								} else if ( is_date() ) { // If this is a date archive
									echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
								} else if ( is_author() ) { // If this is a category archive
									$userdata = get_userdatabylogin(get_query_var('author_name'));
									printf("<h2>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
								} else {
									echo("<h2>No posts found.</h2>");
								}
								get_search_form();
						
							endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>