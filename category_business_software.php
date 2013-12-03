<?php get_header(); ?>
	<div class="content">
			<div class="wrapper">
				<div class="col1">
					<div class="business-software">
						<h3><?php the_title(); ?> <span class="base">Base</span></h3>
						<div class="details">
							...
						</div>
					</div>
				</div>
				<div class="col2">
					<div class="business-software">
						<div class="modules">
							<div class="snav">
								<ul>
									<li>I'm an independant or small/medium-size company</li>
									<li>I'm an accountant<br/><br/></li>
								</ul>
							</div>
							<ul>
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
									<li>
										<div class="label base">
											<img src="">
										</div>
										<div class="info modules1">
											<h4 class="base"><?php the_title(); ?></h4>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
											<a href="" class="base">Proceed</a>
										</div>
									</li>
									<?php endwhile; else: ?>
									<p>eeeeSorry, no posts matched your criteria.</p>
								<?php endif; ?>
							</ul>
						</div>
					</div>
				</div>
			
			
		</div>
		
	</div>
<?php get_footer(); ?>