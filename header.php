<?php
/**
 * @package WordPress
 * @subpackage CWPT
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title>
	<?php wp_title('&laquo;', true, 'right'); ?>
	<?php bloginfo('name'); ?>
	</title>
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link type="text/css" rel="stylesheet" href="http://fast.fonts.com/cssapi/1b2735b3-f5f0-4c96-93b2-382f5b5c48d8.css"/>
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/styles.css"/>
		
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css">
	<?php wp_head(); ?>
	
	<script src="<?php bloginfo('template_directory'); ?>/js/bjqs.min.js" type="text/javascript"></script>
	<link type="text/css" rel="Stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bjqs.css" />
	
	
	
</head>

<body <?php body_class(); ?> >

<div class="header">
	
	<div class="wrapper">
		
		<div class="logo">
			<a href="
				<?php if(ICL_LANGUAGE_CODE=='en'){ 
					echo '/';
				} ?>
				<?php if(ICL_LANGUAGE_CODE=='nl'){ 
					echo '/nl';
				} ?>
				<?php if(ICL_LANGUAGE_CODE=='fr'){ 
					echo '/fr';
				} ?>
				<?php if(ICL_LANGUAGE_CODE=='cs'){ 
					echo '/cs';
				} ?>
			">
			<img src="<?php bloginfo('template_directory'); ?>/img/logo_allegro.png"></a>
		</div>
		
		<div class="nav">
			<?php wp_nav_menu( array('menu' => 'default_menu' )); ?>
			<!--
<ul>
				<li><a href="<?php bloginfo('url'); ?>/home">Home</a></li>
				<li class="current">
					<a href="">Company news</a>
					<div class="snav">
						<?php wp_nav_menu( array('menu' => 'company_news' )); ?>
					</div>
				</li>
				<li>
					<a href="">Business software</a>
					<div class="snav">
						<?php wp_nav_menu( array('menu' => 'business_software' )); ?>
					</div>
				</li>
				<li><a href="<?php bloginfo('url'); ?>/support">Support</a></li>
				<li><a href="<?php bloginfo('url'); ?>/resellers">Resellers</a></li>
				<li><a href="<?php bloginfo('url'); ?>/faq">FAQ</a></li>
			</ul>
-->
		</div>
		
		<div class="language">
			<ul>
				<?php
					if( function_exists('icl_get_languages') ):
				    $languages = icl_get_languages('skip_missing=1');
				      
				    foreach($languages as $language) {
				      
				        if($language['active']) {
				            $link .= '<li><a href="' . $language['url'] . '" class="current">' . $language['language_code'] . '</a></li> ';
				      
				        } else {
				            $link .= '<li><a href="' . $language['url'] . '">' . $language['language_code'] . '</a></li> ';
				        }
				    }
				      
				    echo $link;
				endif;
				?>
			</ul>
		
			<!--
<ul>
				<?php if(ICL_LANGUAGE_CODE=='en'){ 
				echo '<li><a href="/nl/">nl</a></li>';
				echo '<li><a href="/fr/">fr</a></li>';
				echo '<li><a href="/" class="current">en</a></li>';
				echo '<li><a href="/cs/">cz</a></li>';
			} ?>
			<?php if(ICL_LANGUAGE_CODE=='nl'){ 
				echo '<li><a href="/nl/" class="current">nl</a></li>';
				echo '<li><a href="/fr/">fr</a></li>';
				echo '<li><a href="/">en</a></li>';
				echo '<li><a href="/cs/">cz</a></li>';

			} ?>
			<?php if(ICL_LANGUAGE_CODE=='fr'){ 
				echo '<li><a href="/nl/">nl</a></li>';
				echo '<li><a href="/fr/" class="current">fr</a></li>';
				echo '<li><a href="/">en</a></li>';
				echo '<li><a href="/cs/">cz</a></li>';

			} ?>
			<?php if(ICL_LANGUAGE_CODE=='cs'){ 
				echo '<li><a href="/nl/">nl</a></li>';
				echo '<li><a href="/fr/">fr</a></li>';
				echo '<li><a href="/">en</a></li>';
				echo '<li><a href="/cs/" class="current">cz</a></li>';

			} ?>
			</ul>
-->
		</div>
		
		<div class="title" style="display:none">
			<h2>
				<?php
					$parent = array_reverse(get_post_ancestors($post->ID));
$first_parent = get_page($parent[0]);
echo $first_parent->post_title;
				?>
			</h2>
		</div>
		<?php nono_get_parent_page();?>
		<?php // Detect the langaug and accordingly set image to display
         $currentlang = get_bloginfo('language');
			 	if ($currentlang== "nl-NL") {
					$image_extension="nl";
				} elseif ($currentlang== "fr-FR") {
					$image_extension="fr";
				} elseif ($currentlang== "cs-CZ") {
					$image_extension="cz";
				} else{
						$image_extension="en";
				}

         ?>
	
			<!-- Show when parent is popsy-classic-windows-solutions  -->
            <?php 
			$page_id=nono_get_parent_page();
			if($page_id=="92" || $page_id=="320" || $page_id=="316") { 
			
			?>
            	<div class="billboard">
<ul class="bjqs">
				<li><img src="<?php bloginfo('template_directory'); ?>/img/billboard-popsy1-<?php echo $image_extension; ?>.png"></li>
				<li><img src="<?php bloginfo('template_directory'); ?>/img/billboard-popsy2-<?php echo $image_extension; ?>.png"></li>
				<li><img src="<?php bloginfo('template_directory'); ?>/img/billboard-popsy3-<?php echo $image_extension; ?>.png"></li>
				<li><img src="<?php bloginfo('template_directory'); ?>/img/billboard-popsy4-<?php echo $image_extension; ?>.png"></li>
			</ul>
            	</div>
            <?php } ?>
<?php if($page_id=="607" || $page_id=="119" || $page_id=="310" || $page_id=="722") {?>
	<div class="billboard">
			<ul class="bjqs">
				<li><img src="<?php bloginfo('template_directory'); ?>/img/billboard-cloud1-<?php echo $image_extension; ?>.png"></li>
				<li><img src="<?php bloginfo('template_directory'); ?>/img/billboard-cloud2-<?php echo $image_extension; ?>.png"></li>
				<li><img src="<?php bloginfo('template_directory'); ?>/img/billboard-cloud3-<?php echo $image_extension; ?>.png"></li>
				<li><img src="<?php bloginfo('template_directory'); ?>/img/billboard-cloud4-<?php echo $image_extension; ?>.png"></li>
				<li><img src="<?php bloginfo('template_directory'); ?>/img/billboard-cloud5-<?php echo $image_extension; ?>.png"></li>
			</ul>
            	</div>
            <?php } ?>
	
		
		<script>
        jQuery(document).ready(function($) {
          
          $('.billboard').bjqs({
            animtype      : 'fade',
            height        : 140,
            width         : 530,
            randomstart   : false,
            showcontrols  : false,
            animspeed     : 3000,
            automatic     : true
          });
          
        });
      </script>
		
		
        <?php $url_ext=explode('-',$currentlang);
		if($page_id=="92" || $page_id=="320" || $page_id=="316") { ?>
        <div class="spotlight">
        	<a href="http://www.allegro.be/<?php echo $url_ext[0];?>/allegro-cloud-solutions/"><img src="<?php bloginfo('template_directory'); ?>/img/allegro-cloud-solutions-spotlight-<?php echo $image_extension; ?>.png"></a>
            </div>
        <?php
		}
		 if($page_id=="607" || $page_id=="119" || $page_id=="310") {?>
         <div class="spotlight">
				<a href="http://www.allegro.be/<?php echo $url_ext[0];?>/popsy-classic-windows-solutions/"><img src="<?php bloginfo('template_directory'); ?>/img/popsy-classic-windows-solutions-spotlight-<?php echo $image_extension; ?>.png"></a>	</div>
            <?php } ?>
	
		
	</div>
	
	<div class="bg">
		<?php echo nono_show_section_bg_image(); ?>
		<!-- <img src="<?php echo get_stylesheet_directory_uri() ?>/img/bg_pcws.jpg"> -->
	</div>
	
</div>
