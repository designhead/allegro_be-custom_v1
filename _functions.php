<?php

automatic_feed_links();

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 150, 150 );
add_image_size( 'small', 800, 600 );
add_image_size( 'medium', 800, 600 );
add_image_size( 'large', 800, 600 );

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}

/**
 * Returns the ID of the top-level parent page
 *
 * Given the current page, this function returns the post ID of the top-level parent
 * (which could be the ID of this page if it is the top-level page)
 *
 * @uses get_post_ancestors()
 * @return int/bool  ID of parent page, false if not on a page query,
 */

function nono_get_parent_page(){
	global $post;

	if( ! is_page() ) return false;

	if ( $post->post_parent )	{
		$ancestors = get_post_ancestors( $post->ID );
		$root = count($ancestors) - 1;
		$parent = $ancestors[$root];
	} else {
		$parent = $post->ID;
	}
	return $parent;
}

/**
 * Return the img tag based on the current page
 *
 * Use the current page to determine which background image to use and return the img tag. If
 * needed, translate the page id into the default page id
 *
 * @uses is_page
 * @uses nono_show_section_bg_image_page
 * @uses is_single
 * @uses is_archive
 * @uses nono_show_section_bg_image_cat
 * @uses get_stylesheet_directory
 * @uses get_stylesheet_directory_uri
 * @return string HTML markup for background image
 */

function nono_show_section_bg_image(){

	if ( is_page() ) $image_file_name = nono_show_section_bg_image_page();

	if( is_single() || is_archive() ) $image_file_name = nono_show_section_bg_image_cat();

	// use the page slug as the name of the image file
	$filename = '/img/'.$image_file_name.'.jpg';

	// Check to see if the desired image exists, if not, use default image
	$bg_image_path = get_stylesheet_directory().$filename;
	if( ! file_exists ( $bg_image_path ) ) $filename = '/img/default-image.jpg';

	$bg_image_src = get_stylesheet_directory_uri().$filename;

	// return html markup of the background image
	return '<img src="'.$bg_image_src.'" />';

}

/**
 * Returns the name (in EN) of the current category if this is single post or category
 *
 * Returns the slug (name) in English of the current category if this is an archive page or returns
 * the slug (name) in English of the first (alphabetical) term associated with this single post
 *
 * @uses get_queried_object
 * @uses is_single
 * @uses wp_get_object_terms
 * @uses icl_get_object_id
 * @uses get_term_by
 * @returns string Slug (name) of associated term
 *
 */
function nono_show_section_bg_image_cat(){

	$this_is = get_queried_object();
	if( is_single() ) {
		$terms = wp_get_object_terms($this_is, 'category');
		// Just get the first term for this post
		$this_is = $terms[0];
	} else { // this must be an archive i.e. category
		$term = $this_is;
	}

	$term_id = icl_object_id($this_is->term_id, 'category', true, 'en');
	$cat = get_term_by('id', $term_id, 'category');

	return $cat->name;

}

/**
 * Returns the name (in EN) of the current top-level parent page
 *
 * Searches the ancestors to determine the current parent page, then finds the equivalent
 * page in English (WPML), returns the slug for that page.
 *
 * @uses nono_get_parent_page
 * @uses icl_get_object_id
 * @uses get_post
 * @return string Slug(name) of associated parent page
 */
function nono_show_section_bg_image_page(){

	// Get the parent
	$parent_page = nono_get_parent_page();
	if( ! $parent_page ) return;

	if( function_exists('icl_get_object_id') ) {
		// Translate the parent page id to the equivalent page for English
		$en_parent_page = icl_object_id($parent_page, 'page', true, 'en');
	} else {
		$en_parent_page = $parent_page;
	}

	// Get the page object
	$en_parent_page = get_post($en_parent_page);

	return $en_parent_page->post_name;
}


add_action('init', 'portfolio_register');
 
 
add_action('init', 'add_default_boxez');
 
