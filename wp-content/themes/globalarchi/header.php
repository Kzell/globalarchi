<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title>Global Archi</title>

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory');?>/css/style.css" />
	<!--Fonts-->
	<link href='http://fonts.googleapis.com/css?family=Scada' rel='stylesheet' type='text/css'>

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/jquery.bg-resize.js"> </script>
	<script type="text/javascript">
		var templateDir = "<?php bloginfo('template_directory') ?>";
	</script>
	<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/scripts.js"> </script>
	
	<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>
	<header id="branding" role="banner">
		<div class="wrapper">
			<nav id="access" role="navigation">
				<?php wp_nav_menu( array('menu' => 'menu_header' )); ?>
			</nav>
			<?php languages_list_footer(); ?>
		</div>
	</header>