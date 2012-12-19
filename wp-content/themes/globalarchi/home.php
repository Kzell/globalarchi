<?php get_header(); ?>

	<div id="content" class="fullscreen_pattern">
		<div class="wrapper">
		
			<section id="logo">
				<h1>
					<a href="index.html" rel="">
						<img src="<?php bloginfo('template_directory');?>/images/design/logo.png" alt="" />
						<span><?php bloginfo( 'description' ); ?></hspan>
					</a>
				</h1>
			</section>
			<section id="references">
				<?php if ( have_posts() ) : ?>
				
					<?php while( have_posts() ) : the_post(); ?>
						<div class="description_projet">
							<div class="inner">
								<h2><?php the_title();?></h2>
								<strong class="keywords">Keyword keyword keyword keyword</strong>
								<img  alt="#" src="<?php bloginfo('template_directory');?>/images/visuals/photo_article2.jpg"/>
								<p><?php the_content();?></p>
								<a class="read_more" href="<?php the_permalink();?>">Voir le projet</a>
							</div>
						</div>
					<?php endwhile; ?>
						
				<?php endif; ?>
			</section><!--END References-->
			<section id="news">
				<div class="inner">
					<h2>La ville fertile : une exposition à la Cité de l'Architecture</h2>
					<span>12/01/13 - Par Aurélie</span>
					<img src="<?php bloginfo('template_directory');?>/images/visuals/photo_small.jpg" alt="" />
					<div class="article_text">
						<p>Description de l'actualité...</p>
						<a class="read_more" href="<?php the_permalink();?>">Lire la suite</a>
					</div>
				</div>
			</section><!--END News-->
		</div><!--END Wrapper-->
		<img alt="Projet" class="bg_fullscreen" src="<?php bloginfo('template_directory');?>/images/visuals/background_home.jpg" />
	</div><!--END Content-->

<?php get_footer(); ?>