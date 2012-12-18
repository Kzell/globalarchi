<?php get_header(); ?>

	<div id="content">
		<img alt="Projet" class="bg_fullscreen" src="<?php bloginfo('template_directory');?>/images/visuals/background_home.jpg" />
		<span class="fullscreen_pattern">&nbsp;</span>
	</div>

	<h1 id="logo"><a href="index.html" rel=""><img src="<?php bloginfo('template_directory');?>/images/design/logo.png" alt="" /></a></h1>

	<div id="wrapper">
		<?php if ( have_posts() ) : ?>
		
			<?php while( have_posts() ) : the_post(); ?>
				<div class="description_projet">
					<?php
						the_title();
						the_content();
					?>
				</div>
			<?php endwhile; ?>
				
		<?php endif; ?>
	</div>

<?php get_footer(); ?>