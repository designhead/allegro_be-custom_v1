<?php
/*
Template Name: Reseller
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
			...
		</div>
		<div class="col2">
			...
		</div>
	</div>





<table style="width:960px" align="center">
<tr>

 <td valign="top">
    
    
    <form>
         <div class="span3">
             <h2 style="margin-bottom:3px">Filter By Country</h2>
          
           					
								          <input id=" country-UK " value="UK " type="checkbox" name="country-UK ">UK  <br>
                                          <input id=" country-india" value="india" type="checkbox" name="country-india">india <br>
                                         
                                              
            
            
              <h2 style="margin-bottom:3px">Filter By Region</h2>
          
            
               					
								          <input id=" London" value="London" type="checkbox" name="region-London">London <br>
                                          <input id=" mumbai" value="mumbai" type="checkbox" name="region-mumbai">mumbai <br>
                           
                 <h2 style="margin-bottom:3px">Filter By Categories</h2>
            <?php 
  $categories=  get_categories('taxonomy=resellers'); 
   
  foreach ($categories as $category) {
  		?>
     <input  id="<?php echo $category->cat_name;?>" value="<?php echo $category->cat_name;?>" type="checkbox" name="category-<?php echo $category->cat_name;?>"><?php echo $category->cat_name;?></br>
    <?php
	
  }
 ?>
           
            </form>
    </td>
<td width="600px">
<div id="dynamic">
	<div class="wrapper overview1 content" style="width:600px;overflow:hidden">
		<div class="overview-posts resellers">
<uL>
			<?php
			
$args= array(
     'post_type' => 'reseller',
	
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
									<?php edit_post_link('Edit', '<div class="edit-entry">', '</div>'); ?>
								</div>
								<!-- <a href="">Find on Google maps</a>	 -->
							</div>
						</div>
					</div>
					</li>
		
				<?php endwhile; ?>
		</uL>
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
    </td>
   
    </tr>
    </table>
</div>

<?php get_footer(); ?>