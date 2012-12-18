<?php get_header(); ?>
	<img alt="Projet" class="bg_fullscreen" src="<?php bloginfo('template_directory');?>/images/visuals/background_home.jpg" />
	<span class="fullscreen_pattern">&nbsp;</span>
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
	
<?php get_footer(); ?>