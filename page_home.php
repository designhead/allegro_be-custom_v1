<?php
/*
Template Name: Home
*/
?>

<?php get_header('home'); ?>

<div class="content" style="padding-top: 95px;">
	<div class="wrapper">
		<div class="baseline">
			<?php $key="home_baseline"; echo get_post_meta($post->ID, $key, true); ?>
		</div>
		<div id="home">
			<div id="spotlight">
				<ul>
					<li>
						<div class="wrapper">
							<div class="img">
								<a href="
									<?php if(ICL_LANGUAGE_CODE=='en'){ 
										echo '/category/latest-news/';
									} ?>
									<?php if(ICL_LANGUAGE_CODE=='nl'){ 
										echo '/nl/category/laatste-nieuws/';
									} ?>
									<?php if(ICL_LANGUAGE_CODE=='fr'){ 
										echo '/fr/category/dernieres-nouvelles/';
									} ?>
									<?php if(ICL_LANGUAGE_CODE=='cs'){ 
										echo '/cs/category/posledni-novinky/';
									} ?>
								"><img src="<?php bloginfo('template_directory'); ?>/img/whats-new-on-our-blog.png">
								</a>
							</div>
							<h2>
								<?php if(ICL_LANGUAGE_CODE=='en'){ 
									echo 'What\'s new on our <strong>blog</strong>?';
								} ?>
								<?php if(ICL_LANGUAGE_CODE=='nl'){ 
									echo 'Wat is nieuw op onze <strong>blog</strong>?';
								} ?>
								<?php if(ICL_LANGUAGE_CODE=='fr'){ 
									echo 'Quoi de neuf sur notre <strong>blog</strong>?';
								} ?>
								<?php if(ICL_LANGUAGE_CODE=='cs'){ 
									echo 'Co je nového v našem <strong>blogu</strong>?';
								} ?>	
							</h2>
						</div>
						<div class="arrow">
							<img src="<?php bloginfo('template_directory'); ?>/img/arrow-spotlight-color1.png">
							<?php if(ICL_LANGUAGE_CODE=='en'){ 
								echo '<a href="/category/latest-news/">Read more</a>';
							} ?>
							<?php if(ICL_LANGUAGE_CODE=='nl'){ 
								echo '<a href="/nl/category/laatste-nieuws/">Lees verder</a>';
							} ?>
							<?php if(ICL_LANGUAGE_CODE=='fr'){ 
								echo '<a href="/fr/category/dernieres-nouvelles/">Lire la suite</a>';
							} ?>
							<?php if(ICL_LANGUAGE_CODE=='cs'){ 
								echo '<a href="/cs/category/posledni-novinky/">Zobrazit více</a>';
							} ?>
						</div>
					</li>
					<li>
						<div class="wrapper center">
							<div class="img">
								<a href="
									<?php if(ICL_LANGUAGE_CODE=='en'){ 
										echo '/business-software/students-teachers/';
									} ?>
									<?php if(ICL_LANGUAGE_CODE=='nl'){ 
										echo 'nl/business-software/studenten-leerkrachten/';
									} ?>
									<?php if(ICL_LANGUAGE_CODE=='fr'){ 
										echo '/fr/business-software/etudiants-professeurs/';
									} ?>
									<?php if(ICL_LANGUAGE_CODE=='cs'){ 
										echo '/cs/business-software-3/studenti-ucitele/';
									} ?>
								">
									<img src="<?php bloginfo('template_directory'); ?>/img/students-teachers.png">
								</a>
							</div>
							<h2>
								<?php if(ICL_LANGUAGE_CODE=='en'){ 
									echo '<strong>Students & teachers</strong>,<br/>';
									echo 'we have an offer you can\'t refuse.';
								} ?>
								<?php if(ICL_LANGUAGE_CODE=='nl'){ 
									echo '<strong>Studenten & docenten</strong>, ';
									echo 'we bieden u een voorstel dat u niet kan weigeren.';
								} ?>
								<?php if(ICL_LANGUAGE_CODE=='fr'){ 
									echo '<strong>Etudiants & enseignants</strong>, ';
									echo 'nous avons une offre que vous ne pouvez pas refuser.';
								} ?>
								<?php if(ICL_LANGUAGE_CODE=='cs'){ 
									echo '<strong>Studenti a učitelé</strong>,<br/>';
									echo 'máme pro vás zajímavou nabídku.';
								} ?>
							</h2>
						</div>
						<div class="arrow">
							<img src="<?php bloginfo('template_directory'); ?>/img/arrow-spotlight-color2.png">
							<?php if(ICL_LANGUAGE_CODE=='en'){ 
								echo '<a href="/business-software/students-teachers/">Read more</a>';
							} ?>
							<?php if(ICL_LANGUAGE_CODE=='nl'){ 
								echo '<a href="nl/business-software/studenten-leerkrachten/">Lees verder</a>';
							} ?>
							<?php if(ICL_LANGUAGE_CODE=='fr'){ 
								echo '<a href="/fr/business-software/etudiants-professeurs/">Lire la suite</a>';
							} ?>
							<?php if(ICL_LANGUAGE_CODE=='cs'){ 
								echo '<a href="/cs/business-software-3/studenti-ucitele/">Zobrazit více</a>';
							} ?>
						</div>
					</li>
					<li>
						<div class="wrapper right">
							<div class="img">
								<a href="
								<?php if(ICL_LANGUAGE_CODE=='en'){ 
									echo '/category/other-software-services/';
								} ?>
								<?php if(ICL_LANGUAGE_CODE=='nl'){ 
									echo '/nl/category/software/';
								} ?>
								<?php if(ICL_LANGUAGE_CODE=='fr'){ 
									echo '/fr/category/autres-software-services/';
								} ?>
								<?php if(ICL_LANGUAGE_CODE=='cs'){ 
									echo '/cs/category/podivejte-se-na-tento-produkt/';
								} ?>
								">
								<img src="<?php bloginfo('template_directory'); ?>/img/other-applications.png">
								</a>
							</div>
							<h2>
								<?php if(ICL_LANGUAGE_CODE=='en'){ 
									echo 'Check out <strong>this</strong> product!';
								} ?>
								<?php if(ICL_LANGUAGE_CODE=='nl'){ 
									echo 'Andere toepassingen';
								} ?>
								<?php if(ICL_LANGUAGE_CODE=='fr'){ 
									echo 'Décrouvrez <strong>ce</strong> produit!';
								} ?>
								<?php if(ICL_LANGUAGE_CODE=='cs'){ 
									echo 'Podívejte se na naše další <strong>produkty</strong>';
								} ?>	
							</h2>
						</div>
						<div class="arrow">
							<img src="<?php bloginfo('template_directory'); ?>/img/arrow-spotlight-color3.png">
							<?php if(ICL_LANGUAGE_CODE=='en'){ 
								echo '<a href="/category/other-software-services/">Read more</a>';
							} ?>
							<?php if(ICL_LANGUAGE_CODE=='nl'){ 
								echo '<a href="/nl/category/software/">Lees verder</a>';
							} ?>
							<?php if(ICL_LANGUAGE_CODE=='fr'){ 
								echo '<a href="/fr/category/autres-software-services/">Lire la suite</a>';
							} ?>
							<?php if(ICL_LANGUAGE_CODE=='cs'){ 
								echo '<a href="/cs/category/podivejte-se-na-tento-produkt/">Zobrazit více</a>';
							} ?>
						</div>
					</li>
				</ul>
			</div>
			<div id="extra">
				<ul>
					<?php if(ICL_LANGUAGE_CODE=='en'){
						echo '<li><a href="/jobs/"><img src="';
						bloginfo('template_directory');
						echo '/img/allegro-jobs.png"><h3><strong>Allegro</strong>Jobs</h3></a></li>';
					} ?>
					<?php if(ICL_LANGUAGE_CODE=='nl'){ 
						echo '<li><a href="/nl/jobs/"><img src="';
						bloginfo('template_directory');
						echo '/img/allegro-jobs.png"><h3><strong>Allegro</strong>Jobs</h3></a></li>';
					} ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ 
						echo '<li><a href="/fr/jobs/"><img src="';
						bloginfo('template_directory');
						echo '/img/allegro-jobs.png"><h3><strong>Allegro</strong>Jobs</h3></a></li>';
					} ?>
					<?php if(ICL_LANGUAGE_CODE=='cs'){ 
						echo '';
					} ?>
					
					<?php if(ICL_LANGUAGE_CODE=='en'){ 
						echo '<li><a href="http://www.popsy.com/remote" target="_blank"><img src="';
						bloginfo('template_directory');
						echo '/img/teamviewer-support.png"><h3><strong>Team</strong>viewer<br/>Support</h3></a></li>';
					} ?>
					<?php if(ICL_LANGUAGE_CODE=='nl'){ 
						echo '<li><a href="http://www.popsy.com/remote" target="_blank"><img src="';
						bloginfo('template_directory');
						echo '/img/teamviewer-support.png"><h3><strong>Team</strong>viewer<br/>Support</h3></a></li>';
					} ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ 
						echo '<li><a href="http://www.popsy.com/remote" target="_blank"><img src="';
						bloginfo('template_directory');
						echo '/img/teamviewer-support.png"><h3><strong>Team</strong>viewer<br/>Support</h3></a></li>';
					} ?>
					<?php if(ICL_LANGUAGE_CODE=='cs'){ 
						echo '';
					} ?>
					
					<?php if(ICL_LANGUAGE_CODE=='en'){ 
						echo '<li><a href="/business-software/start-your-business/"><img src="';
						bloginfo('template_directory');
						echo '/img/starter-deals.png"><h3><strong>Starter</strong>Deals</h3></a></li>';
					} ?>
					<?php if(ICL_LANGUAGE_CODE=='nl'){ 
						echo '<li><a href="/nl/business-software/start-your-business/"><img src="';
						bloginfo('template_directory');
						echo '/img/starter-deals.png"><h3><strong>Starter</strong>Deals</h3></a></li>';
					} ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ 
						echo '<li><a href="/fr/business-software/start-your-business/"><img src="';
						bloginfo('template_directory');
						echo '/img/starter-deals.png"><h3><strong>Starter</strong>Deals</h3></a></li>';
					} ?>
					<?php if(ICL_LANGUAGE_CODE=='cs'){ 
						echo '';
					} ?>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
