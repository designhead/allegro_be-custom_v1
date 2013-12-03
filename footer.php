<div style="clear:both"></div>

<footer>
	
	<div class="wrapper">
		
		<div class="contact">
			<?php if(ICL_LANGUAGE_CODE=='en'){ 
				$my_id = 284;
				$post_id_284 = get_post($my_id);
				$content = $post_id_284->post_content;
				$content = apply_filters('the_content', $content);
				$content = str_replace(']]>', ']]>', $content);
				echo $content;
			} ?>
			<?php if(ICL_LANGUAGE_CODE=='nl'){ 
				$my_id = 284;
				$post_id_284 = get_post($my_id);
				$content = $post_id_284->post_content;
				$content = apply_filters('the_content', $content);
				$content = str_replace(']]>', ']]>', $content);
				echo $content;
			} ?>
			<?php if(ICL_LANGUAGE_CODE=='fr'){ 
				$my_id = 284;
				$post_id_284 = get_post($my_id);
				$content = $post_id_284->post_content;
				$content = apply_filters('the_content', $content);
				$content = str_replace(']]>', ']]>', $content);
				echo $content;
			} ?>
			<?php if(ICL_LANGUAGE_CODE=='cs'){ 
				$my_id = 1178;
				$post_id_1178 = get_post($my_id);
				$content = $post_id_1178->post_content;
				$content = apply_filters('the_content', $content);
				$content = str_replace(']]>', ']]>', $content);
				echo $content;
			} ?>
		</div>
		
		<div class="social">
			<ul>
				<li><a href="https://www.facebook.com/AllegroSoftwareBelgium" target="_blank"><i class="icon-facebook-sign"></i></a></li>
				<li><a href="http://www.linkedin.com/company/allegro-software-nv-sa?report%2Esuccess=rPqYH_WWUnsbwJkskekHZqRWfSFoA_cdEitIsFgKVE41j3c3d3aXTxNqygV1Ejc-F4jXYj" target="_blank"><i class="icon-linkedin-sign"></i></a></li>
				<li><a href="" target="_blank"><i class="icon-youtube-sign"></i></a></li>
			</ul>
		</div>
		
		<div class="hotlines">
			<ul>
				<?php if(ICL_LANGUAGE_CODE=='en'){ 
					echo '<li>';
					echo '<h4>Hotline NL</h4>';
					echo '<h5>0903 99 357</h5>';
					echo '</li>';
					echo '<li>';
					echo '<h4>Hotline FR</h4>';
					echo '<h5>0903 93 244</h5>';
					echo '</li>';
				} ?>
				<?php if(ICL_LANGUAGE_CODE=='nl'){ 
					echo '<li>';
					echo '<h4>Hotline NL</h4>';
					echo '<h5>0903 99 357</h5>';
					echo '</li>';
					echo '<li>';
					echo '<h4>Hotline FR</h4>';
					echo '<h5>0903 93 244</h5>';
					echo '</li>';
				} ?>
				<?php if(ICL_LANGUAGE_CODE=='fr'){ 
					echo '<li>';
					echo '<h4>Hotline NL</h4>';
					echo '<h5>0903 99 357</h5>';
					echo '</li>';
					echo '<li>';
					echo '<h4>Hotline FR</h4>';
					echo '<h5>0903 93 244</h5>';
					echo '</li>';
				} ?>
				<?php if(ICL_LANGUAGE_CODE=='cs'){ 
					echo '';
				} ?>
			</ul>
		</div>
		
		<?php if(ICL_LANGUAGE_CODE=='cs') {
			echo '<div id="extra">';
			echo '<ul>';
			echo '<li><a href="/cs/category/jobs/"><img src="';
			bloginfo('template_directory');
			echo '/img/allegro-jobs.png"><h3><strong>Nabídka</strong> Práce</h3></a></li>';
			echo '<li><a href="http://ism.newlink.eu" target="_blank"><img src="';
			bloginfo('template_directory');
			echo '/img/teamviewer-support.png"><h3><strong>Issue</strong> Management</h3></a></li>';
			echo '<li><a href="/cs/business-software-3/start-your-business/"><img src="';
			bloginfo('template_directory');
			echo '/img/starter-deals.png"><h3><strong>Start</strong> podnikání</h3></a></li>';
			echo '</ul>';
			echo '</div>';
		} ?>
		
		<div class="login">
			<ul>
				<?php if(ICL_LANGUAGE_CODE=='en'){ 
					echo '<li><a href="https://online.allegro-software.eu" target="_blank">Login: Allegro</a></li>';
					echo '<li><a href="http://www.popsy.com/saas" target="_blank">Login: Popsy SaaS</a></li>';
					echo '<li><a href="">Login: Reseller</a></li>';
				} ?>
				<?php if(ICL_LANGUAGE_CODE=='nl'){ 
					echo '<li><a href="https://online.allegro-software.eu" target="_blank">Login: Allegro</a></li>';
					echo '<li><a href="http://www.popsy.com/saas" target="_blank">Login: Popsy SaaS</a></li>';
					echo '<li><a href="">Login: Reseller</a></li>';
				} ?>
				<?php if(ICL_LANGUAGE_CODE=='fr'){ 
					echo '<li><a href="https://online.allegro-software.eu" target="_blank">Login: Allegro</a></li>';
					echo '<li><a href="http://www.popsy.com/saas" target="_blank">Login: Popsy SaaS</a></li>';
					echo '<li><a href="">Login: Reseller</a></li>';
				} ?>
				<?php if(ICL_LANGUAGE_CODE=='cs'){ 
					echo '<li><a href="https://online.allegro-software.eu" target="_blank">Login: Allegro</a></li>';
					echo '<li><a href="">Login: Reseller</a></li>';
				} ?>
			</ul>
		</div>
		
		<?php if(ICL_LANGUAGE_CODE=='en'){ 
			echo '<div class="logos">';
			echo '<ul>';
			echo '<li><img src="';
			bloginfo('template_directory');
			echo '/img/logo_popsy_business.png">';
			echo '</li>';
			echo '</ul>';
			echo '</div>';
		} ?>
		<?php if(ICL_LANGUAGE_CODE=='nl'){ 
			echo '<div class="logos">';
			echo '<ul>';
			echo '<li><img src="';
			bloginfo('template_directory');
			echo '/img/logo_popsy_business.png">';
			echo '</li>';
			echo '</ul>';
			echo '</div>';
		} ?>
		<?php if(ICL_LANGUAGE_CODE=='fr'){ 
			echo '<div class="logos">';
			echo '<ul>';
			echo '<li><img src="';
			bloginfo('template_directory');
			echo '/img/logo_popsy_business.png">';
			echo '</li>';
			echo '</ul>';
			echo '</div>';
		} ?>
		<?php if(ICL_LANGUAGE_CODE=='cs'){ 
			echo '<div class="logos">';
			echo '<ul>';
			echo '<li><a href="http://www.nlm.cz" target="_blank" alt="NewLink Moravia s.r.o."><img src="';
			bloginfo('template_directory');
			echo '/img/NLMlogoInverse.png" style="margin-top:0px; padding-bottom:8px"></a>';
			echo '<h3><strong>NewLink</strong></br>Software</h3>';
			echo '</li>';
			echo '</ul>';
			echo '</div>';
		} ?>
		
		<div style="clear:both"></div>
		
		<div class="copyright">
			© 2013 Allegro software 2013 • All rights reserved • <a href="">Disclaimer</a>
		</div>
		
	</div>
	
</footer>

<script>
var _gaq=[["_setAccount","UA-34407086-1"],["_trackPageview"]];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>

</body>
</html>