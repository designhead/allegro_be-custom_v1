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

<body <?php body_class(); ?>>

<div class="header">
	<div class="wrapper">
		<div class="logo"
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

			"><img src="<?php bloginfo('template_directory'); ?>/img/logo_allegro.png"></a>
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
		</div>
		
		<div class="billboard home">
			<ul>
				<li>
					<?php if(ICL_LANGUAGE_CODE=='en'){ 
						echo '<a href="/allegro-cloud-solutions/">';
						echo '<img src="';
						bloginfo('template_directory');
						echo '/img/allegro-cloud-solutions-header-en.png">';
						echo '</a>';
					} ?>
					<?php if(ICL_LANGUAGE_CODE=='nl'){ 
						echo '<a href="/nl/allegro-cloud-solutions/">';
						echo '<img src="';
						bloginfo('template_directory');
						echo '/img/allegro-cloud-solutions-header-nl.png">';
						echo '</a>';
					} ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ 
						echo '<a href="/fr/allegro-cloud-solutions/">';
						echo '<img src="';
						bloginfo('template_directory');
						echo '/img/allegro-cloud-solutions-header-fr.png">';
						echo '</a>';
					} ?>
					<?php if(ICL_LANGUAGE_CODE=='cs'){ 
						echo '<a href="/cs/allegro-cloud-solutions/ ">';
						echo '<img src="';
						bloginfo('template_directory');
						echo '/img/cs-header-01.png">';
						echo '</a>';
					} ?>
				</li>
				<li>
					<?php if(ICL_LANGUAGE_CODE=='en'){ 
						echo '<a href="/popsy-classic-windows-solutions/">';
						echo '<img src="';
						bloginfo('template_directory');
						echo '/img/popsy-classic-windows-solutions-header-en.png">';
						echo '</a>';
					} ?>
					<?php if(ICL_LANGUAGE_CODE=='nl'){ 
						echo '<a href="/nl/popsy-classic-windows-solutions/">';
						echo '<img src="';
						bloginfo('template_directory');
						echo '/img/popsy-classic-windows-solutions-header-nl.png">';
						echo '</a>';
					} ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ 
						echo '<a href="/fr/popsy-classic-windows-solutions/">';
						echo '<img src="';
						bloginfo('template_directory');
						echo '/img/popsy-classic-windows-solutions-header-fr.png">';
						echo '</a>';
					} ?>
					<?php if(ICL_LANGUAGE_CODE=='cs'){ 
						echo '<a href="/cs/allegro-cloud-solutions/ ">';
						echo '<img src="';
						bloginfo('template_directory');
						echo '/img/cs-header-02.png">';
						echo '</a>';
					} ?>
				</li>
				<li>
					<?php if(ICL_LANGUAGE_CODE=='en'){ 
						echo '<a href="';
						echo get_permalink( get_post( icl_object_id(4709, 'page') ) );
						echo '">';
						echo '<img src="';
						bloginfo('template_directory');
						echo '/img/allegro-invoice-subito-en.png">';
						echo '</a>';
					} ?>
					<?php if(ICL_LANGUAGE_CODE=='nl'){ 
						echo '<a href="';
						echo get_permalink( get_post( icl_object_id(4709, 'page') ) );
						echo '">';
						echo '<img src="';
						bloginfo('template_directory');
						echo '/img/allegro-invoice-subito-nl.png">';
						echo '</a>';
					} ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ 
						echo '<a href="';
						echo get_permalink( get_post( icl_object_id(4709, 'page') ) );
						echo '">';
						echo '<img src="';
						bloginfo('template_directory');
						echo '/img/allegro-invoice-subito-fr.png">';
						echo '</a>';
					} ?>
				</li>
			</ul>
		</div>
		
	</div>
	
	<div class="bg">
		<?php echo nono_show_section_bg_image(); ?>
		<!-- <img src="<?php echo get_stylesheet_directory_uri() ?>/img/bg_pcws.jpg"> -->
	</div>
	
</div>
