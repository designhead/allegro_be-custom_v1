<ul>
	<li>
		<a href="
			<?php if(ICL_LANGUAGE_CODE=='en'){ 
				echo '/allegro-cloud-solutions/im-an-independent-or-smallmedium-size-company/';
			} ?>
			<?php if(ICL_LANGUAGE_CODE=='nl'){
				echo '/nl/allegro-cloud-solutions/kmo-of-zelfstandige/';
			} ?>
			<?php if(ICL_LANGUAGE_CODE=='fr'){
				echo '/fr/allegro-cloud-solutions/kmo-ou-independant/';
			} ?>
			<?php if(ICL_LANGUAGE_CODE=='cs'){
				echo '/cs/allegro-cloud-solutions/jsem-podnikatel-nebo-malastredni-spolecnost/';
			} ?>
		">
			<div class="content acs">
				<?php if(ICL_LANGUAGE_CODE=='en'){ 
					echo 'I\'m an <strong>independant or small/medium-size</strong> company';
				} ?>
				<?php if(ICL_LANGUAGE_CODE=='nl'){
					echo 'Ik ben <strong>zelfstandige of KMO</strong>';
				} ?>
				<?php if(ICL_LANGUAGE_CODE=='fr'){
					echo 'Je suis <strong>indépendant ou PME</strong>';
				} ?>
				<?php if(ICL_LANGUAGE_CODE=='cs'){
					echo 'Jsem podnikatel nebo malá/střední společnost</strong>';
				} ?>
			</div>
			<div class="arrow">
				<img src="<?php bloginfo('template_directory'); ?>/img/arrow-snav-2.png">
			</div>
		</a>
	</li>
	<li>
		<a href="
			<?php if(ICL_LANGUAGE_CODE=='en'){
				echo '/allegro-cloud-solutions/im-an-accountant/';
			} ?>
			<?php if(ICL_LANGUAGE_CODE=='nl'){
				echo '/nl/allegro-cloud-solutions/fiduciaire/';
			} ?>
			<?php if(ICL_LANGUAGE_CODE=='fr'){
				echo '/fr/allegro-cloud-solutions/fiduciaire/';
			} ?>
			<?php if(ICL_LANGUAGE_CODE=='cs'){
				echo '/cs/allegro-cloud-solutions/ucetni/';
			} ?>
		">
			<div class="content acs">
				<?php if(ICL_LANGUAGE_CODE=='en'){
					echo 'I\'m an <strong>accountant</strong>';
				} ?>
				<?php if(ICL_LANGUAGE_CODE=='nl'){
					echo 'Ik ben een <strong>accountant/boekhouder</strong>';
				} ?>
				<?php if(ICL_LANGUAGE_CODE=='fr'){
					echo 'Je suis une <strong>fiduciaire</strong>';
				} ?>
				<?php if(ICL_LANGUAGE_CODE=='cs'){
					echo 'Jsem účetní</strong>';
				} ?>
			</div>
			<div class="arrow" style="z-index:1">
				<img src="<?php bloginfo('template_directory'); ?>/img/arrow-snav-3.png">
			</div>
		</a>
	</li>
</ul>