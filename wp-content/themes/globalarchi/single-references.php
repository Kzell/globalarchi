<?php get_header(); ?>
	<div id="wrapper">
		<?php if ( have_posts() ) : ?>
			<?php while( have_posts() ) : the_post(); ?>
				<?php
					the_title();
					the_content();
				?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
<?php get_footer(); ?>