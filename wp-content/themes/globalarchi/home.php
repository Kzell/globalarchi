<?php get_header(); ?>

	<div id="content" class="fullscreen_pattern">
		<div class="wrapper">
		
			<section id="logo">
				<a href="<?php echo site_url(); ?>" class="inner">
					<h1>
						<img src="<?php bloginfo('template_directory');?>/images/design/logo.png" alt="" />
						<span><?php bloginfo( 'description' ); ?></span>
					</h1>
				</a>
			</section>
			<section id="references">

				<?php
					$query = new WP_Query( array( 'post_type' => 'references', 'posts_per_page' => 2));
					$posts = $query->posts;

					foreach( $posts as $post){
						?>
							<div class="description_projet">
								<div class="inner">
									<h2><?php the_title();?></h2>
									<?php 
										$image = get_field('picture');
										$image = $image["sizes"]["large"];
									?>
									<img  alt="#" src="<?php echo $image; ?>"/>
									<div id="content">
										<ul class="description_list">
											<li>
												<span>Lieu : </span>
												<strong><?php echo get_field('country').' - '.get_field('town'); ?></strong>
											</li>
											<li>
												<span>Maîtrise d'Ouvrage : </span>
												<strong>A voir avec le client.</strong>
											</li>
											<li>
												<span>Architectes : </span>
												<?php 
													$architectes = get_field('architecte');
													$archi = '';
													for ($i=0; $i < sizeof($architectes); $i++) { 
														$archi .= '<a href="'.$architectes[$i]->guid.'">'.$architectes[$i]->post_title.'</a> - ';
													}

												?>
												<strong><?php echo substr($archi,0,-2); ?></strong>
											</li>
											<li>
												<span>Surface : </span>
												<strong><?php the_field('surface'); ?></strong>
											</li>
											<li>
												<span>Montant travaux : </span>
												<strong><?php the_field('price'); ?></strong>
											</li>
										</ul>
										<a class="read_more" href="<?php the_permalink();?>">Voir le projet</a>
									</div>
								</div>
							</div>
						<?php
					}
				?>
			</section><!--END References-->
			<section id="news">
				<div class="inner">
					<?php
						$lastpost = get_posts( array( 'numberposts' => 1) );
					?>

					<h2><?php echo $lastpost[0]->post_title; ?></h2>
					<span><?php echo $lastpost[0]->post_date; ?> - <?php echo $lastpost[0]->post_author; ?></span>
					<img src="<?php bloginfo('template_directory');?>/images/visuals/photo_small.jpg" alt="" />
					<div class="article_text">
						<p><?php echo $lastpost[0]->post_content; ?></p>
						<a class="read_more" href="<?php the_permalink();?>">Lire la suite</a>
					</div>

				</div>
			</section><!--END News-->
		</div><!--END Wrapper-->
		<img alt="Projet" class="bg_fullscreen"style="display:none" src="<?php bloginfo('template_directory');?>/images/visuals/background_home2.jpg" />
	</div><!--END Content-->

<?php get_footer(); ?>