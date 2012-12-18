<?php get_header(); ?>
	<div id="wrapper">
		<?php if (have_posts()) : ?>
	  		<?php while (have_posts()) : the_post(); ?>
	  			<h1><?php the_title(); ?></h1>
				<p><?php the_field('description'); ?></p>
				<img src="<?php the_field('photo'); ?>" alt=""/>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
<?php get_footer(); ?>