function add_default_boxez() {
 
register_taxonomy("resellers", array("reseller"), array("hierarchical" => true, "label" => "reseller filters", "singular_label" => "Category", "rewrite" => true,"query_var"=>true));
 
 
//register_taxonomy("portfolio2", array("page"), array("hierarchical" => true, "label" => "Portfolio Category", "singular_label" => "Category1", "rewrite" => true,"query_var"=>true));
 
register_taxonomy_for_object_type('category','resellers');
 
 
}
 
 
 
 
function portfolio_register() {
 
 
    $labels = array(
 
 
        'name' => _x('Reseller', 'post type general name'),
 
        'singular_name' => _x('Reseller ', 'post type singular name'),
 
 
        'add_new' => _x('Add New', 'Reseller'),
 
        'add_new_item' => __('Add New Reseller  '),
 
        'edit_item' => __('Edit Reseller Item'),
 
        'new_item' => __('New Reseller Item'),
 
        'view_item' => __('View Reseller Item'),
 
    'search_items' => __('Search Reseller'),
 
        'not_found' =>  __('Nothing found'),
 
        'not_found_in_trash' => __('Nothing found in Trash'),
 
        'parent_item_colon' => ''
 
    );
 
 
    $args = array(
 
'labels' => $labels,
'public' => true,
 
'publicly_queryable' => true,
 
        'show_ui' => true,
 
    'query_var' => true,
 
        'rewrite' => true,
 
    'capability_type' => 'post',
 
       'hierarchical' => false,
 
    'menu_position' => null,
 
        'supports' => array('title','editor','excerpt','thumbnail','categories','custom-fields'),
 
      ); 
 
    register_post_type( 'reseller' , $args );
 
}

add_action('wp_ajax_ajax_search', 'ajax_search');
 
add_action('wp_ajax_nopriv_ajax_search', 'ajax_search');
 
