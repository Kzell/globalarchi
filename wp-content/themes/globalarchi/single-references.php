<?php get_header(); ?>
	<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/reference.js"></script>
	<div id="content" class="fullscreen_pattern single_reference">
		<div id="wrapper">
			<div class="banner_show_hide">
				<section id="logo">
					<div class="inner">
						<h1>
							<img src="<?php bloginfo('template_directory');?>/images/design/logo.png" alt="" />
							<span><?php bloginfo( 'description' ); ?></span>
						</h1>
					</div>
				</section>
				<section id="description_projet">
					<div class="title">
						<h2><?php echo the_title() ?></h2>
						<strong><?php echo get_field('town').' - '.get_field('country'); ?></strong>
					</div>
					<ul class="description_list">
						<li class="award">
							<strong><?php echo get_field('award') ?></strong>
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
									//var_dump($architectes[$i]);
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
				</section>
			</div><!--END banner_show_hide-->
			<a href="#" class="btn_show_hide_description_reference opened">Afficher / Masquer</a>
			<?php 
				$image = get_field('picture');
				$image = $image["sizes"]["large"];
			?>
			<img alt="Projet" class="bg_fullscreen"style="display:none" src="<?php echo $image; ?>" />
		</div><!--END wrapper-->
	</div><!--END Content-->
<?php get_footer(); ?>