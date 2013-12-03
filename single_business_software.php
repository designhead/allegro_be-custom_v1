<?php get_header(); ?>
	<div class="content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="wrapper">
				<div class="col1">
					<div class="business-software">
						<h3><?php the_title(); ?> <span class="base">Base</span></h3>
						<div class="details">
							<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
								<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
								<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
								<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
								<?php edit_post_link('Edit', '<div class="edit-entry">', '</div>'); ?>		
							</div>
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
								<li>
									<div class="label base">
										<img src="">
									</div>
									<div class="info modules1">
										<h4 class="base">Popsy BILLING</h4>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
										<a href="" class="base">Proceed</a>
									</div>
								</li>
								<li>
									<div class="label professional">
										<img src="">
									</div>
									<div class="info modules1">
										<h4 class="professional">Popsy STOCK</h4>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
										<a href="" class="professional">Proceed</a>
									</div>
								</li>
								<li>
									<div class="label entreprise">
										<img src="">
									</div>
									<div class="info modules1">
										<h4 class="entreprise">Popsy STOCK</h4>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
										<a href="" class="entreprise">Proceed</a>
									</div>
								</li>
								<li>
									<div class="info modules2">
										<h4>Popsy ACCOUNTANT PROFESSIONAL</h4>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
										<a href="">GO!</a>
									</div>
								</li>
								<li>
									<div class="info modules2">
										<h4>Popsy ACCOUNTANT ENTREPRISE</h4>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
										<a href="">GO!</a>
									</div>
								</li>
							</ul>
						</div>
						<div class="type-purchase">
							<h3>Choose your type of purchase</h3>
							<ul>
								<li>
									<div class="label">Local</div>
									<div class="info">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
										<a href="">
											Order now
										</a>	
									</div>
								</li>
								<li>
									<div class="label">SAAS</div>
									<div class="info">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
										<a href="">
											Order now
										</a>	
									</div>
								</li>
								<li>
									<div class="label">RENT</div>
									<div class="info">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
										<a href="">
											Order now
										</a>	
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			<?php endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p> 
		</div>
		<?php endif; ?>
	</div>
<?php get_footer(); ?>