function ajax_search() {
 
    $s = $_POST['male_01'];
	 $field_name=array();
    $field_value=array();
    $field_count=0;
	$list = array();
	$country_array=array();
	$country_count=0;
	$main_count=0;
	$region_array=array();
	$region_count=0;
	
	$category_array=array();
	$category_count=0;	            $country_value=0;
 
                $country_array_field_name=array();
                $country_array_field_value=array();
 
         
				
				
   foreach($s as $k) {
            
                $key=key($s);
                $val=$s[$key];
                   if (isset($val[0]) && $key<>"s") {
                    $key ." = ".  $val[0] ." <br> ";
                      $field_name[$field_count]=$key;
                      $field_value[$field_count]=$val[0];
                      $field_count++;
                      $ext=explode('-',$key);
               
                 
               if($ext[0]=="category") {
				   $args= array(
									 'post_type' => 'reseller','orderby'=> 'title',
									'resellers' => $ext[1],
									
									
								);
	
			   } else{
             	$args= array(
									 'post_type' => 'reseller','orderby'=> 'title',
									'meta_key' => $ext[0],
									'meta_value' =>$val[0],
									
								);
								
							//	print_r($args);
			   }
			   /*print_r($args);/*
								echo "</br>----";*/
$country_array_result=output_value($args);

//$country_array[$main_count] = $country_array_result;   
$main_count++;
	/* echo "</br>first array ";print_r($country_array);
	echo " value -> ".$country_count++;*/
	//echo $ext[0]."----</br>";
if($ext[0]=="country") {
	$country_array[$country_count] = $country_array_result;   
	//echo "</br>first array ";print_r($country_array);
	$country_count++;
}

if($ext[0]=="region") {
	$region_array[$region_count] = $country_array_result;   
	$region_count++;
}

if($ext[0]=="category") {
	$category_array[$category_count] = $country_array_result;   
	$category_count++;
}
             //  $list[$country_value] = $country_array_result;        
						  
      }   next($s);

 }
 
 $cat_int_array=array(); // apologize this is for country
  $reg_int_array=array();
    $cat_cat_int_array=array();
 $cat_int_array = call_user_func_array('array_merge', $country_array);
 //echo "</br> result or cat"; print_r($cat_int_array);
  $reg_int_array = call_user_func_array('array_merge', $region_array);
   $cat_cat_int_array = call_user_func_array('array_merge', $category_array);
  //echo "</br> result or reg"; print_r($reg_int_array);
    $final_int_array = array_merge( $reg_int_array,$cat_int_array,$cat_cat_int_array);
//echo "</br> result  final merge "; print_r($final_int_array);
  $intersect = array_intersect($cat_int_array,$reg_int_array);
  
  //$intersect_category1 = array_intersect($final_int_array);
//echo "</br>Result for final  -- ";
//print_r($intersect);
$cat_int_array_check = array_filter($cat_int_array);
$region_int_array_check = array_filter($reg_int_array);
$cat_cat_int_array_check = array_filter($cat_cat_int_array);
$send=array();

 if((!empty($cat_int_array_check)) && (!empty($region_int_array_check)) && (!empty($cat_cat_int_array_check))){
	$args= array(
      'post_type' => 'reseller','orderby'=> 'title',
	'post__in' => $intersect,);
	$send=$intersect;
	//echo "All fields checking";
}elseif((!empty($cat_int_array_check)) && (!empty($region_int_array_check))){
//	echo "both region and country checking";
	$temp_array = array_merge( $reg_int_array,$cat_int_array);
	//echo "</br> result  final merge "; print_r($final_int_array);
  $intersect = array_intersect($cat_int_array,$reg_int_array);
$args= array(
     'post_type' => 'reseller','orderby'=> 'title',
	'post__in' => $intersect,
	);
	$send=$intersect;
}elseif((!empty($cat_int_array_check)) && (!empty($cat_cat_int_array_check))){
	//echo "category and country checking";
	$temp_array = array_merge( $reg_int_array,$cat_int_array);
	//echo "</br> result  final merge "; print_r($final_int_array);
  $intersect = array_intersect($cat_int_array,$cat_cat_int_array);
$args= array(
     'post_type' => 'reseller','orderby'=> 'title',
	'post__in' => $intersect,
	);
	$send=$intersect;
}elseif((!empty($region_int_array_check)) && (!empty($cat_cat_int_array_check))){
	echo "category and Region checking";
	$temp_array = array_merge( $reg_int_array,$cat_int_array);
	echo "</br> result  final merge "; print_r($final_int_array);
  $intersect = array_intersect($reg_int_array,$cat_cat_int_array);
$args= array(
     'post_type' => 'reseller','orderby'=> 'title',
	'post__in' => $intersect,
	);
	$send=$intersect;
}elseif(!empty($cat_int_array_check)){
	//echo "Country checking";
$args= array(
     'post_type' => 'reseller','orderby'=> 'title',
	'post__in' => $cat_int_array,
	);
	//print_r($args);
	$send=$cat_int_array;
}elseif(!empty($region_int_array_check)){
	//echo "region checking";
$args= array(
     'post_type' => 'reseller','orderby'=> 'title',
	'post__in' => $reg_int_array,
	);
	$send=$reg_int_array;
}elseif(!empty($cat_cat_int_array)){
	//echo "category checking";
$args= array(
     'post_type' => 'reseller','orderby'=> 'title',
	'post__in' => $cat_cat_int_array,
	);
	$send=$cat_cat_int_array;
}else   {
	//echo "Else checking";
	$args= array(
     'post_type' => 'reseller','orderby'=> 'title',
	
	);
	
}

$args_result = array_filter($send);
if(empty($send) ) {
	echo "<h2>No Reseller Found, try with different search criteria</h2>";
} else {
query_posts( $args );

?>
<div class="wrapper overview1 content" style="width:600px;overflow:hidden">
		<div class="overview-posts resellers">
        <ul>
        <?php
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
            <?php
wp_reset_query();
}
                // region Search
              /*  $args="";
                $args['meta_query'] = array('relation' => 'OR');
                //echo $region_value;
                for($i=0;$i<$region_value;$i++){
 
                            $args['meta_query'][] = array(
                                'key' => $region_array_field_name[$i],
                                'value' => $region_array_field_value[$i],
                                );
                        }
                        //print_r($args);
                        $region_array_result=output_value($args);
 
                            // Qulification Search
                $args="";
                $args['meta_query'] = array('relation' => 'OR');
                for($i=0;$i<$category_value;$i++){
 
                            $args['meta_query'][] = array(
                                'key' => $category_array_field_name[$i],
                                'value' => $category_array_field_value[$i],
                                );
                        }
                        $qualifcation_array_result=output_value($args);*/
 

    die();
 

}
 

add_action('wp_head','custom_head');
 
function custom_head()
 
{
 
    echo '<script type="text/javascript">var ajaxurl = \''.admin_url('admin-ajax.php').'\';</script>';
 
}

function output_value($args) {
	?>
    
    <?php
 global $post;

   
    $cat_query = new WP_Query( $args );
$return_array=array();
        $i=0;
    $matching_category_ids = array();

    while ( $cat_query->have_posts() ) : $cat_query->the_post();
      $return_array[$i]=$post->ID."</br>";$i++;
    endwhile;
	
	wp_reset_query();
	 return $return_array;
}