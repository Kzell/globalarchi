<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php

		global $page, $paged;

		wp_title( '|', true, 'right' );

		// Add the blog name.
		bloginfo( 'name' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";

		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

		?></title>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory');?>/css/style.css" />


	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/jquery.bg-resize.js"> </script>
	<script type="text/javascript">
		var templateDir = "<?php bloginfo('template_directory') ?>";
	</script>
	<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/scripts.js"> </script>
	
	<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<header id="branding" role="banner">
		<nav id="access" role="navigation">
			<?php wp_nav_menu( array('menu' => 'menu_header' )); ?>
		</nav><!-- #access -->
		<?php do_action('icl_language_selector'); ?>
	</header><!-- #branding -->


	<div id="wrapper">
